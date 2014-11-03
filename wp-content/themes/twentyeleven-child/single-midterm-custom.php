<?php 
get_header(); ?>

  <?php if(have_posts()) : while (have_posts()) : the_post(); ?>
    <h1><?php the_title(); ?></h1>
    <h2 class="subTitle"><?php the_field('sub_title'); ?></p>
    <p class="introContent"><?php the_field('intro_content'); ?></p>
    <?php the_content(); ?>
  
  <?php endwhile; endif; ?>
<?php get_footer(); ?>