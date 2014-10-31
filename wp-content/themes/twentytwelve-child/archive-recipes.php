<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
  <div class="inclass3a"><h2><?php the_title() ?></h1></div>
  <div class="inclass3b"><p><?php the_excerpt() ?></p></div>
<?php endwhile; else : ?>
  <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>



<?php get_footer(); ?>