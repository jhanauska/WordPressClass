<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<?php endwhile; else : ?>
  <h1 id="inclass3a"><?php the_title() ?></h1>
  <p id="inclass3b"><?php the_excerpt() ?></p>
  <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>



<?php get_footer(); ?>