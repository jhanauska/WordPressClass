<?php 
/*
* Template Name: Midterm Three Column Template
*/

get_header(); ?>

		<div id="container">
			<div id="content" role="main">
                <div class="column">
                <p><?php the_field('title'); ?></p>
                <p><?php the_field('content_field'); ?></p>
                </div>
                <div class="column">
                <p><?php the_field('title'); ?></p>
                <p><?php the_field('content_field'); ?></p>
                </div>
                <div class="column">
                <p><?php the_field('title'); ?></p>
                <p><?php the_field('content_field'); ?></p>
                </div>
			</div><!-- #content -->
		</div><!-- #container -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
