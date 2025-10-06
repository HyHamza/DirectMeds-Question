<?php
/**
 * Plugin Name: Questionnaire Plugin
 * Description: A plugin to create and manage questionnaires with conditional logic.
 * Version: 1.0
 * Author: Jules
 */

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}

function qp_activate() {
    // Function to create pages
    qp_create_questionnaire_pages();
    // Function to create database table
    qp_create_orders_table();
}
register_activation_hook(__FILE__, 'qp_activate');

function qp_create_orders_table() {
    global $wpdb;
    $table_name = $wpdb->prefix . 'questionnaire_orders';
    $charset_collate = $wpdb->get_charset_collate();

    $sql = "CREATE TABLE $table_name (
        id mediumint(9) NOT NULL AUTO_INCREMENT,
        created_at datetime DEFAULT '0000-00-00 00:00:00' NOT NULL,
        first_name tinytext NOT NULL,
        last_name tinytext NOT NULL,
        phone tinytext NOT NULL,
        email varchar(100) NOT NULL,
        medication varchar(255) NOT NULL,
        price decimal(10, 2) NOT NULL,
        status varchar(50) DEFAULT '' NOT NULL,
        bmi decimal(5,2) DEFAULT 0.00 NOT NULL,
        full_data text NOT NULL,
        PRIMARY KEY  (id)
    ) $charset_collate;";

    require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
    dbDelta($sql);
}

function qp_create_questionnaire_pages() {
    $template_dir = plugin_dir_path(__FILE__) . 'templates/';
    $files = glob($template_dir . '*.php');

    foreach ($files as $file) {
        $page_slug = basename($file, '.php');
        $page_title = ucfirst(str_replace('-', ' ', $page_slug));

        // Skip creating a page for questionnaire-15 and the template itself
        if ($page_slug === 'questionnaire-15' || $page_slug === 'questionnaire-page-template') {
            continue;
        }

        // Check if page already exists
        if (get_page_by_path($page_slug) === null) {
            $page_content = '[questionnaire_page template="' . basename($file) . '"]';

            $page_data = array(
                'post_title'    => $page_title,
                'post_content'  => $page_content,
                'post_status'   => 'publish',
                'post_author'   => 1,
                'post_type'     => 'page',
                'post_name'     => $page_slug,
            );

            wp_insert_post($page_data);
        }
    }
}

function qp_render_questionnaire_page($atts) {
    // This shortcode now only acts as a marker for the template_redirect hook.
    // The actual rendering is handled by qp_template_redirect().
    return '';
}
add_shortcode('questionnaire_page', 'qp_render_questionnaire_page');

function qp_template_redirect() {
    if (is_singular('page') && has_shortcode(get_post()->post_content, 'questionnaire_page')) {
        $post = get_post();
        $content = $post->post_content;

        // Extract the template file from the shortcode
        $pattern = get_shortcode_regex(['questionnaire_page']);
        if (preg_match('/' . $pattern . '/s', $content, $matches) && isset($matches[3])) {
            $shortcode_attrs = shortcode_parse_atts($matches[3]);
            if (isset($shortcode_attrs['template'])) {
                $template_file = str_replace('.html', '.php', sanitize_file_name($shortcode_attrs['template']));
                $template_path = plugin_dir_path(__FILE__) . 'templates/' . $template_file;

                if (file_exists($template_path)) {
                    if (isset($_SESSION['questionnaire_data'])) {
                        extract($_SESSION['questionnaire_data']);
                    }

                    ob_start();
                    include $template_path;
                    $output = ob_get_clean();

                    // Replace asset paths
                    $output = str_replace('../assets', plugin_dir_url(__FILE__) . 'assets', $output);

                    // Replace page links
                    preg_match_all('/href="([^"]*?\.php|[^"]*?\.html)"/', $output, $link_matches);
                    if (!empty($link_matches[1])) {
                        foreach (array_unique($link_matches[1]) as $match) {
                             $page_slug = basename($match, '.php');
                             $page_slug = basename($page_slug, '.html');
                            $page = get_page_by_path($page_slug);
                            if ($page) {
                                $permalink = get_permalink($page->ID);
                                $output = str_replace('"' . $match . '"', '"' . $permalink . '"', $output);
                            }
                        }
                    }

                    // Replace form action URL
                    $output = str_replace('action=""', 'action="' . esc_url(admin_url('admin-post.php')) . '"', $output);


                    echo $output;
                    exit();
                }
            }
        }
    }
}
add_action('template_redirect', 'qp_template_redirect');

function qp_start_session() {
    if (!session_id()) {
        session_start();
    }
}
add_action('init', 'qp_start_session', 1);

function qp_handle_form_submission() {
    if (!isset($_POST['page_slug'])) {
        return;
    }

    $page_slug = sanitize_text_field($_POST['page_slug']);

    if (!isset($_SESSION['questionnaire_data'])) {
        $_SESSION['questionnaire_data'] = array();
    }

    foreach ($_POST as $key => $value) {
        if ($key !== 'page_slug' && $key !== 'action') {
            if (is_array($value)) {
                $_SESSION['questionnaire_data'][$key] = array_map('sanitize_text_field', $value);
            } else {
                $_SESSION['questionnaire_data'][$key] = sanitize_text_field($value);
            }
        }
    }

    $next_page_slug = qp_get_next_page($page_slug, $_SESSION['questionnaire_data']);
    $redirect_url = get_permalink(get_page_by_path($next_page_slug));

    if ($redirect_url) {
        wp_redirect($redirect_url);
        exit;
    }
}
add_action('admin_post_nopriv_questionnaire_submit', 'qp_handle_form_submission');
add_action('admin_post_questionnaire_submit', 'qp_handle_form_submission');

function qp_get_next_page($current_slug, $data) {
    // Disqualification logic
    if (isset($data['intake_health']) && (!in_array('none', $data['intake_health']) || count($data['intake_health']) > 1)) {
        return 'not-qualified';
    }

    if (isset($data['intake_disqualify'])) {
        if ($data['intake_disqualify'] !== 'None') {
            return 'not-qualified';
        }
    }

    if (isset($data['intake_thyroid_cancer']) && $data['intake_thyroid_cancer'] === 'yes') {
        return 'not-qualified';
    }

    if (isset($data['intake_diabetic_retinopathy']) && $data['intake_diabetic_retinopathy'] === 'yes') {
        return 'not-qualified';
    }

    if (isset($data['intake_endocrine_neoplasia']) && $data['intake_endocrine_neoplasia'] === 'yes') {
        return 'not-qualified';
    }

    if (isset($data['intake_gi_disorder']) && $data['intake_gi_disorder'] === 'yes') {
        return 'not-qualified';
    }

    if (isset($data['intake_height_ft']) && isset($data['intake_height_in']) && isset($data['intake_weight'])) {
        $height_in = ((int)$data['intake_height_ft'] * 12) + (int)$data['intake_height_in'];
        $weight_lbs = (int)$data['intake_weight'];
        if ($height_in > 0) {
            $bmi = ($weight_lbs / ($height_in * $height_in)) * 703;
            if ($bmi < 27) {
                return 'not-qualified';
            }
        }
    }

    $page_number = (int) str_replace('questionnaire-', '', $current_slug);

    if ($page_number > 0) {
        if ($page_number == 14) {
            return 'calculating';
        }
        return 'questionnaire-' . ($page_number + 1);
    }

    switch ($current_slug) {
        case 'calculating':
            return 'results';
        case 'results':
            return 'register';
        case 'register':
            return 'checkout';
        case 'checkout':
            return 'thank-you';
        default:
            return 'questionnaire-1';
    }
}

function qp_handle_checkout_submission() {
    if (!isset($_SESSION['questionnaire_data'])) {
        // Or handle error appropriately
        wp_redirect(home_url());
        exit;
    }

    global $wpdb;
    $table_name = $wpdb->prefix . 'questionnaire_orders';
    $data = $_SESSION['questionnaire_data'];

    $wpdb->insert(
        $table_name,
        array(
            'created_at' => current_time('mysql'),
            'first_name' => sanitize_text_field($data['intake_first_name']),
            'last_name'  => sanitize_text_field($data['intake_last_name']),
            'phone'      => sanitize_text_field($data['intake_phone']),
            'email'      => sanitize_email($data['intake_email']),
            'medication' => 'Semaglutide', // Placeholder
            'price'      => '297.00', // Placeholder
            'status'     => 'Pending Payment',
            'bmi'        => isset($data['intake_bmi']) ? sanitize_text_field($data['intake_bmi']) : 0,
            'full_data'  => serialize($data),
        )
    );

    // Clear session data after saving
    unset($_SESSION['questionnaire_data']);

    $redirect_url = get_permalink(get_page_by_path('thank-you'));
    if ($redirect_url) {
        wp_redirect($redirect_url);
        exit;
    }
}
add_action('admin_post_nopriv_checkout_submit', 'qp_handle_checkout_submission');
add_action('admin_post_checkout_submit', 'qp_handle_checkout_submission');

function qp_admin_menu() {
    add_menu_page(
        'Questionnaire Orders',
        'Questionnaire',
        'manage_options',
        'questionnaire-orders',
        'qp_orders_page_html',
        'dashicons-clipboard',
        20
    );
}
add_action('admin_menu', 'qp_admin_menu');

function qp_orders_page_html() {
    global $wpdb;
    $table_name = $wpdb->prefix . 'questionnaire_orders';

    $orders = $wpdb->get_results("SELECT * FROM $table_name ORDER BY created_at DESC");
    ?>
    <div class="wrap">
        <h1>Questionnaire Orders</h1>
        <table class="wp-list-table widefat fixed striped">
            <thead>
                <tr>
                    <th scope="col" class="manage-column">Order ID</th>
                    <th scope="col" class="manage-column">Date</th>
                    <th scope="col" class="manage-column">Name</th>
                    <th scope="col" class="manage-column">Email</th>
                    <th scope="col" class="manage-column">Phone</th>
                    <th scope="col" class="manage-column">Medication</th>
                    <th scope="col" class="manage-column">Price</th>
                    <th scope="col" class="manage-column">BMI</th>
                    <th scope="col" class="manage-column">Status</th>
                </tr>
            </thead>
            <tbody>
                <?php if (empty($orders)) : ?>
                    <tr>
                        <td colspan="9">No orders found.</td>
                    </tr>
                <?php else : ?>
                    <?php foreach ($orders as $order) : ?>
                        <tr>
                            <td><?php echo esc_html($order->id); ?></td>
                            <td><?php echo esc_html($order->created_at); ?></td>
                            <td><?php echo esc_html($order->first_name . ' ' . $order->last_name); ?></td>
                            <td><a href="mailto:<?php echo esc_attr($order->email); ?>"><?php echo esc_html($order->email); ?></a></td>
                            <td><?php echo esc_html($order->phone); ?></td>
                            <td><?php echo esc_html($order->medication); ?></td>
                            <td>$<?php echo esc_html($order->price); ?></td>
                            <td><?php echo esc_html($order->bmi); ?></td>
                            <td><?php echo esc_html($order->status); ?></td>
                        </tr>
                    <?php endforeach; ?>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
    <?php
}