<?php
/**
 * @package WordPress
 * @subpackage Classic_Theme
 */
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>

<head profile="http://gmpg.org/xfn/11">
	<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />

	<title><?php wp_title('&laquo;', true, 'right'); ?> <?php bloginfo('name'); ?></title>

	<style type="text/css" media="screen">
		@import url( <?php bloginfo('stylesheet_url'); ?> );
		
		<?php if ( $user_ID ) :?>

/* Logged-in */
.logged-in {
	height:46px;
	padding:0; margin:0;
	background:#464646 url(<?php echo get_option('home'); ?>/wp-admin/images/wp-logo.gif) no-repeat 16px 7px;
	color:#999;
}

.logged-in h1 {
	height:36px;
        margin:0; padding:10px 0 0 55px;
}

</style>

<!--[if lt IE 8]>
<style type="text/css" media="screen">
.logged-in h1{
	height:44px;
	padding-top:2px;
}
</style>
<![endif]-->

<style type="text/css" media="screen">

.logged-in h1 a {
        margin:0; padding:0;
        color:#fff; font:22px Georgia,"Times New Roman","Bitstream Charter",Times,serif; font-weight:normal; text-decoration:none;
}

#header small {
	top:138px;
}

#content .storytitle {
        padding:3px 0 2px 0;
}

.logged-in h1 a:hover {
        text-decoration:underline;
}

.logged-in h1 a span {
        font-size:50%;
}

.logged-in p a, .comments_logged-in a { color:#ccc; }
.logged-in p a:hover, .comments_logged-in a:hover { text-decoration:underline; background:none; color:#fff; }
.logged-in p { margin:-46px 0 0 0; padding:16px 15px 0 0; text-align:right; font:12px "Lucida Grande",Verdana,Arial,"Bitstream Vera Sans",sans-serif; }

.edit a, #commentlist cite .edit a {
        margin:-5px 0 0 0; padding:4px 10px;
	background:#f2f2f2 url(<?php echo get_option('home'); ?>/wp-admin/images/white-grad.png) repeat-x scroll left top;
        border-color:#bbb; border-style:solid; border-width:1px; -moz-border-radius-bottomleft:11px; -moz-border-radius-bottomright:11px; -moz-border-radius-topleft:11px; -moz-border-radius-topright:11px; -moz-box-sizing:content-box;
        color:#464646; font-family:"Lucida Grande",Verdana,Arial,"Bitstream Vera Sans",sans-serif; font-size:11px !important; text-decoration:none; text-shadow:0 1px 0 #fff; line-height:1.2em; font-size-adjust:none; font-style:normal; font-variant:normal; font-weight:normal;
cursor:pointer; text-decoration:none !important;
}

.edit a:hover, #commentlist cite .edit a:hover {
        border-color:#666;
	background:#f2f2f2 url(<?php echo get_option('home'); ?>/wp-admin/images/white-grad.png) repeat-x scroll left top;
        color:#000;
}

#content .comments_logged-in {
	padding:10px 10px 10px 15px;
	background:#333; color:#999;
	-moz-border-radius: 3px; -khtml-border-radius: 3px; -webkit-border-radius: 3px; border-radius: 3px;
	font:12px "Lucida Grande","Lucida Sans Unicode",Tahoma,Verdana,sans-serif; 
  }
/* // Logged-in */

<?php endif; ?>

	
	</style>

	<link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php bloginfo('rss2_url'); ?>" />
	<link rel="alternate" type="text/xml" title="RSS .92" href="<?php bloginfo('rss_url'); ?>" />
	<link rel="alternate" type="application/atom+xml" title="Atom 1.0" href="<?php bloginfo('atom_url'); ?>" />

	<link rel="shortcut icon" href="<?php bloginfo('stylesheet_directory'); ?>/images/favicon_<?php if($theme_favicon=='2') {echo'2';} elseif($theme_favicon=='3') {echo'3';} else {echo'1';} ?>.ico"/>
		
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
	<?php wp_get_archives('type=monthly&format=link'); ?>
	<?php //comments_popup_script(); // off by default ?>
	<?php wp_head(); ?>
</head>

<body>

<?php if ( $user_ID ) :

		global $userdata;
		get_currentuserinfo();
		?>

			<div class="logged-in">
				<h1>
					<a class="dashboard" href="<?php echo get_option('home'); ?>/wp-admin/"><?php bloginfo('name'); ?> <span>&rarr; Dashboard</span></a>
				</h1>
				<p>
					Howdy, <a href="<?php echo get_option('home'); ?>/wp-admin/profile.php"> <?php echo($userdata->user_login); ?></a> |
					<?php wp_loginout(); ?>
				</p>
			</div>

                <hr/>
<?php endif; ?>


<div class="show"><?php if(isset($theme_blogdescription) && $theme_blogdescription=="Enable") {  echo '<small>'; bloginfo('description'); echo '</small>'; } ?> 
</div>

<div class="rap">
<div id="header">
	<h1><a <?php if(is_home()){ echo 'class="current_page_item"'; } ?> href="<?php bloginfo('url'); ?>/"><?php if(isset($theme_blogdescription) && $theme_blogdescription=="Enable") {  echo '<small>'; bloginfo('description'); echo '</small>'; } ?> <strong><?php bloginfo('name'); ?></strong></a></h1>
</div>

<hr/>

<div class="rss">
	<a href="<?php bloginfo('rss2_url'); ?>" title="<?php _e('Syndicate this site using RSS'); ?>"><?php _e('<abbr title="Really Simple Syndication">RSS</abbr>'); ?></a> | <a href="<?php bloginfo('comments_rss2_url'); ?>" title="<?php _e('The latest comments to all posts in RSS'); ?>"><?php _e('Comments <abbr title="Really Simple Syndication">RSS</abbr>'); ?></a>
</div>

<hr/>

<div class="content" id="content">
  
