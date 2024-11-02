<?php    
    $gellary = function_exists('get_field') ? get_field('blog_gallery') :'null';  
?>
<!-- blog content start here -->
<article id="post-<?php the_ID(); ?>" <?php post_class('d-none'); ?>>
    <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
        <?php the_author(); ?>
        <?php the_date(); ?>
        <?php comments_number( 'No Comments', '1 Comment', '% Comments' ); ?>
        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
        <p><?php the_excerpt();?></p> 
</article> 


<article id="post-<?php the_ID(); ?>" <?php post_class('postbox__item format-image mb-50 transition-3 format-audio'); ?>>
    <div class="postbox__thumb postbox__slider swiper-container w-img p-relative">
        <div class="swiper-wrapper">
            <?php foreach($gellary as $every) : ?>
            <div class="postbox__slider-item swiper-slide">
                <img src="<?php echo esc_url($every)?>" alt="">
            </div>            
            <?php endforeach  ?>
        </div>
        <div class="postbox__nav">
            <button class="postbox-slider-button-next"><i class="fa-regular fa-angle-right"></i></button>
            <button class="postbox-slider-button-prev"><i class="fa-regular fa-angle-left"></i></button>
        </div>
    </div>
    <div class="postbox__content">
        <div class="postbox__meta">
            <?php get_template_part('template-parts/meta');?>
        </div>
        <h3 class="postbox__title">
            <a href="blog-details.html"><?php the_title(); ?></a>
        </h3>
        <div class="postbox__text">
            <p><?php the_excerpt();?></p>
        </div>
        <div class="postbox__read-more">
            <a href="blog-details.html" class="tp-btn">read more</a>
        </div>
    </div>
</article>


