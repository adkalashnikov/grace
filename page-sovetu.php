<?php
/**
 *  Template Name: Советы
 */
if (is_mobile()) {
  get_header('m');
  include 'page-mob.php';
  return;
} else {
  get_header();
}?>
<script>
	$('body').removeClass('slides');
</script>

<div class="t1185">
    <?php get_template_part('inc/page-header'); ?>
</div>

<?php get_template_part('inc/sidebar-menu'); ?>

<div id="page-container">
	

	<div class="pt-img">
		<?php the_post_thumbnail('full'); ?>
		<div class="w1185 z100">
     
        <h2>Студия</h2>
      	
      	<?php	wp_nav_menu(array('menu' => 13)); ?>
    </div>
        
  </div>

	<div class="p1185">
	<section class="sovetu-wrap">
	
		<?php 
		$args = array(
			'posts_per_page' => -1,
			'cat'  => array(10, 11)
		);
    $query = new WP_Query( $args );

    // Цикл
    if ( $query->have_posts() ) {
    while ( $query->have_posts() ) {
      $query->the_post();
		?>
		
			<div class="sovet-item">
			<div class="sovet-item-bg"><?php the_post_thumbnail('full'); ?></div>
			<a href="<?php the_permalink(); ?>">
					<span class="sovet-item-text">
            <?php $category = get_the_category(); 
                  echo $category[0]->cat_name; ?>
          </span>
					<div class="sovet-item-title"><?php the_title(); ?></div>
			</a>
			</div>

		<?php }
    } else {
      // Постов не найдено
    }
    wp_reset_postdata();?>

	<div class="clear"></div>	
	</section>	

	<div class="pb-nav">
		<?php wp_nav_menu(array('menu' => 2)); ?>
	</div>

	</div>


</div>


<?php get_template_part( 'footer2' ); ?>