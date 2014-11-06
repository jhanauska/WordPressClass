<?php 
/*
* Template Name: Midterm Content and Sidebar Template
*/

get_header(); ?>

		<div id="container" class="container">
			<div id="content" role="main">
  <?php if(have_posts()) : while (have_posts()) : the_post(); ?>

    <h1 class="title"><?php the_title(); ?></h1>
    <?php the_content(); ?>
  
  <?php endwhile; endif; ?>


			</div><!-- #content -->
		</div><!-- #container -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
