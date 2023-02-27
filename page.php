<?php get_header(); ?>



<section>
    <div class="container text-center">
  <div class="row">
    <?php if(have_posts()):
            while(have_posts()):
                the_post(); ?>
            <img src="<?php echo get_the_post_thumbnail_url( ); ?>" />
            <h1><?php the_title(); ?></h1>
            <div class="single-content post-<?php the_ID(  ); ?>">
                <?php the_content(); ?>
        
            </div>
    <?php endwhile;
        endif;
    ?>
  </div>
</div>
</section>


<?php get_footer(); ?>


