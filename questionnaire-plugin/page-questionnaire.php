<?php
/**
 * The template for displaying questionnaire pages.
 */

// We don't want any of the theme's styling to interfere, so we'll build the page from scratch.
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php wp_title('|', true, 'right'); ?></title>
    <?php
    // We will manually enqueue our scripts and styles
    do_action('questionnaire_head');
    ?>
</head>
<body <?php body_class(); ?>>
    <?php
    // The content of the questionnaire page will be injected here
    while (have_posts()) :
        the_post();
        the_content();
    endwhile;

    // We will manually enqueue our footer scripts
    do_action('questionnaire_footer');
    ?>
</body>
</html>