<?php
//header start here
function harry_theme_header(){
    $header= get_theme_mod('choose_header_style', __('style_1', 'harry'));  

    if($header=='style_1'){
        get_template_part('template-parts/header/header-1');        
    }elseif($header=='style_2'){
        get_template_part('template-parts/header/header-2');
    }elseif($header=='style_3'){
        get_template_part('template-parts/header/header-3');
    }elseif($header=='style_4'){
        get_template_part('template-parts/header/header-4');
    } 
}


//header start here
function harry_theme_footer(){
    $footer = get_theme_mod('choose_footer_style', __('style_1', 'harry'));  

    if($footer=='style_1'){
        get_template_part('template-parts/footer/footer-1');        
    }elseif($footer=='style_2'){
        get_template_part('template-parts/footer/footer-2');  
    }elseif($footer=='style_3'){
        get_template_part('template-parts/footer/footer-3');  
    }elseif($footer=='style_4'){
        get_template_part('template-parts/footer/footer-4');  
    } 
}

// //header start 
function harry_theme_sidebar(){
    get_template_part('template-parts/header/sidebar_info');
}

// //header start 
function harry_theme_search(){
    get_template_part('template-parts/header/search');
}

// breadcamp start here 
 get_template_part('template-parts/header/breadcamp');
