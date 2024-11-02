<?php

//header logo start here
function harry_header_logo(){
    $logo= get_theme_mod ('harry_header_logo', get_template_directory_uri(). '/assets/img/logo/logo-black.svg');  

    ?>
<a href="<?php echo get_home_url('/'); ?>">
    <img src="<?php echo esc_url($logo);?>" alt="<?php echo esc_attr($logo);?>">
</a>
<?php
}

//header sidebar logo start here
function harry_header_sidebar_logo(){
    $logo= get_theme_mod ('harry_sidebar_logo', get_template_directory_uri(). '/assets/img/logo/logo-black.svg');  

    ?>
<a href="<?php echo get_home_url('/'); ?>">
    <img src="<?php echo esc_url($logo);?>" alt="<?php echo esc_attr($logo);?>">
</a>
<?php
}

//header search bar logo start here
function harry_header_search_logo(){
    $logo= get_theme_mod ('harry_search_logo', get_template_directory_uri(). '/assets/img/logo/logo.svg');  

    ?>
<a href="<?php echo get_home_url('/'); ?>">
    <img src="<?php echo esc_url($logo);?>" alt="<?php echo esc_attr($logo);?>">
</a>
<?php
}

// harry manu start here
function harry_main_manu(){
    wp_nav_menu(array(        
        'theme_location'	=> "primary_menu",        
        'menu_class'		=> "", 
        'menu_id'			=> "",          
        'fallback_cb'		=> "Harry_Walker_Nav_Menu::fallback",         
        'walker'			=> new Harry_Walker_Nav_Menu(), 
    ) );    
}
//harry manu end here


// harry manu start here
function harry_sidebar_manu(){
    wp_nav_menu(array(        
        'theme_location'	=> "sidebar_menu",        
        'menu_class'		=> "", 
        'menu_id'			=> "",          
        'fallback_cb'		=> "Harry_Walker_Nav_Menu::fallback",         
        'walker'			=> new Harry_Walker_Nav_Menu(), 
    ) );    
}
// harry manu end here

function harry_sidebar_social(){
    $facebook=get_theme_mod('harry_facebook', __("#", 'harry'));
    $personalweb=get_theme_mod('harry_web', __("#", 'harry'));
    $twiter=get_theme_mod('harry_twiter', __("#", 'harry'));
    $linkedin=get_theme_mod('harry_linked', __("#", 'harry'));
    $behance=get_theme_mod('harry_behance', __("#", 'harry'));
    $drible=get_theme_mod('harry_drible', __("#", 'harry'));
    $youtube=get_theme_mod('harry_youtube', __("#", 'harry'));
    $instragram=get_theme_mod('harry_instragram', __("#", 'harry'));


    ?>

    <?php if(!empty($facebook)) :?>
        <a href="<?php echo esc_url($facebook); ?>"><i class="fab fa-facebook-f"></i></a>
    <?php endif ?>
    <?php if(!empty($twiter)) :?>
        <a href="<?php echo esc_url($twiter); ?>"><i class="fab fa-twitter"></i></a>
    <?php endif ?>
    <?php if(!empty($youtube)) :?>
        <a href="<?php echo esc_url($youtube); ?>"><i class="fab fa-youtube"></i></a>
    <?php endif ?>
    <?php if(!empty($linkedin)) :?>
        <a href="<?php echo esc_url($linkedin); ?>"><i class="fab fa-linkedin"></i></a>
    <?php endif ?>
    <?php if(!empty($behance)) :?>
        <a href="<?php echo esc_url($behance); ?>"><i class="fab fa-behance"></i></a>
    <?php endif ?>
    <?php if(!empty($drible)) :?>
        <a href="<?php echo esc_url($drible); ?>"><i class="fas fa-basketball-ball"></i></a>
    <?php endif ?>
    <?php if(!empty($personalweb)):?>
        <a href="<?php echo esc_url($personalweb); ?>"><i class="fas fa-globe"></i></a>
    <?php endif ?>
    <?php if(!empty($instragram)):?>
        <a href="<?php echo esc_url($instragram); ?>"><i class="fab fa-instagram"></i></a>
    <?php endif ?>
  <?php 
}


// harry_blog_navigation 
function harry_navigation(){
    $pages = paginate_links( array( 
        'type' => 'array',
        'prev_text'    => __('<svg width="16" height="11" viewBox="0 0 16 11" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M6.17749 10.105L1.62499 5.55248L6.17749 0.999981" stroke="currentColor" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
        <path d="M14.3767 5.55249L1.75421 5.55249" stroke="currentColor" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
     </svg>                                       
     Prev'),
        'next_text'    => __('Next
        <svg width="16" height="11" viewBox="0 0 16 11" fill="none" xmlns="http://www.w3.org/2000/svg">
           <path d="M9.82422 1L14.3767 5.5525L9.82422 10.105" stroke="currentColor" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
           <path d="M1.625 5.55249H14.2475" stroke="currentColor" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
        </svg> '),
    ) );
        if( $pages ) {
        echo '<nav><ul>';
        foreach ( $pages as $page ) {
            echo "<li>$page</li>";
        }
        echo '</ul></nav>';
    }
}

?>