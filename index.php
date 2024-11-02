<?php
get_header();

?>

<section class="postbox__area grey-bg-4 pt-120 pb-120">
    <div class="container">
        <div class="row">
            <div class="col-xxl-8 col-lg-8">
                <div class="postbox__wrapper"> 
                    <?php  
                        if ( have_posts() ) : ?>
                        <?php while ( have_posts() ) : the_post(); ?> 
                            <?php echo get_template_part( 'template-parts/content' , get_post_format() ); ?>
                        <?php endwhile; ?>
                    <?php endif ?>
                    <div class="tp-pagination tp-pagination-style-2 mt-20">
                           <?php harry_navigation(); ?>
                    </div>
                </div>                
            </div>
        </div>
    </div>
</section>

<?php
get_footer();