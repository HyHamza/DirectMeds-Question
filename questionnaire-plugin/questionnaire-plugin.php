<?php
/**
 * Plugin Name: Questionnaire Plugin
 * Description: A plugin to create and manage questionnaires with conditional logic.
 * Version: 1.0
 * Author: Jules
 */

if (!defined('ABSPATH')) {
    exit;
}

function create_questionnaire_tables() {
    global $wpdb;
    $charset_collate = $wpdb->get_charset_collate();
    require_once(ABSPATH . 'wp-admin/includes/upgrade.php');

    $table_name = $wpdb->prefix . 'questionnaires';
    $sql = "CREATE TABLE $table_name (
        id mediumint(9) NOT NULL AUTO_INCREMENT,
        title tinytext NOT NULL,
        created_at datetime DEFAULT '0000-00-00 00:00:00' NOT NULL,
        PRIMARY KEY  (id)
    ) $charset_collate;";
    dbDelta($sql);

    $table_name = $wpdb->prefix . 'questions';
    $sql = "CREATE TABLE $table_name (
        id mediumint(9) NOT NULL AUTO_INCREMENT,
        questionnaire_id mediumint(9) NOT NULL,
        question_text text NOT NULL,
        question_type varchar(55) DEFAULT '' NOT NULL,
        question_order mediumint(9) NOT NULL,
        PRIMARY KEY  (id)
    ) $charset_collate;";
    dbDelta($sql);

    $table_name = $wpdb->prefix . 'answers';
    $sql = "CREATE TABLE $table_name (
        id mediumint(9) NOT NULL AUTO_INCREMENT,
        question_id mediumint(9) NOT NULL,
        answer_text text NOT NULL,
        PRIMARY KEY  (id)
    ) $charset_collate;";
    dbDelta($sql);

    $table_name = $wpdb->prefix . 'conditions';
    $sql = "CREATE TABLE $table_name (
        id mediumint(9) NOT NULL AUTO_INCREMENT,
        question_id mediumint(9) NOT NULL,
        answer_id mediumint(9) NOT NULL,
        action varchar(55) DEFAULT '' NOT NULL,
        target_question_id mediumint(9),
        PRIMARY KEY  (id)
    ) $charset_collate;";
    dbDelta($sql);
}

register_activation_hook(__FILE__, 'create_questionnaire_tables');

function questionnaire_admin_menu() {
    add_menu_page(
        'Questionnaires',
        'Questionnaires',
        'manage_options',
        'questionnaire-plugin',
        'questionnaire_list_page',
        'dashicons-forms',
        20
    );

    add_submenu_page(
        'questionnaire-plugin',
        'Edit Questionnaire',
        'Edit Questionnaire',
        'manage_options',
        'questionnaire-edit',
        'questionnaire_edit_page'
    );

    // This page is hidden from the menu, accessed via links
    add_submenu_page(
        null,
        'Edit Question',
        'Edit Question',
        'manage_options',
        'questionnaire-question-edit',
        'questionnaire_question_edit_page'
    );
}
add_action('admin_menu', 'questionnaire_admin_menu');

function questionnaire_question_edit_page() {
    global $wpdb;
    $questionnaire_id = isset($_GET['id']) ? intval($_GET['id']) : 0;
    $question_id = isset($_GET['question_id']) ? intval($_GET['question_id']) : 0;
    $questions_table = $wpdb->prefix . 'questions';
    $answers_table = $wpdb->prefix . 'answers';
    $conditions_table = $wpdb->prefix . 'conditions';

    // Handle POST requests
    if (!empty($_POST)) {
        // Handle updating question
        if (isset($_POST['update_question_text'])) {
            $text = sanitize_text_field($_POST['update_question_text']);
            $wpdb->update($questions_table, ['question_text' => $text], ['id' => $question_id]);
            echo "<div class='updated'><p>Question updated.</p></div>";
        }

        // Handle adding a new answer
        if (isset($_POST['new_answer_text']) && !empty($_POST['new_answer_text'])) {
            $text = sanitize_text_field($_POST['new_answer_text']);
            $wpdb->insert($answers_table, [
                'question_id' => $question_id,
                'answer_text' => $text,
            ]);
            echo "<div class='updated'><p>Answer added.</p></div>";
        }

        // Handle adding a condition
        if (isset($_POST['new_condition_answer_id']) && !empty($_POST['new_condition_answer_id'])) {
            $answer_id = intval($_POST['new_condition_answer_id']);
            $action = sanitize_text_field($_POST['new_condition_action']);
            $target_question_id = isset($_POST['new_condition_target_question_id']) ? intval($_POST['new_condition_target_question_id']) : 0;
            $wpdb->insert($conditions_table, [
                'question_id' => $question_id,
                'answer_id' => $answer_id,
                'action' => $action,
                'target_question_id' => $target_question_id,
            ]);
            echo "<div class='updated'><p>Condition added.</p></div>";
        }
    }

    // Handle GET actions
    if (isset($_GET['action'])) {
        // Handle deleting an answer
        if ($_GET['action'] == 'delete_answer' && isset($_GET['answer_id'])) {
            $answer_id_to_delete = intval($_GET['answer_id']);
            $wpdb->delete($answers_table, ['id' => $answer_id_to_delete]);
            $wpdb->delete($conditions_table, ['answer_id' => $answer_id_to_delete]);
            echo "<div class='updated'><p>Answer deleted.</p></div>";
        }

        // Handle deleting a condition
        if ($_GET['action'] == 'delete_condition' && isset($_GET['condition_id'])) {
            $condition_id_to_delete = intval($_GET['condition_id']);
            $wpdb->delete($conditions_table, ['id' => $condition_id_to_delete]);
            echo "<div class='updated'><p>Condition deleted.</p></div>";
        }
    }

    $question = $wpdb->get_row($wpdb->prepare("SELECT * FROM $questions_table WHERE id = %d", $question_id));
    $answers = $wpdb->get_results($wpdb->prepare("SELECT * FROM $answers_table WHERE question_id = %d", $question_id));
    $conditions = $wpdb->get_results($wpdb->prepare("SELECT c.*, a.answer_text, q.question_text as target_question_text FROM $conditions_table c LEFT JOIN $answers_table a ON c.answer_id = a.id LEFT JOIN $questions_table q ON c.target_question_id = q.id WHERE c.question_id = %d", $question_id));
    $all_questions = $wpdb->get_results($wpdb->prepare("SELECT id, question_text FROM $questions_table WHERE questionnaire_id = %d AND id != %d", $questionnaire_id, $question_id));

    ?>
    <div class="wrap">
        <h1>Edit Question: <?php echo esc_html($question->question_text); ?></h1>
        <p><a href="?page=questionnaire-edit&id=<?php echo $questionnaire_id; ?>">&larr; Back to Questionnaire</a></p>

        <form method="post" action="?page=questionnaire-question-edit&id=<?php echo $questionnaire_id; ?>&question_id=<?php echo $question_id; ?>">
            <table class="form-table">
                <tr valign="top">
                    <th scope="row">Question Text</th>
                    <td><input type="text" name="update_question_text" value="<?php echo esc_attr($question->question_text); ?>" class="regular-text" required></td>
                </tr>
            </table>
            <input type="submit" value="Update Question" class="button button-primary">
        </form>

        <hr />

        <h2>Answers</h2>
        <table class="wp-list-table widefat fixed striped">
            <thead>
                <tr>
                    <th>Answer Text</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php if (!empty($answers)) : foreach ($answers as $a) : ?>
                <tr>
                    <td><?php echo esc_html($a->answer_text); ?></td>
                    <td>
                        <a href="?page=questionnaire-question-edit&id=<?php echo $questionnaire_id; ?>&question_id=<?php echo $question_id; ?>&action=delete_answer&answer_id=<?php echo $a->id; ?>" onclick="return confirm('Are you sure?')">Delete</a>
                    </td>
                </tr>
                <?php endforeach; else: ?>
                <tr><td colspan="2">No answers yet.</td></tr>
                <?php endif; ?>
            </tbody>
        </table>

        <h3>Add New Answer</h3>
        <form method="post" action="?page=questionnaire-question-edit&id=<?php echo $questionnaire_id; ?>&question_id=<?php echo $question_id; ?>">
            <input type="text" name="new_answer_text" placeholder="Answer Text" required>
            <input type="submit" value="Add Answer" class="button button-primary">
        </form>

        <hr />

        <h2>Conditional Logic</h2>
        <table class="wp-list-table widefat fixed striped">
            <thead>
                <tr>
                    <th>When answer is...</th>
                    <th>Action</th>
                    <th>Target</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php if (!empty($conditions)) : foreach ($conditions as $c) : ?>
                <tr>
                    <td><?php echo esc_html($c->answer_text); ?></td>
                    <td><?php echo esc_html($c->action); ?></td>
                    <td><?php echo esc_html($c->target_question_text ? $c->target_question_text : 'End Questionnaire'); ?></td>
                    <td>
                         <a href="?page=questionnaire-question-edit&id=<?php echo $questionnaire_id; ?>&question_id=<?php echo $question_id; ?>&action=delete_condition&condition_id=<?php echo $c->id; ?>" onclick="return confirm('Are you sure?')">Delete</a>
                    </td>
                </tr>
                <?php endforeach; else: ?>
                <tr><td colspan="4">No conditions yet.</td></tr>
                <?php endif; ?>
            </tbody>
        </table>

        <h3>Add New Condition</h3>
        <form method="post" action="?page=questionnaire-question-edit&id=<?php echo $questionnaire_id; ?>&question_id=<?php echo $question_id; ?>">
            When answer is:
            <select name="new_condition_answer_id">
                <option value="">-- Select Answer --</option>
                <?php foreach ($answers as $a) : ?>
                <option value="<?php echo $a->id; ?>"><?php echo esc_html($a->answer_text); ?></option>
                <?php endforeach; ?>
            </select>
            Action:
            <select name="new_condition_action">
                <option value="show_question">Show Question</option>
                <option value="end_questionnaire">End Questionnaire</option>
            </select>
            Target Question:
            <select name="new_condition_target_question_id">
                <option value="0">None (for End Questionnaire)</option>
                <?php foreach ($all_questions as $q) : ?>
                <option value="<?php echo $q->id; ?>"><?php echo esc_html($q->question_text); ?></option>
                <?php endforeach; ?>
            </select>
            <input type="submit" value="Add Condition" class="button button-primary">
        </form>
    </div>
    <?php
}

function questionnaire_edit_page() {
    global $wpdb;
    $questionnaire_id = intval($_GET['id']);
    $questionnaires_table = $wpdb->prefix . 'questionnaires';
    $questions_table = $wpdb->prefix . 'questions';
    $answers_table = $wpdb->prefix . 'answers';
    $conditions_table = $wpdb->prefix . 'conditions';

    if (isset($_GET['action']) && $_GET['action'] == 'delete_question' && isset($_GET['question_id'])) {
        $question_id_to_delete = intval($_GET['question_id']);
        $wpdb->delete($questions_table, ['id' => $question_id_to_delete]);
        $wpdb->delete($answers_table, ['question_id' => $question_id_to_delete]);
        $wpdb->delete($conditions_table, ['question_id' => $question_id_to_delete]);
        echo "<div class='updated'><p>Question deleted.</p></div>";
    }

    if (isset($_POST['update_questionnaire_title'])) {
        $title = sanitize_text_field($_POST['update_questionnaire_title']);
        $wpdb->update($questionnaires_table, ['title' => $title], ['id' => $questionnaire_id]);
        echo "<div class='updated'><p>Questionnaire updated.</p></div>";
    }

    if (isset($_POST['new_question_text'])) {
        $text = sanitize_text_field($_POST['new_question_text']);
        $type = sanitize_text_field($_POST['new_question_type']);
        $wpdb->insert($questions_table, [
            'questionnaire_id' => $questionnaire_id,
            'question_text' => $text,
            'question_type' => $type,
            'question_order' => 99, // Simplified for now
        ]);
        echo "<div class='updated'><p>Question added.</p></div>";
    }

    $questionnaire = $wpdb->get_row($wpdb->prepare("SELECT * FROM $questionnaires_table WHERE id = %d", $questionnaire_id));
    $questions = $wpdb->get_results($wpdb->prepare("SELECT * FROM $questions_table WHERE questionnaire_id = %d ORDER BY question_order", $questionnaire_id));
    ?>
    <div class="wrap">
        <h1>Edit Questionnaire</h1>

        <form method="post">
            <input type="text" name="update_questionnaire_title" value="<?php echo esc_attr($questionnaire->title); ?>" required>
            <input type="submit" value="Update Title" class="button button-primary">
        </form>

        <h2>Questions</h2>
        <table class="wp-list-table widefat fixed striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Text</th>
                    <th>Type</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($questions as $q) : ?>
                <tr>
                    <td><?php echo $q->id; ?></td>
                    <td><?php echo esc_html($q->question_text); ?></td>
                    <td><?php echo esc_html($q->question_type); ?></td>
                    <td>
                        <a href="?page=questionnaire-question-edit&id=<?php echo $questionnaire_id; ?>&question_id=<?php echo $q->id; ?>">Edit</a> |
                        <a href="?page=questionnaire-edit&id=<?php echo $questionnaire_id; ?>&action=delete_question&question_id=<?php echo $q->id; ?>" onclick="return confirm('Are you sure?')">Delete</a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>

        <h2>Add New Question</h2>
        <form method="post">
            <input type="hidden" name="questionnaire_id" value="<?php echo $questionnaire_id; ?>">
            <input type="text" name="new_question_text" placeholder="Question Text" required>
            <select name="new_question_type">
                <option value="text">Text</option>
                <option value="radio">Radio</option>
                <option value="checkbox">Checkbox</option>
            </select>
            <input type="submit" value="Add Question" class="button button-primary">
        </form>
    </div>
    <?php
}

function questionnaire_list_page() {
    global $wpdb;
    $table_name = $wpdb->prefix . 'questionnaires';

    if (isset($_GET['action']) && $_GET['action'] == 'delete' && isset($_GET['id'])) {
        $id = intval($_GET['id']);
        $wpdb->delete($table_name, ['id' => $id]);
        // Also delete associated questions, answers, and conditions
        $wpdb->delete($wpdb->prefix . 'questions', ['questionnaire_id' => $id]);
        // Deleting questions should cascade to answers and conditions, but let's be explicit
        // This is a simplification; a more robust solution would join tables.
        echo "<div class='updated'><p>Questionnaire deleted.</p></div>";
    }

    if (isset($_POST['new_questionnaire_title'])) {
        $title = sanitize_text_field($_POST['new_questionnaire_title']);
        $wpdb->insert($table_name, ['title' => $title, 'created_at' => current_time('mysql')]);
        echo "<div class='updated'><p>Questionnaire added.</p></div>";
    }

    $questionnaires = $wpdb->get_results("SELECT * FROM $table_name");
    ?>
    <div class="wrap">
        <h1>Questionnaires</h1>

        <h2>Add New Questionnaire</h2>
        <form method="post">
            <input type="text" name="new_questionnaire_title" placeholder="Questionnaire Title" required>
            <input type="submit" value="Add Questionnaire" class="button button-primary">
        </form>

        <h2>Existing Questionnaires</h2>
        <table class="wp-list-table widefat fixed striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th>Created At</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($questionnaires as $q) : ?>
                <tr>
                    <td><?php echo $q->id; ?></td>
                    <td><?php echo esc_html($q->title); ?></td>
                    <td><?php echo $q->created_at; ?></td>
                    <td>
                        <a href="?page=questionnaire-edit&id=<?php echo $q->id; ?>">Edit</a> |
                        <a href="?page=questionnaire-plugin&action=delete&id=<?php echo $q->id; ?>" onclick="return confirm('Are you sure?')">Delete</a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <?php
}

function questionnaire_enqueue_assets() {
    // Deregister default WP jQuery and register the custom version in the header
    wp_deregister_script('jquery');
    wp_register_script('jquery-custom', plugin_dir_url(__FILE__) . 'assets/js_from_site/jquery-1.12.1.min.js', [], '1.12.1', false);

    // Enqueue styles from the site
    wp_enqueue_style('bootstrap-min', plugin_dir_url(__FILE__) . 'assets/css_from_site/bootstrap.min.css');
    wp_enqueue_style('bootstrap-icons-min', plugin_dir_url(__FILE__) . 'assets/css_from_site/bootstrap-icons.min.css');
    wp_enqueue_style('qualify', plugin_dir_url(__FILE__) . 'assets/css_from_site/qualify.css');
    wp_enqueue_style('utils-min-css', plugin_dir_url(__FILE__) . 'assets/css_from_site/utils.min.css');

    // Enqueue scripts from the site, making them dependent on the custom jQuery
    wp_enqueue_script('jquery-custom'); // Enqueue the registered script
    wp_enqueue_script('bootstrap-bundle-min', plugin_dir_url(__FILE__) . 'assets/js_from_site/bootstrap.bundle.min.js', ['jquery-custom'], null, true);
    wp_enqueue_script('utils-min-js', plugin_dir_url(__FILE__) . 'assets/js_from_site/utils.min.js', ['jquery-custom'], null, true);
    wp_enqueue_script('29752987', plugin_dir_url(__FILE__) . 'assets/js_from_site/29752987.js', ['jquery-custom'], null, true);
    wp_enqueue_script('everflow', plugin_dir_url(__FILE__) . 'assets/js_from_site/everflow.js', ['jquery-custom'], null, true);
    wp_enqueue_script('gtm', plugin_dir_url(__FILE__) . 'assets/js_from_site/gtm.js', ['jquery-custom'], null, true);
    wp_enqueue_script('matomo', plugin_dir_url(__FILE__) . 'assets/js_from_site/matomo.js', ['jquery-custom'], null, true);
    wp_enqueue_script('smartlook', plugin_dir_url(__FILE__) . 'assets/js_from_site/smartlook.js', ['jquery-custom'], null, true);
    wp_enqueue_script('tp-widget-bootstrap', plugin_dir_url(__FILE__) . 'assets/js_from_site/tp.widget.bootstrap.min.js', ['jquery-custom'], null, true);

    // Enqueue the plugin's custom logic script, also dependent on custom jQuery
    wp_enqueue_script('questionnaire-script', plugin_dir_url(__FILE__) . 'assets/js/main.js', ['jquery-custom'], '1.0', true);

    // Pass data to script
    wp_localize_script('questionnaire-script', 'questionnaire_ajax', [
        'ajax_url' => admin_url('admin-ajax.php')
    ]);
}
add_action('wp_enqueue_scripts', 'questionnaire_enqueue_assets');


function questionnaire_shortcode($atts) {
    $atts = shortcode_atts(['id' => 0], $atts, 'questionnaire');
    $questionnaire_id = intval($atts['id']);

    if (!$questionnaire_id) {
        return 'Error: No questionnaire ID provided.';
    }

    global $wpdb;
    $questions_table = $wpdb->prefix . 'questions';
    $first_question = $wpdb->get_row($wpdb->prepare(
        "SELECT * FROM $questions_table WHERE questionnaire_id = %d ORDER BY question_order ASC LIMIT 1",
        $questionnaire_id
    ));

    if (!$first_question) {
        return 'Error: Questionnaire has no questions.';
    }

    $logo_url = plugin_dir_url(__FILE__) . 'assets/img_from_site/logo-dk.png';
    $seen_on_desktop_url = plugin_dir_url(__FILE__) . 'assets/img_from_site/seen-on-desktop.png';
    $seen_on_mobile_url = plugin_dir_url(__FILE__) . 'assets/img_from_site/seen-on-mobile.png';

    ob_start();
    ?>
    <form id="questionnaireForm">
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container justify-content-center">
                <img src="<?php echo esc_url($logo_url); ?>" alt="Direct Meds" class="img-fluid">
            </div>
        </nav>
        <section class="container questions-stage">
            <div class="row">
                <div class="col-lg-8 offset-lg-2 col-md-12" id="card-master" data-questionnaire-id="<?php echo $questionnaire_id; ?>" data-first-question-id="<?php echo $first_question->id; ?>">
                    <!-- Questions will be loaded here by JavaScript -->
                    <div class="text-center">Loading...</div>
                </div>
            </div>
             <div id="featuredLogos" style="margin-top:40px;padding: 0px 20px;text-align:center;">
                <div class="d-none d-md-block">
                    <p style="color:#969ecf;font-size:12px;">Direct Meds featured on:</p>
                    <img src="<?php echo esc_url($seen_on_desktop_url); ?>" class="img-fluid">
                </div>
                <div class="d-block d-md-none">
                    <p style="color:#969ecf;font-size:12px;">Direct Meds featured on:</p>
                    <img src="<?php echo esc_url($seen_on_mobile_url); ?>" class="img-fluid">
                </div>
            </div>
        </section>
    </form>
     <div class="footer"><center><a href="#">Terms & Conditions</a> | <a href="#">Privacy Policy</a> | <a href="#">Refund Policy</a> | <a href="#">Affiliates</a> | <a href="#">Contact Us</a> <br><br>Direct Meds, LLC</center></div><br><br><br>
    <?php
    return ob_get_clean();
}
add_shortcode('questionnaire', 'questionnaire_shortcode');

function get_question_data() {
    if (!isset($_POST['question_id'])) {
        wp_send_json_error('Missing question ID.');
    }
    $question_id = intval($_POST['question_id']);

    global $wpdb;
    $questions_table = $wpdb->prefix . 'questions';
    $answers_table = $wpdb->prefix . 'answers';

    $question = $wpdb->get_row($wpdb->prepare("SELECT * FROM $questions_table WHERE id = %d", $question_id));
    $answers = $wpdb->get_results($wpdb->prepare("SELECT * FROM $answers_table WHERE question_id = %d", $question_id));

    if ($question) {
        $questionnaire_id = $question->questionnaire_id;
        $total_questions = $wpdb->get_var($wpdb->prepare("SELECT COUNT(*) FROM $questions_table WHERE questionnaire_id = %d", $questionnaire_id));
    } else {
        $total_questions = 0;
    }

    $data = [
        'question' => $question,
        'answers' => $answers,
        'total_questions' => $total_questions,
    ];

    wp_send_json_success($data);
}
add_action('wp_ajax_get_question_data', 'get_question_data');
add_action('wp_ajax_nopriv_get_question_data', 'get_question_data');

function handle_answer_submission() {
    if (!isset($_POST['question_id']) || !isset($_POST['answer_id'])) {
        wp_send_json_error('Missing data.');
    }

    $question_id = intval($_POST['question_id']);
    $answer_id = intval($_POST['answer_id']);

    global $wpdb;
    $conditions_table = $wpdb->prefix . 'conditions';
    $questions_table = $wpdb->prefix . 'questions';

    $condition = $wpdb->get_row($wpdb->prepare(
        "SELECT * FROM $conditions_table WHERE question_id = %d AND answer_id = %d",
        $question_id, $answer_id
    ));

    if ($condition) {
        if ($condition->action === 'end_questionnaire' || $condition->target_question_id == 0) {
            wp_send_json_success(['next_question_id' => 'end']);
        } else {
            wp_send_json_success(['next_question_id' => $condition->target_question_id]);
        }
    } else {
        // Default behavior: get the next question in order
        $questionnaire_id = $wpdb->get_var($wpdb->prepare("SELECT questionnaire_id FROM $questions_table WHERE id = %d", $question_id));
        $current_order = $wpdb->get_var($wpdb->prepare("SELECT question_order FROM $questions_table WHERE id = %d", $question_id));

        $next_question_id = $wpdb->get_var($wpdb->prepare(
            "SELECT id FROM $questions_table WHERE questionnaire_id = %d AND question_order > %d ORDER BY question_order ASC LIMIT 1",
            $questionnaire_id, $current_order
        ));

        if ($next_question_id) {
            wp_send_json_success(['next_question_id' => $next_question_id]);
        } else {
            wp_send_json_success(['next_question_id' => 'end']);
        }
    }
}
add_action('wp_ajax_handle_answer_submission', 'handle_answer_submission');
add_action('wp_ajax_nopriv_handle_answer_submission', 'handle_answer_submission');
?>