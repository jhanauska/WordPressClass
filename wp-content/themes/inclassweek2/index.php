<?php
/**
 * @package WordPress
 * @subpackage Classic_Theme
 */
get_header();
?>


  <?php $post = $posts[0]; // Hack. Set $post so that the_date() works. ?>
 	  <?php /* If this is a category archive */ if (is_category()) { ?>
		<h2 class="info">Archive for the &#8216;<?php single_cat_title(); ?>&#8217; Category</h2>
 	  <?php /* If this is a tag archive */ } elseif( is_tag() ) { ?>
		<h2 class="info">Posts Tagged &#8216;<?php single_tag_title(); ?>&#8217;</h2>
 	  <?php /* If this is a daily archive */ } elseif (is_day()) { ?>
		<h2 class="info">Archive for <?php the_time('F jS, Y'); ?></h2>
 	  <?php /* If this is a monthly archive */ } elseif (is_month()) { ?>
		<h2 class="info">Archive for <?php the_time('F, Y'); ?></h2>
 	  <?php /* If this is a yearly archive */ } elseif (is_year()) { ?>
		<h2 class="info">Archive for <?php the_time('Y'); ?></h2>
	  <?php /* If this is an author archive */ } elseif (is_author()) { ?>
		<h2 class="info">Author Archive</h2>
	  <?php } elseif (is_search()) { ?>
		<h2 class="info">You are searching ... ...</h2>
		<h2 class="info">Blog Archives</h2>
 	  <?php } ?>
	  
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<div <?php post_class() ?> id="post-<?php the_ID(); ?>">


	<?php if(is_page()){} else { ?><div class="meta"><?php edit_post_link(__('Edit This'), '<strong class="edit">', '</strong>'); ?>  <?php the_category(',') ?> <?php the_tags(__('| Tags: '), ', ', '');?> </div><?php } ?>

	<h1 class="storytitle"><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h1>
	
	<div class="meta-feedback"><?php wp_link_pages(); ?><?php comments_popup_link(__('Comments (0)'), __('Comments (1)'), __('Comments (%)')); ?>  <?php if ( is_single() || is_page() ) { echo comments_number(__('No Comments'), __('1 Comment'), __('% Comments')).'<a href="#postcomment" title="Leave a comment.">&raquo;</a>';} ?></div>
	<div class="meta"><?php the_time(F) ?> <?php the_time(j) ?>, <?php the_time(Y) ?> at <?php the_time() ?>  </div>

	<div class="storycontent">
		<?php the_content(__('(more...)')); ?>
	</div>


</div>

<?php comments_template(); // Get wp-comments.php template ?>

<?php endwhile; else: ?>
<div class="post">
	<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
</div>
<?php endif; ?>

<?php if(is_single()) {} elseif(is_page()) {} else { ?>
<div class="newer-older">
	<?php posts_nav_link('', __('<span class="newer">&laquo; Newer Posts</span>'), __('<span class="older">Older Posts &raquo;</span>')); ?>
</div>
<?php } ?>
</div>
<?php get_footer(); ?>