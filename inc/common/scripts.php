<?php

/**
 * Proper way to enqueue scripts and styles.
 */
function harry_theme_name_scripts() {

    // style css start here
    wp_enqueue_style('harry-fonts',harry_fonts_url() , array(), '1.0.0', 'all' );   
    wp_enqueue_style('animate', get_template_directory_uri() . '/assets/css/animate.css', array(), '1.0.0', 'all' );
    wp_enqueue_style('backtotop', get_template_directory_uri() .'/assets/css/backtotop.css', array(), '1.0.0', 'all' );
    wp_enqueue_style('bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.css', array(), '1.0.0', 'all' );
    wp_enqueue_style('elegant', get_template_directory_uri() . '/assets/css/elegant-icon.css', array(), '1.0.0', 'all' );
    wp_enqueue_style('awesome', get_template_directory_uri() .'/assets/css/font-awesome-pro.css', array(), '1.0.0', 'all' );
    wp_enqueue_style('reveal', get_template_directory_uri() . '/assets/css/hover-reveal.css', array(), '1.0.0', 'all' );
    wp_enqueue_style('magnific', get_template_directory_uri() .'/assets/css/magnific-popup.css', array(), '1.0.0', 'all' );
    wp_enqueue_style('main-without-rtl', get_template_directory_uri() . '/assets/css/main-without-rtl.css', array(), '1.0.0', 'all' );
    wp_enqueue_style('meanmenu', get_template_directory_uri() . '/assets/css/meanmenu.css', array(), '1.0.0', 'all' );
    wp_enqueue_style('slick', get_template_directory_uri() .'/assets/css/slick.css', array(), '1.0.0', 'all' );
    wp_enqueue_style('nouislider', get_template_directory_uri() .'/assets/css/nouislider.css', array(), '1.0.0', 'all' );
    wp_enqueue_style('spacing', get_template_directory_uri() .'/assets/css/spacing.css', array(), '1.0.0', 'all' );
    wp_enqueue_style('swiper-bundle', get_template_directory_uri() .'/assets/css/swiper-bundle.css', array(), '1.0.0', 'all' );
    wp_enqueue_style('harry-main', get_template_directory_uri() .'/assets/css/main.css', array(), '1.0.0', 'all' );
	wp_enqueue_style( 'style-name', get_stylesheet_uri() );

    // js start here
	wp_enqueue_script( 'waypoints', get_template_directory_uri() .'/assets/js/waypoints.js', array('jquery'), '1.0.0', true );
	wp_enqueue_script( 'bootstrap', get_template_directory_uri() .'/assets/js/bootstrap-bundle.js', array('jquery'), '1.0.0', true );
	wp_enqueue_script( 'meanmenu', get_template_directory_uri() .'/assets/js/meanmenu.js', array('jquery'), '1.0.0', true );
	wp_enqueue_script( 'swiper', get_template_directory_uri() .'/assets/js/swiper-bundle.js', array('jquery'), '1.0.0', true );
	wp_enqueue_script( 'slick', get_template_directory_uri() .'/assets/js/slick.js', array('jquery'), '1.0.0', true );
	wp_enqueue_script( 'nouislider', get_template_directory_uri() .'/assets/js/nouislider.js', array('jquery'), '1.0.0', true );
	wp_enqueue_script( 'magnific', get_template_directory_uri() .'/assets/js/magnific-popup.js', array('jquery'), '1.0.0', true );
	wp_enqueue_script( 'parallax', get_template_directory_uri() .'/assets/js/parallax.js', array('jquery'), '1.0.0', true );
	wp_enqueue_script( 'backtotop', get_template_directory_uri() .'/assets/js/backtotop.js', array('jquery'), '1.0.0', true );
	wp_enqueue_script( 'nice', get_template_directory_uri() .'/assets/js/nice-select.js', array('jquery'), '1.0.0', true );
	wp_enqueue_script( 'purecounter', get_template_directory_uri() .'/assets/js/purecounter.js', array('jquery'), '1.0.0', true );
	wp_enqueue_script( 'wow', get_template_directory_uri() .'/assets/js/wow.js', array('jquery'), '1.0.0', true );
	wp_enqueue_script( 'isotope', get_template_directory_uri() .'/assets/js/isotope-pkgd.js', array('imagesloaded'), '1.0.0', true );
	wp_enqueue_script( 'harry-main', get_template_directory_uri() .'/assets/js/main.js', array('imagesloaded'), '1.0.0', true );
	

    if( is_singular() && comments_open() && ( get_option( 'thread_comments' ) == 1) ) {        
        wp_enqueue_script( 'comment-reply', '/wp-includes/js/comment-reply.min.js', array(),false, true );
    }
}
add_action( 'wp_enqueue_scripts', 'harry_theme_name_scripts' );


/*
Register Fonts
 */
function harry_fonts_url() {
    $font_url = '';

    /*
    Translators: If there are characters in your language that are not supported
    by chosen font(s), translate this to 'off'. Do not translate into your own language.
     */
    
    if ( 'off' !== _x( 'on', 'Google font: on or off', 'harry' ) ) {
        $font_url = 'https://fonts.googleapis.com/css2?'. urlencode('family=Jost:wght@400;500;600;700;800;900&family=Kumbh+Sans:wght@400;500;600;700;800&display=swap');
    }
    return $font_url;
}