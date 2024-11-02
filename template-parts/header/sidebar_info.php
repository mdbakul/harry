<?php

 $btntext = get_theme_mod('harry_sidebar_btntext',__('Getting Started', 'harry')); 
 $number = get_theme_mod('harry_sidebar_numbertext',__('+964 742 44 763 ', 'harry')); 
 $gmail = get_theme_mod('harry_sidebar_gamil',__('info@harry.com', 'harry')); 

// switch start here
 $logo_switch =get_theme_mod('logo_switch', true);
 $menu_switch=get_theme_mod('menu_switch',true);
 $btn_switch=get_theme_mod('btn_switch',true);
 $social_switch=get_theme_mod('social_switch',true);
 $number_switch=get_theme_mod('number_switch',true);

?>

<!-- offcanvas area start -->
<div class="offcanvas__area offcanvas__area-1">
    <div class="offcanvas__wrapper">
        <div class="offcanvas__shape">
            <img class="offcanvas__shape-1" src="assets/img/shape/offcanvas-shape-1.png" alt="">
        </div>
        <div class="offcanvas__close">
            <button class="offcanvas__close-btn offcanvas-close-btn">
                <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M11 1L1 11" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                        stroke-linejoin="round" />
                    <path d="M1 1L11 11" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                        stroke-linejoin="round" />
                </svg>
            </button>
        </div>
        <div class="offcanvas__content">
            <div class="offcanvas__top mb-70 d-flex justify-content-between align-items-center">
                <?php if(!empty($logo_switch)): ?>
                <div class="offcanvas__logo logo">
                    <?php harry_header_sidebar_logo() ?>
                </div>
                <?php endif ?>
            </div>
            <div class="mobile-menu fix d-lg-none"></div>
            
            <div class="offcanvas__menu offcanvas__menu-ff-space d-none d-lg-block">
               <?php if(!empty($menu_switch)): ?>
                <nav>
                    <?php harry_sidebar_manu() ?>
                </nav>
                <?php endif ?>
            </div>
             <?php if(!empty($btn_switch)): ?>
            <div class="offcanvas__btn">
                <a href="contact.html" class="tp-btn-offcanvas"><?php echo esc_html($btntext);?><i
                        class="fa-regular fa-chevron-right"></i></a>
            </div>
            <?php endif ?> 

            <?php if(!empty($social_switch)): ?>
            <div class="offcanvas__social">
                <h3 class="offcanvas__social-title"><?php echo esc_html__('Follow','harry') ?>:</h3>
                <?php harry_sidebar_social() ?>
            </div> 
            <?php endif ?>
            <?php if(!empty($number_switch)): ?>
            <div class="offcanvas__contact">
                <p class="offcanvas__contact-call"><a href="tel:+964-742-44-763"><?php echo esc_html($number); ?></a>
                </p>
                <p class="offcanvas__contact-mail"><a href="mailto:info@harry.com"> <?php echo esc_html($gmail) ?></a>
                </p>
            </div>
            <?php endif ?>
        </div>
    </div>
</div>
<div class="body-overlay"></div>
<!-- offcanvas area end -->

