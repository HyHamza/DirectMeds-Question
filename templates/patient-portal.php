<?php
/**
 * Template Name: Patient Portal
 */

// Ensure the user is logged in
if (!isset($_SESSION['patient_id'])) {
    // Redirect to login page if not logged in
    $login_page = get_page_by_path('patient-login');
    if ($login_page) {
        wp_redirect(get_permalink($login_page->ID));
        exit;
    }
    // Fallback redirect
    wp_redirect(home_url());
    exit;
}

global $wpdb;
$patient_id = $_SESSION['patient_id'];
$patient_email = $_SESSION['patient_email']; // Get email from session

$orders_table = $wpdb->prefix . 'WeightLossAdvocates_orders';
$orders = $wpdb->get_results($wpdb->prepare("SELECT * FROM $orders_table WHERE patient_id = %d ORDER BY created_at DESC", $patient_id));

// For simplicity, we'll get BMI and questionnaire data from the most recent order.
$patient_bmi = 'N/A';
$questionnaire_data = [];
if (!empty($orders)) {
    $latest_order = $orders[0];
    $patient_bmi = $latest_order->bmi;
    // Unserialize the full data to display questionnaire answers
    $full_data = unserialize($latest_order->full_data);
    // Filter out sensitive/unnecessary data before displaying
    unset($full_data['ccnumber'], $full_data['cvv'], $full_data['ccexp']);
    $questionnaire_data = $full_data;
}

?>
<div class="patient-portal">
    <h2>Welcome to Your Patient Portal</h2>
    <div class="patient-info">
        <h3>Your Details</h3>
        <p><strong>Email:</strong> <?php echo esc_html($patient_email); ?></p>
        <p><strong>BMI:</strong> <?php echo esc_html($patient_bmi); ?></p>
    </div>

    <?php if (!empty($orders)) : ?>
        <div class="order-history">
            <h3>Your Order History</h3>
            <table border="1" cellpadding="5" cellspacing="0" style="width: 100%; border-collapse: collapse;">
                <thead>
                    <tr>
                        <th>Order ID</th>
                        <th>Date</th>
                        <th>Medication</th>
                        <th>Dosage</th>
                        <th>Plan</th>
                        <th>Status</th>
                        <th>Price</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($orders as $order) : ?>
                        <tr>
                            <td><?php echo esc_html($order->id); ?></td>
                            <td><?php echo esc_html($order->created_at); ?></td>
                            <td><?php echo esc_html($order->medication); ?></td>
                            <td><?php echo esc_html($order->dosage); ?></td>
                            <td><?php echo esc_html($order->payment_plan); ?></td>
                            <td><?php echo esc_html($order->status); ?></td>
                            <td>$<?php echo esc_html($order->price); ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>

        <div class="questionnaire-answers">
            <h3>Your Questionnaire Answers (from last order)</h3>
            <pre style="background: #f1f1f1; padding: 15px; border: 1px solid #ccc;"><?php echo esc_html(print_r($questionnaire_data, true)); ?></pre>
        </div>
    <?php else : ?>
        <p>You have no orders yet.</p>
    <?php endif; ?>
</div>
