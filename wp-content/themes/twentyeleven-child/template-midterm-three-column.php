<?php 
/*
* Template Name: Custom Fields Template
*/

get_header(); ?>

		<div id="container">
			<div id="content" role="main">
                <div class="column">
                <p><?php the_field('title'); ?></p>
                <p><?php the_field('wysiwyg'); ?></p>
                </div>
                <div class="column">
                <p><?php the_field('title'); ?></p>
                <p><?php the_field('wysiwyg'); ?></p>
                </div>
                <div class="column">
                <p><?php the_field('title'); ?></p>
                <p><?php the_field('wysiwyg'); ?></p>
                </div>
			</div><!-- #content -->
		</div><!-- #container -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
