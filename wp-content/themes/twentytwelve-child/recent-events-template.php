<?php 
/*
* Template Name: Recent Events Template
*/

get_header(); ?>

<?php $loop = new WP_Query( array( 'post_type' => 'events', 'posts_per_page' => 3 ) ); ?>

<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>

  <div class="inclass4a"><h2><?php the_title( '<h2 class="entry-title"><a href="' . get_permalink() . '" title="' . the_title_attribute( 'echo=0' ) . '" rel="bookmark">', '</a></h2>' ) ?></h1></div>
 
  <div class="inclass4b"><p><?php the_excerpt() ?></p></div>
<?php endwhile; ?>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
