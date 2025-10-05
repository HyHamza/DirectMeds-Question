<?php
// This is a custom template for the questionnaire pages.
// It's designed to be a blank slate, avoiding the theme's header, footer, and styles.
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php wp_title('|', true, 'right'); ?></title>

    <?php
        // Manually include the styles.
        $plugin_url = plugin_dir_url( __FILE__ ) . '../';
    ?>
    <link rel="stylesheet" id="bootstrap-min-css" href="<?php echo $plugin_url; ?>assets/css_from_site/bootstrap.min.css" type="text/css" media="all">
    <link rel="stylesheet" id="bootstrap-icons-min-css" href="<?php echo $plugin_url; ?>assets/css_from_site/bootstrap-icons.min.css" type="text/css" media="all">
    <link rel="stylesheet" id="qualify-css" href="<?php echo $plugin_url; ?>assets/css_from_site/qualify.css" type="text/css" media="all">
    <link rel="stylesheet" id="utils-min-css" href="<?php echo $plugin_url; ?>assets/css_from_site/utils.min.css" type="text/css" media="all">

</head>
<body>
    <?php
    // The Loop
    while ( have_posts() ) :
        the_post();
        the_content();
    endwhile;
    ?>

    <?php
        // Manually include the scripts.
    ?>
    <script src="<?php echo $plugin_url; ?>assets/js_from_site/jquery-1.12.1.min.js"></script>
    <script src="<?php echo $plugin_url; ?>assets/js_from_site/bootstrap.bundle.min.js"></script>
    <script src="<?php echo $plugin_url; ?>assets/js_from_site/utils.min.js"></script>
    <script src="<?php echo $plugin_url; ?>assets/js_from_site/29752987.js"></script>
    <script src="<?php echo $plugin_url; ?>assets/js_from_site/everflow.js"></script>
    <script src="<?php echo $plugin_url; ?>assets/js_from_site/gtm.js"></script>
    <script src="<?php echo $plugin_url; ?>assets/js_from_site/matomo.js"></script>
    <script src="<?php echo $plugin_url; ?>assets/js_from_site/smartlook.js"></script>
    <script src="<?php echo $plugin_url; ?>assets/js_from_site/tp.widget.bootstrap.min.js"></script>
    <script>
        var questionnaire_ajax = {
            "ajax_url": "<?php echo admin_url('admin-ajax.php'); ?>"
        };
    </script>
    <script src="<?php echo $plugin_url; ?>assets/js/main.js"></script>
</body>
</html>