<?php
/**
 * @package WordPress
 * @subpackage Classic_Theme
 */
?>
<!-- begin sidebar -->
<div class="sidebar" id="sidebar">

<ul>
<?php 	/* Widgetized sidebar, if you have the plugin installed. */
		if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar() ) : ?>
 <li id="search">
   <form id="searchform" class="searchform-normal" method="get" action="<?php bloginfo('home'); ?>">
	<div>
		<input type="text" name="s" id="s" size="15" />
		<input id="searchsubmit" type="submit" value="<?php _e('Search'); ?>" />
	</div>
	</form>
 </li>
  <li id="calendar">
    <?php get_calendar(1); ?>
  </li>
	<?php wp_list_categories('title_li=' . __('Categories:')); ?>
  <li id="archives"><?php _e('Archives:'); ?>
  
	<ul>
	 <?php wp_get_archives('type=monthly'); ?>
	</ul>
 </li>
	<?php wp_list_bookmarks('title_after=&title_before='); ?>
<?php endif; ?>

</ul>

</div>
<!-- end sidebar -->
