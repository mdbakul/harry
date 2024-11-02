<?php

function harry_breadcrumb() {
    global $post;  
    $breadcrumb_class = '';
    $breadcrumb_show = 1;

    if ( is_front_page() && is_home() ) {
        $title = get_theme_mod('breadcrumb_blog_title', __('Blog','harry '));
        $breadcrumb_class = 'home_front_page';
    }
    elseif ( is_front_page() ) {
        $title = get_theme_mod('breadcrumb_blog_title', __('Blog','harry '));
        $breadcrumb_show = 0;
    }
    elseif ( is_home() ) {
        if ( get_option( 'page_for_posts' ) ) {
            $title = get_the_title( get_option( 'page_for_posts') );
        }
    }
    elseif ( is_single() && 'post' == get_post_type() ) {
      $title = get_the_title();
    } 
    elseif ( is_single() && 'product' == get_post_type() ) {
        $title = get_theme_mod( 'breadcrumb_product_details', __( 'Shop', 'harry ' ) );
    } 
    elseif ( is_single() && 'courses' == get_post_type() ) {
      $title = esc_html__( 'Course Details', 'harry ' );
    } 
    elseif ( is_search() ) {
        $title = esc_html__( 'Search Results for : ', 'harry ' ) . get_search_query();
    } 
    elseif ( is_404() ) {
        $title = esc_html__( 'Page not Found', 'harry ' );
    } 
    elseif ( is_archive() ) {
        $title = get_the_archive_title();
    } 
    else {
        $title = get_the_title();
    }

    $_id = get_the_ID();

    if ( is_single() && 'product' == get_post_type() ) { 
        $_id = $post->ID;
    } 
    elseif ( function_exists("is_shop") AND is_shop()  ) { 
        $_id = wc_get_page_id('shop');
    } 
    elseif ( is_home() && get_option( 'page_for_posts' ) ) {
        $_id = get_option( 'page_for_posts' );
    }

    $is_breadcrumb = function_exists('tpmeta_field')? tpmeta_field('harry _check_bredcrumb') : 'on';

    $con1 = $is_breadcrumb && ($is_breadcrumb== 'on') && $breadcrumb_show == 1;

    $con_main = is_404() ? is_404() : $con1;
    
      if (  $con_main ) {
        $bg_img_from_page = function_exists('tpmeta_image_field')? tpmeta_image_field('harry _breadcrumb_bg') : '';

        $hide_bg_img = function_exists('tpmeta_field')? tpmeta_field('harry _check_bredcrumb_img') : 'on';
        // get_theme_mod
        $bg_img = get_theme_mod( 'breadcrumb_image' );
        $breadcrumb_padding = get_theme_mod( 'breadcrumb_padding' );
        $breadcrumb_bg_color = get_theme_mod( 'breadcrumb_bg_color', '#16243E' );
        $breadcrumb_shape_switch = get_theme_mod( 'breadcrumb_shape_switch', 'on' );
        if ( $hide_bg_img == 'off' ) {
            $bg_main_img = '';
        }else{  
            $bg_main_img = !empty( $bg_img_from_page ) ? $bg_img_from_page['url'] : $bg_img;
        }
        
        ?>

<!-- breadcrumb area start -->
<section class="breadcrumb__area pt-130 pb-115 breadcrumb__style-10 black-bg p-relative z-index-1">
    <div class="breadcrumb__bg-4 breadcrumb__bg-overlay m-img include-bg" data-background="assets/img/blog/breadcrumb/blog-breadcrumb-slider-3.jpg"></div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-10">
            <div class="breadcrumb__content text-center">
                <h3 class="breadcrumb__title"><?php echo esc_html($title); ?></h3>
                <div class="breadcrumb__list">
                    <?php if(function_exists('bcn_display')){
                        bcn_display();
                    }?>
                </div>
            </div>
            </div>
        </div>
    </div>
</section>
<!-- breadcrumb area end -->

<?php
      }
}
