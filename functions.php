<?php 

/**
 * Essential theme supports
 * */
function harry_theme_setup(){
    /** automatic feed link*/
    add_theme_support( 'automatic-feed-links' );
    
    /** tag-title **/
    add_theme_support( 'title-tag' );

    /** post formats */
    $post_formats = array('aside','image','gallery','video','audio','link','quote','status');
    add_theme_support( 'post-formats', $post_formats);

    /** post thumbnail **/
    add_theme_support( 'post-thumbnails' );

    /** HTML5 support **/
    add_theme_support( 'html5', array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption' ) );

    /** refresh widgest **/
    add_theme_support( 'customize-selective-refresh-widgets' ); 

    /** register nav menu **/
    register_nav_menus( array(
        'primary_menu' => __( 'Primary Menu', 'harry' ),
        'sidebar_menu'  => __( 'Sidebar Menu', 'harry' ),
    ) );

    remove_theme_support( 'widgets-block-editor' );
}
add_action('after_setup_theme','harry_theme_setup');


// footer widgets
function harry_footer_widgets() {
	register_sidebar( array(
		'name'          => __( 'Footer 1', 'harry' ),
		'id'            => 'footer-1',
        'description'   => __( 'footer conent start here' ),
		'before_widget' => '<div id="%1$s" class="footer__widget mb-50 footer-col-1 %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="footer__widget-title">',
		'after_title'   => '</h3>',
	) );

    register_sidebar( array(
		'name'          => __( 'Footer 2', 'harry' ),
		'id'            => 'footer-2',
        'description'   => __( 'footer conent start here' ),
		'before_widget' => '<div id="%1$s" class="footer__widget mb-50 footer-col-1 %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="footer__widget-title">',
		'after_title'   => '</h3>',
	) );
    register_sidebar( array(
		'name'          => __( 'Footer 3', 'harry' ),
		'id'            => 'footer-3',
        'description'   => __( 'footer conent start here' ),
		'before_widget' => '<div id="%1$s" class="footer__widget mb-50 footer-col-1 %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="footer__widget-title">',
		'after_title'   => '</h3>',
	) );
    register_sidebar( array(
		'name'          => __( 'Footer 4', 'harry' ),
		'id'            => 'footer-4',
        'description'   => __( 'footer conent start here' ),
		'before_widget' => '<div id="%1$s" class="footer__widget mb-50 footer-col-1 %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="footer__widget-title">',
		'after_title'   => '</h3>',
	) );
}
add_action('widgets_init','harry_footer_widgets');


include_once('inc/common/scripts.php');

if(class_exists('kirki')){
    include_once('inc/kirki-customer.php');    
}
include_once('inc/template-function.php');
include_once('inc/template-helper.php');
include_once('inc/nav-walker.php');