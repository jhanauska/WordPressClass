<?php 
get_header(); ?>
  <div class="subTitle">
    <p><?php the_field('sub_title'); ?></p>
  </div>
  <div class="introContent">
    <p><?php the_field('intro_content'); ?></p>
  </div>
  <?php if(have_posts()) : while (have_posts()) : the_post(); ?>

    <h1><?php the_title(); ?></h1>
    <?php the_content(); ?>
  
  <?php endwhile; endif; ?>
<?php get_footer(); ?>