<?php get_header(); ?>



<section>
    <div class="container index">
        <h1 style="text-align:center; margin-bottom: 30px;"> <?php echo single_post_title();  ?></h1>
  <div class="row">
    <?php if(have_posts()):
            while(have_posts()):
                the_post(); ?>
            <div class="col">
                <div class="img-container">
                     <img style="width:100%" src="<?php echo get_the_post_thumbnail_url( ); ?>" />
                </div>
                <h3><?php the_title(); ?></h3>
                <div class="single-content post-<?php the_ID(  ); ?>">
                        <?php the_excerpt(  ); ?>
                
                </div>
            </div>
            
    <?php endwhile;
        endif;
    ?>
  </div>
</div>
</section>


<?php get_footer(); ?>


