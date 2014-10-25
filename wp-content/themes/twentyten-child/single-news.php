<?php 
get_header(); ?>
    <div id="inclass2a">
        <p><?php the_field('sub_title'); ?></p>
    </div>
    <div id="inclass2b">
        <p><?php the_field('intro_content'); ?></p>
    </div>
    <div id="inclass2c">
        <p><?php the_field('news_content'); ?></p>
    </div>
    <div>
        <img id="inclass2d" src="<?php the_field('image'); ?>" alt="News Image"/>
    </div>
		
<?php get_footer(); ?>