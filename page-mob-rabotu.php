<?php
/**
 *  Template Name: Моб. Наши работы
 */
get_header('m'); ?>
<style>
	body{
		background-image: url(<?php the_post_thumbnail_url('full'); ?>);
	}
</style>
<section class="">
		<?php if (have_posts()) : while (have_posts()) : the_post(); // Цикл записей ?>
    <div class="my-gallery"><?php the_content(); ?><div class="clear"></div>	</div>
    <?php endwhile; endif; ?>  
	<div class="clear"></div>	
</section>
<?php get_footer('m'); ?>