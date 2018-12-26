<?php
define('DIR_URI', get_template_directory_uri());
define('DIR_PATH', get_template_directory());
define('TEMPLATES_PATH', __DIR__ . '/templates');

function register_styles_and_scripts() {
    // Styles
    wp_enqueue_style('bootstrap', get_template_directory_uri() .
        '/css/bootstrap.css');

    wp_enqueue_style('owl', get_template_directory_uri() .
        '/css/owl.carousel.min.css');

    wp_enqueue_style('animate', get_template_directory_uri() .
        '/css/animate.css');

    wp_enqueue_style('style', get_template_directory_uri() .
        '/css/style.css');

    // Scripts

    wp_enqueue_script('jQuery', get_template_directory_uri() .
        '/js/jquery-3.3.1.min.js', array(), null, true);

    wp_enqueue_script('bootstrap', get_template_directory_uri() .
        '/js/bootstrap.js', array('jquery'), null, true);

    wp_enqueue_script('scroll', get_template_directory_uri() .
        '/js/SmoothScroll.js', array('jquery'), null, true);

    wp_enqueue_script('owl', get_template_directory_uri() .
        '/js/owl.carousel.min.js', array('jquery'), null, true);

    wp_enqueue_script('wow', get_template_directory_uri() .
        '/js/wow.min.js', array('jquery'), null, true);

    wp_enqueue_script('scroll_me', get_template_directory_uri() .
        '/js/jquery.scrollme.js', array('jquery'), null, true);

    wp_enqueue_script('my_script', get_template_directory_uri() .
        '/js/script.js', array('jquery'), null, true);

    wp_enqueue_script('input', get_template_directory_uri() .
        '/js/stretchy.js', array('jquery'), null, true);

    wp_localize_script('my_script', 'siteData', [
        'templateUrl' => get_template_directory_uri()
    ]);
}
add_action( 'wp_enqueue_scripts', 'register_styles_and_scripts' );


//add logo
add_theme_support( 'custom-logo' );

//add post thumbnails
add_theme_support( 'post-thumbnails' );

// add menus
add_action('after_setup_theme', function(){
    register_nav_menus( array(
        'header_menu' => 'Header menu',
        'footer_menu' => 'Footer menu'
    ) );
});

//add svg format
add_filter('upload_mimes', 'svg_mime_type');
function svg_mime_type($mimes) {
    $mimes['svg'] = 'image/svg+xml';
    return $mimes;
}
//add option page for acf (in admin page)
if( function_exists('acf_add_options_page') ) {
    acf_add_options_page();
}








