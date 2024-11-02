
<!-- blog content start here -->
<article id="post-<?php the_ID(); ?>" <?php post_class('postbox__item format-image mb-50 transition-3'); ?>>
    <div class="postbox__thumb w-img">
        <a href="blog-details.html">
            <?php the_post_thumbnail(); ?>
        </a>
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


<!-- blog content start here -->
<article id="post-<?php the_ID(); ?>" <?php post_class('d-none'); ?>>
    <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
        <?php the_author(); ?>
        <?php the_date(); ?>
        <?php comments_number( 'No Comments', '1 Comment', '% Comments' ); ?>
        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
        <p><?php the_excerpt();?></p> 
</article> 


