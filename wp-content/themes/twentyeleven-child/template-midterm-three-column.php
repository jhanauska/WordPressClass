<?php 
/*
* Template Name: Midterm Three Column Template
*/

get_header(); ?>

		<div id="container">
			<div id="content" role="main">
                <div class="column">
                <p><?php the_field('title_col_1'); ?></p>
                <p><?php the_field('content_field_col_1'); ?></p>
                </div>
                <div class="column">
                <p><?php the_field('title_col_2'); ?></p>
                <p><?php the_field('content_field_col_2'); ?></p>
                </div>
                <div class="column">
                <p><?php the_field('title_col_3'); ?></p>
                <p><?php the_field('content_field_col_3'); ?></p>
                </div>
  <?php if(have_posts()) : while (have_posts()) : the_post(); ?>

    <h1 class="title"><?php the_title(); ?></h1>
    <?php the_content(); ?>
  
  <?php endwhile; endif; ?>
              

			</div><!-- #content -->
		</div><!-- #container -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
