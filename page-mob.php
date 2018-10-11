<?php
/**
 *  Template Name: Моб. страница
 */
get_header('m'); ?>
<style>
	body{
		background-image: url(<?php the_post_thumbnail_url('full'); ?>);
	}
</style>
<section class="container-m">
		<?php if (have_posts()) : while (have_posts()) : the_post(); // Цикл записей ?>
    <?php the_content(); ?>
    <?php endwhile; endif; ?>  
	<div class="clear"></div>	
</section>
<?php get_footer('m'); ?>