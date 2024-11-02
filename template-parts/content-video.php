<?php 
    $video = function_exists('get_field') ? get_field('post_url') :'null';  
?> 

<article id="post-<?php the_ID(); ?>" <?php post_class('postbox__item format-image mb-50 transition-3 format-video'); ?>>
    <div class="postbox__thumb postbox__video w-img p-relative">        
        <a href="<?php the_permalink(); ?>">
            <?php the_post_thumbnail(); ?>
        </a>
        <a href="<?php echo esc_url($video);?>" class="play-btn pulse-btn popup-video"><i class="fas fa-play"></i></a>
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