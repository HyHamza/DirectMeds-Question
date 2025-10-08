<?php
/**
 * Plugin Name: WeightLossAdvocates Plugin
 * Description: A custom plugin specially made for WeightLossAdvocates site.
 * Version: 1.0
 * Author: Hamza
 */

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}

function qp_activate() {
    // Function to create pages
    qp_create_WeightLossAdvocates_pages();
    // Function to create pages
    qp_create_WeightLossAdvocates_pages();
    // Function to create database table
    qp_create_orders_table();
    // Function to create patient table
    qp_create_patient_table();
    // Sync products with WooCommerce
    if (function_exists('wc_get_product_id_by_sku')) {
        qp_sync_woocommerce_products();
    }

    // Retroactively add meta to existing pages
    $all_pages = get_posts([
        'post_type' => 'page',
        'post_status' => 'publish',
        'posts_per_page' => -1,
    ]);

    foreach ($all_pages as $page) {
        if (has_shortcode($page->post_content, 'WeightLossAdvocates_page')) {
            if (!get_post_meta($page->ID, '_qp_page', true)) {
                add_post_meta($page->ID, '_qp_page', true, true);
            }
        }
    }
}
register_activation_hook(__FILE__, 'qp_activate');

function qp_sync_woocommerce_products() {
    $products_json_path = plugin_dir_path(__FILE__) . 'data/products.json';
    if (!file_exists($products_json_path)) {
        return;
    }

    $products_data = json_decode(file_get_contents($products_json_path), true);
    if (empty($products_data)) {
        return;
    }

    foreach ($products_data as $product_group) {
        foreach ($product_group['dosage'] as $dosage_details) {
            $sku = $dosage_details['package_code'];
            $product_id = wc_get_product_id_by_sku($sku);

            if (!$product_id) {
                $product = new WC_Product_Simple();
                $product->set_name($dosage_details['name']);
                $product->set_sku($sku);
                $product->set_regular_price($dosage_details['price']);
                $product->set_price($dosage_details['price']);
                $product->set_status('publish');
                $product->set_catalog_visibility('visible');
                $product->save();
            }
        }
    }
}

function qp_create_patient_table() {
    global $wpdb;
    $table_name = $wpdb->prefix . 'WeightLossAdvocates_patients';
    $charset_collate = $wpdb->get_charset_collate();

    $sql = "CREATE TABLE $table_name (
        id mediumint(9) NOT NULL AUTO_INCREMENT,
        email varchar(100) NOT NULL,
        password varchar(255) NOT NULL,
        created_at datetime DEFAULT '0000-00-00 00:00:00' NOT NULL,
        PRIMARY KEY  (id)
    ) $charset_collate;";

    require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
    dbDelta($sql);
}

function qp_create_orders_table() {
    global $wpdb;
    $table_name = $wpdb->prefix . 'WeightLossAdvocates_orders';
    $charset_collate = $wpdb->get_charset_collate();

    $sql = "CREATE TABLE $table_name (
        id mediumint(9) NOT NULL AUTO_INCREMENT,
        patient_id mediumint(9) NOT NULL,
        created_at datetime DEFAULT '0000-00-00 00:00:00' NOT NULL,
        first_name tinytext NOT NULL,
        last_name tinytext NOT NULL,
        phone tinytext NOT NULL,
        email varchar(100) NOT NULL,
        shipping_address1 varchar(255) NOT NULL,
        shipping_city varchar(100) NOT NULL,
        shipping_state varchar(100) NOT NULL,
        shipping_zipcode varchar(20) NOT NULL,
        medication varchar(255) NOT NULL,
        dosage varchar(100) NOT NULL,
        payment_plan varchar(100) NOT NULL,
        protocol_length varchar(100) NOT NULL,
        price decimal(10, 2) NOT NULL,
        status varchar(50) DEFAULT '' NOT NULL,
        bmi decimal(5,2) DEFAULT 0.00 NOT NULL,
        full_data text NOT NULL,
        PRIMARY KEY  (id)
    ) $charset_collate;";

    require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
    dbDelta($sql);
}

function qp_create_WeightLossAdvocates_pages() {
    $template_dir = plugin_dir_path(__FILE__) . 'templates/';
    $files = glob($template_dir . '*.php');

    foreach ($files as $file) {
        $page_slug = basename($file, '.php');
        $page_title = ucfirst(str_replace('-', ' ', $page_slug));

        // Skip creating pages for templates that are not part of the main flow
        if (in_array($page_slug, ['WeightLossAdvocates-15', 'WeightLossAdvocates-page-template'])) {
            continue;
        }

        // Check if page already exists
        if (get_page_by_path($page_slug) === null) {
            $page_content = '[WeightLossAdvocates_page template="' . basename($file) . '"]';

            $page_data = array(
                'post_title'    => $page_title,
                'post_content'  => $page_content,
                'post_status'   => 'publish',
                'post_author'   => 1,
                'post_type'     => 'page',
                'post_name'     => $page_slug,
            );

            $page_id = wp_insert_post($page_data);
            if ($page_id) {
                add_post_meta($page_id, '_qp_page', true, true);
            }
        }
    }
}

function qp_render_WeightLossAdvocates_page($atts) {
    // This shortcode now only acts as a marker for the template_redirect hook.
    // The actual rendering is handled by qp_template_redirect().
    return '';
}
add_shortcode('WeightLossAdvocates_page', 'qp_render_WeightLossAdvocates_page');

function qp_template_redirect() {
    if (is_singular('page') && has_shortcode(get_post()->post_content, 'WeightLossAdvocates_page')) {
        $post = get_post();
        $content = $post->post_content;

        // Extract the template file from the shortcode
        $pattern = get_shortcode_regex(['WeightLossAdvocates_page']);
        if (preg_match('/' . $pattern . '/s', $content, $matches) && isset($matches[3])) {
            $shortcode_attrs = shortcode_parse_atts($matches[3]);
            if (isset($shortcode_attrs['template'])) {
                // Ensure we handle the new .php extension
                $template_file = str_replace('.html', '.php', sanitize_file_name($shortcode_attrs['template']));
                $template_path = plugin_dir_path(__FILE__) . 'templates/' . $template_file;

                // Get page slug from the template file name
                $page_slug = basename($template_file, '.php');

                if (file_exists($template_path)) {
                    // Make session data available to the template
                    if (isset($_SESSION['WeightLossAdvocates_data'])) {
                        extract($_SESSION['WeightLossAdvocates_data']);
                    }

                    ob_start();
                    include $template_path;
                    $output = ob_get_clean();

                    // Replace asset paths
                    $output = str_replace('../assets', plugin_dir_url(__FILE__) . 'assets', $output);

                    // Replace page links to use WordPress permalinks
                    preg_match_all('/href="([^"]*?\.php|[^"]*?\.html)"/', $output, $link_matches);
                    if (!empty($link_matches[1])) {
                        foreach (array_unique($link_matches[1]) as $match) {
                            $link_page_slug = basename($match, '.php');
                            $link_page_slug = basename($link_page_slug, '.html');
                            $page = get_page_by_path($link_page_slug);
                            if ($page) {
                                $permalink = get_permalink($page->ID);
                                // Use a more specific replacement to avoid breaking other URLs
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

function get_product_prices() {
    $json_path = plugin_dir_path(__FILE__) . 'data/products.json';
    if (file_exists($json_path)) {
        $json_data = file_get_contents($json_path);
        return json_decode($json_data, true);
    }
    return [];
}

function calculate_price($product_id, $protocol_length, $payment_plan, $dosage) {
    $products = get_product_prices();
    $protocol_discounts = [
        'month-to-month' => -50,
        '90-day' => 0,
        '180-day' => 25,
        '360-day' => 50,
    ];
    $protocol_months = [
        'month-to-month' => 1,
        '90-day' => 3,
        '180-day' => 6,
        '360-day' => 12,
    ];

    if (!isset($products[$product_id])) return 0;

    $product = $products[$product_id];
    $dosage_data = $product['dosage'][$dosage] ?? $product['dosage']['default'];

    $price = $dosage_data['price'];
    $coupon_discount = $dosage_data['coupon_discount'];
    $coupon_price = $dosage_data['coupon_price'];
    $followup_price = $dosage_data['followup_price'];
    $coupon_type = ($coupon_discount > 0) ? (($coupon_price == $followup_price) ? 'lifetime' : 'one-time') : null;

    $protocol_discount = $protocol_discounts[$protocol_length] ?? 0;
    $months = $protocol_months[$protocol_length] ?? 1;

    if ($payment_plan == 'upfront' && $protocol_length != 'month-to-month') {
        $upfront_discount = 0.1;
        $price_today = (($price - $protocol_discount - ($coupon_type == 'lifetime' ? $coupon_discount : 0)) * $months) * (1 - $upfront_discount) - ($coupon_type == 'one-time' ? $coupon_discount : 0);
    } else {
        $price_today = $coupon_price - $protocol_discount;
    }

    return $price_today;
}

function qp_handle_form_submission() {
    if (!isset($_POST['page_slug'])) {
        return;
    }

    $page_slug = sanitize_text_field($_POST['page_slug']);

    if ($page_slug === 'select') {
        $product_id = sanitize_text_field($_POST['product'] ?? '1');
        $protocol_length = sanitize_text_field($_POST['protocol_length'] ?? '90-day');
        $payment_plan = sanitize_text_field($_POST['payment_plan'] ?? 'monthly');
        $dosage = sanitize_text_field($_POST['dosage'] ?? 'default');

        $price = calculate_price($product_id, $protocol_length, $payment_plan, $dosage);
        $_SESSION['WeightLossAdvocates_data']['price'] = $price;
    }

    if ($page_slug === 'questionnaire-14' && isset($_POST['intake_goal_weight'])) {
        $_SESSION['WeightLossAdvocates_data']['intake_goal_weight'] = sanitize_text_field($_POST['intake_goal_weight']);
    }

    // Calculate and store BMI when height and weight are submitted from questionnaire-6
    if ($page_slug === 'questionnaire-6' && isset($_POST['intake_height_ft']) && isset($_POST['intake_height_in']) && isset($_POST['intake_weight'])) {
        $height_in = ((int)$_POST['intake_height_ft'] * 12) + (int)$_POST['intake_height_in'];
        $weight_lbs = (int)$_POST['intake_weight'];
        if ($height_in > 0) {
            $bmi = ($weight_lbs / ($height_in * $height_in)) * 703;
            $_SESSION['WeightLossAdvocates_data']['intake_bmi'] = round($bmi, 2);
        }
    }

    // Handle patient creation from shipping page
    if ($page_slug === 'shipping' && isset($_POST['password']) && isset($_SESSION['WeightLossAdvocates_data']['shipping_email'])) {
        global $wpdb;
        $patient_table_name = $wpdb->prefix . 'WeightLossAdvocates_patients';
        $email = sanitize_email($_SESSION['WeightLossAdvocates_data']['shipping_email']);
        $password = wp_hash_password(sanitize_text_field($_POST['password']));

        // Check if user already exists
        $existing_user = $wpdb->get_row($wpdb->prepare("SELECT id FROM $patient_table_name WHERE email = %s", $email));

        if (!$existing_user) {
            $wpdb->insert(
                $patient_table_name,
                array(
                    'email' => $email,
                    'password' => $password,
                    'created_at' => current_time('mysql'),
                )
            );
        }
    }

    if (!isset($_SESSION['WeightLossAdvocates_data'])) {
        $_SESSION['WeightLossAdvocates_data'] = array();
    }

    // Sanitize all POST data, including arrays
    foreach ($_POST as $key => $value) {
        if ($key !== 'page_slug' && $key !== 'action') {
            if (is_array($value)) {
                $_SESSION['WeightLossAdvocates_data'][$key] = array_map('sanitize_text_field', $value);
            } else {
                $_SESSION['WeightLossAdvocates_data'][$key] = sanitize_text_field($value);
            }
        }
    }

    $next_page_slug = qp_get_next_page($page_slug, $_SESSION['WeightLossAdvocates_data']);
    $redirect_url = get_permalink(get_page_by_path($next_page_slug));

    if ($redirect_url) {
        wp_redirect($redirect_url);
        exit;
    } else {
        // Fallback for safety, maybe redirect home
        wp_redirect(home_url('/'));
        exit;
    }
}
add_action('admin_post_nopriv_WeightLossAdvocates_submit', 'qp_handle_form_submission');
add_action('admin_post_WeightLossAdvocates_submit', 'qp_handle_form_submission');

function qp_get_next_page($current_slug, $data) {
    // Disqualification logic
    if (isset($data['intake_health']) && (!in_array('none', $data['intake_health']) || count($data['intake_health']) > 1)) {
        return 'not-qualified';
    }
    if (isset($data['intake_disqualify']) && $data['intake_disqualify'] !== 'None') {
        return 'not-qualified';
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

    // Page progression logic (specific cases first)
    switch ($current_slug) {
        case 'questionnaire-5b':
            if (isset($data['intake_current_wl_prescription']) && $data['intake_current_wl_prescription'] === 'yes') {
                return 'questionnaire-5c';
            } else {
                return 'questionnaire-6';
            }
        case 'questionnaire-5c':
            return 'questionnaire-5d';
        case 'questionnaire-5d':
            return 'questionnaire-5e';
        case 'questionnaire-5e':
            return 'questionnaire-6';
        case 'calculating':
            return 'results';
        case 'results':
            return 'register';
        case 'register':
            return 'select';
        case 'select':
            return 'shipping';
        case 'shipping':
            return 'checkout';
        default:
            break;
    }

    // Generic numeric progression
    if (strpos($current_slug, 'questionnaire-') === 0) {
        $page_part = str_replace('questionnaire-', '', $current_slug);
        if (is_numeric($page_part)) {
            $page_number = (int) $page_part;

            if ($page_number == 5) {
                return 'questionnaire-5b';
            }

            if ($page_number > 0) {
                if ($page_number == 14) {
                    return 'calculating';
                }
                return 'questionnaire-' . ($page_number + 1);
            }
        }
    }

    // Fallback
    return 'questionnaire-1';
}

function qp_handle_checkout_submission() {
    error_log('=== STEP 1: Handler called ===');

    if (!isset($_SESSION['WeightLossAdvocates_data']) || !function_exists('wc_create_order')) {
        error_log('=== STEP 1 FAILED: Session or WC missing ===');
        wp_redirect(home_url());
        exit;
    }

    $order = null;

    try {
        error_log('=== STEP 2: Inside try block ===');

        // Server-side validation for CC expiration
        if (isset($_POST['billing_cardexp_month']) && isset($_POST['billing_cardexp_year'])) {
            $exp_month = sanitize_text_field($_POST['billing_cardexp_month']);
            $exp_year = sanitize_text_field($_POST['billing_cardexp_year']);
            $_POST['ccexp'] = $exp_month . substr($exp_year, -2);
        }

        $data = $_SESSION['WeightLossAdvocates_data'];
        $product_id = sanitize_text_field($data['product'] ?? '1');
        $dosage = sanitize_text_field($data['dosage'] ?? 'default');

        error_log('=== STEP 3: Getting product data ===');
        $products = get_product_prices();
        $sku = $products[$product_id]['dosage'][$dosage]['package_code'] ?? null;

        if (!$sku) {
            error_log('=== STEP 3 FAILED: SKU not found ===');
            throw new Exception('Product configuration not found. Please try again.');
        }

        error_log('=== STEP 4: Getting WC product ===');
        $product_id_wc = wc_get_product_id_by_sku($sku);
        if (!$product_id_wc) {
            error_log('=== STEP 4 FAILED: WC product not found ===');
            throw new Exception('Product not found in the store. Please contact support.');
        }

        $product = wc_get_product($product_id_wc);
        $price = $data['price'] ?? $product->get_price();

        error_log('=== STEP 5: Creating order ===');
        $order = wc_create_order();
        if (!$order || is_wp_error($order)) {
            error_log('=== STEP 5 FAILED: Order creation failed ===');
            throw new Exception('We were unable to create your order. Please try again or contact us for assistance.');
        }

        error_log('=== STEP 6: Adding product to order ===');
        $order->add_product($product, 1);

        error_log('=== STEP 7: Setting address ===');
        $address = array(
            'first_name' => sanitize_text_field($data['shipping_firstname']),
            'last_name'  => sanitize_text_field($data['shipping_lastname']),
            'email'      => sanitize_email($data['shipping_email']),
            'phone'      => sanitize_text_field($data['shipping_phone']),
            'address_1'  => sanitize_text_field($data['shipping_address1']),
            'city'       => sanitize_text_field($data['shipping_city']),
            'state'      => sanitize_text_field($data['shipping_state']),
            'postcode'   => sanitize_text_field($data['shipping_zipcode']),
            'country'    => 'US'
        );
        $order->set_address($address, 'billing');
        $order->set_address($address, 'shipping');
        $order->set_total($price);
        $order->save();

        error_log('=== STEP 8: Order created - ID: ' . $order->get_id() . ' ===');

        error_log('=== STEP 9: Getting payment gateways ===');
        $payment_gateways = WC()->payment_gateways->get_available_payment_gateways();
        error_log('Available gateways: ' . implode(', ', array_keys($payment_gateways)));

        $nmi_gateway = $payment_gateways['nmi'] ?? null;

        if (!$nmi_gateway) {
            error_log('=== STEP 9 FAILED: NMI gateway not available ===');
            // IMPORTANT: Still redirect even if payment fails
            $order->update_status('pending', 'Payment gateway not available.');
            error_log('=== Redirecting to order received page ===');
            unset($_SESSION['WeightLossAdvocates_data']);
            wp_redirect($order->get_checkout_order_received_url());
            exit;
        }

        error_log('=== STEP 10: Checking test mode ===');
        if ($nmi_gateway->get_option('test_mode') === 'yes') {
            error_log('=== Test mode enabled - auto completing ===');
            $order->payment_complete();
            $order->update_status('processing', 'Test mode payment completed.');
            unset($_SESSION['WeightLossAdvocates_data']);
            error_log('=== Redirecting to: ' . $order->get_checkout_order_received_url() . ' ===');
            wp_redirect($order->get_checkout_order_received_url());
            exit;
        }

        error_log('=== STEP 11: Processing payment ===');
        $order->set_payment_method($nmi_gateway);
        $order->save();
        $result = $nmi_gateway->process_payment($order->get_id());
        error_log('Payment result: ' . print_r($result, true));

        if (is_array($result) && !empty($result['result']) && $result['result'] === 'success') {
            error_log('=== STEP 12: Payment successful ===');
            $order->payment_complete();
            unset($_SESSION['WeightLossAdvocates_data']);
            error_log('=== Redirecting to: ' . $order->get_checkout_order_received_url() . ' ===');
            wp_redirect($order->get_checkout_order_received_url());
            exit;
        } else {
            error_log('=== STEP 12 FAILED: Payment failed ===');
            $error_message = 'Payment failed. Please check your payment details and try again.';
            if (is_array($result) && !empty($result['messages'])) {
                $error_message = $result['messages'];
            }
            throw new Exception(strip_tags($error_message));
        }

    } catch (Exception $e) {
        error_log('=== EXCEPTION CAUGHT: ' . $e->getMessage() . ' ===');

        if ($order && is_a($order, 'WC_Order') && $order->get_id()) {
            error_log('=== Updating order ' . $order->get_id() . ' to failed ===');
            $order->update_status('failed', sprintf('Checkout error: %s', $e->getMessage()));

            // CRITICAL: Redirect to order received page even on error
            error_log('=== Redirecting to order page after error ===');
            unset($_SESSION['WeightLossAdvocates_data']);
            wp_redirect($order->get_checkout_order_received_url());
            exit;
        }

        error_log('=== No order found, redirecting to checkout ===');
        // Redirect back to checkout page
        $checkout_page = get_page_by_path('checkout');
        if ($checkout_page) {
            wp_redirect(get_permalink($checkout_page->ID));
        } else {
            wp_redirect(home_url('/checkout'));
        }
        exit;
    }

    // FALLBACK: This should NEVER be reached
    error_log('=== CRITICAL: Reached end of function without redirect! ===');
    if ($order && $order->get_id()) {
        wp_redirect($order->get_checkout_order_received_url());
    } else {
        wp_redirect(home_url());
    }
    exit;
}
add_action('admin_post_nopriv_checkout_submit', 'qp_handle_checkout_submission');
add_action('admin_post_checkout_submit', 'qp_handle_checkout_submission');

function qp_admin_menu() {
    add_menu_page(
        'WeightLossAdvocates Orders',
        'WeightLossAdvocates',
        'manage_options',
        'WeightLossAdvocates-orders',
        'qp_orders_page_html',
        'dashicons-clipboard',
        20
    );
}
add_action('admin_menu', 'qp_admin_menu');

function qp_orders_page_html() {
    global $wpdb;
    $table_name = $wpdb->prefix . 'WeightLossAdvocates_orders';

    $orders = $wpdb->get_results("SELECT * FROM $table_name ORDER BY created_at DESC");
    ?>
    <div class="wrap">
        <h1>WeightLossAdvocates Orders</h1>
        <table class="wp-list-table widefat fixed striped">
            <thead>
                <tr>
                    <th scope="col" class="manage-column">Order ID</th>
                    <th scope="col" class="manage-column">Date</th>
                    <th scope="col" class="manage-column">Name</th>
                    <th scope="col" class="manage-column">Contact</th>
                    <th scope="col" class="manage-column">Shipping Address</th>
                    <th scope="col" class="manage-column">Medication Details</th>
                    <th scope="col" class="manage-column">BMI</th>
                    <th scope="col" class="manage-column">Price</th>
                    <th scope="col" class="manage-column">Status</th>
                    <th scope="col" class="manage-column">Details</th>
                </tr>
            </thead>
            <tbody>
                <?php if (empty($orders)) : ?>
                    <tr>
                        <td colspan="10">No orders found.</td>
                    </tr>
                <?php else : ?>
                    <?php foreach ($orders as $order) : ?>
                        <tr>
                            <td><?php echo esc_html($order->id); ?></td>
                            <td><?php echo esc_html($order->created_at); ?></td>
                            <td><?php echo esc_html($order->first_name . ' ' . $order->last_name); ?></td>
                            <td>
                                <a href="mailto:<?php echo esc_attr($order->email); ?>"><?php echo esc_html($order->email); ?></a><br>
                                <?php echo esc_html($order->phone); ?>
                            </td>
                            <td>
                                <?php echo esc_html($order->shipping_address1); ?><br>
                                <?php echo esc_html($order->shipping_city . ', ' . $order->shipping_state . ' ' . $order->shipping_zipcode); ?>
                            </td>
                            <td>
                                <strong>Product:</strong> <?php echo esc_html($order->medication); ?><br>
                                <strong>Dosage:</strong> <?php echo esc_html($order->dosage); ?><br>
                                <strong>Plan:</strong> <?php echo esc_html($order->payment_plan); ?><br>
                                <strong>Length:</strong> <?php echo esc_html($order->protocol_length); ?>
                            </td>
                            <td><?php echo esc_html($order->bmi); ?></td>
                            <td>$<?php echo esc_html($order->price); ?></td>
                            <td><?php echo esc_html($order->status); ?></td>
                            <td><button class="button view-details" data-order-id="<?php echo esc_attr($order->id); ?>">View Details</button></td>
                        </tr>
                        <tr class="details-row" id="details-<?php echo esc_attr($order->id); ?>" style="display: none;">
                            <td colspan="10">
                                <pre><?php print_r(unserialize($order->full_data)); ?></pre>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
    <script>
        document.querySelectorAll('.view-details').forEach(button => {
            button.addEventListener('click', function() {
                const orderId = this.dataset.orderId;
                const detailsRow = document.getElementById('details-' + orderId);
                if (detailsRow) {
                    detailsRow.style.display = detailsRow.style.display === 'none' ? 'table-row' : 'none';
                }
            });
        });
    </script>
    <?php
}

function qp_exclude_pages_from_nav($items, $args) {
    foreach ($items as $key => $item) {
        if ($item->type == 'post_type' && get_post_meta($item->object_id, '_qp_page', true)) {
            unset($items[$key]);
        }
    }
    return $items;
}
add_filter('wp_nav_menu_objects', 'qp_exclude_pages_from_nav', 10, 2);

function qp_exclude_from_get_pages($pages) {
    // This function is hooked into 'get_pages' to filter out pages
    // created by this plugin from any queries that use get_pages().
    // This is a broad approach to prevent them from appearing in theme menus.
    foreach ($pages as $key => $page) {
        // Check if the page has our custom meta field.
        if (get_post_meta($page->ID, '_qp_page', true)) {
            // If it does, remove it from the array of pages.
            unset($pages[$key]);
        }
    }
    return $pages;
}
add_filter('get_pages', 'qp_exclude_from_get_pages');