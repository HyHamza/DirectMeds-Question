<?php
/**
 * Custom Thank You Page Template
 *
 * A simplified version of the order-received page.
 */

// Construct asset URLs relative to the plugin directory
$plugin_base_url = plugins_url( '/', dirname(__FILE__) ); // Gets the /NMI/ URL
$assets_url = $plugin_base_url . 'assets';

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Thank You</title>
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
                            <h2 class="card-title text-center">Thank you. Your order has been received.</h2>
                            <hr>
                            <p class="text-center">You will receive an email confirmation shortly.</p>
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
