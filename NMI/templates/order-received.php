<?php
// On the order-received page, WooCommerce makes the order object available globally.
// Using this is more reliable than trying to parse the order ID from the URL.
global $order;

// Default values
$order_number = '';
$order_date = '';
$order_total = '';
$payment_method = '';

if ( $order ) {
    $order_number = $order->get_order_number();
    // Format date nicely using WooCommerce function
    $order_date = wc_format_datetime( $order->get_date_created() );
    $order_total = $order->get_formatted_order_total();
    $payment_method = $order->get_payment_method_title();
}

// Construct asset URLs relative to the plugin directory
$plugin_base_url = plugins_url( '/', dirname(__FILE__) ); // Gets the /NMI/ URL
$assets_url = $plugin_base_url . 'assets';

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Order Received</title>
    <link href="<?php echo esc_url( $assets_url . '/css_from_site/bootstrap.min.css' ); ?>" rel="stylesheet">
    <link href="<?php echo esc_url( $assets_url . '/css_from_site/qualify-v2.css' ); ?>" rel="stylesheet">
</head>
<body style="background-color:#f8f8f7;">
    <nav class="navbar navbar-expand-lg bannerbar">
        <div class="container justify-content-center">
            <img src="<?php echo esc_url( $assets_url . '/img_from_site/logo.png' ); ?>" width='60px' alt="Weight Loss Advocates" class="img-fluid">
        </div>
    </nav>
    <div class="container-fluid">
        <section class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2 col-md-12">
                    <div class="spacer">&nbsp;</div>
                    <div class="spacer">&nbsp;</div>
                    <div class="card">
                        <div class="card-body">
                        <?php if ( $order ) : ?>
                            <h2 class="card-title text-center">Thank you. Your order has been received.</h2>
                            <hr>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item"><strong>Order number:</strong> <?php echo esc_html( $order_number ); ?></li>
                                <li class="list-group-item"><strong>Date:</strong> <?php echo esc_html( $order_date ); ?></li>
                                <li class="list-group-item"><strong>Total:</strong> <?php echo wp_kses_post( $order_total ); ?></li>
                                <li class="list-group-item"><strong>Payment method:</strong> <?php echo esc_html( $payment_method ); ?></li>
                            </ul>
                            <div class="spacer">&nbsp;</div>
                            <p class="text-center">You will receive an email confirmation shortly.</p>
                        <?php else : ?>
                            <h2 class="card-title text-center">Invalid Order</h2>
                            <p class="text-center">We could not retrieve your order details. Please contact us for assistance.</p>
                        <?php endif; ?>
                        </div>
                    </div>
                    <div class="spacer">&nbsp;</div>
                    <div class="spacer">&nbsp;</div>
                </div>
            </div>
        </section>
    </div>
</body>
</html>
