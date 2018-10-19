<?php
/**
 *  Template Name: Сетка товаров
 */
if (is_mobile()) {
  get_header('m');
  include 'page-mob-magazin.php';
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
		<div class="w1185 z100 pad-t-15">
	      <?php global $post; ?>
	        <h2>Каталог</h2>
	      <?php wp_nav_menu(array('menu' => 18)); ?>
	    </div>
  	</div>

	<div class="p1185">

		<section class="product-cat-grid">
			<?php

			$product_cat = "";

			if (is_page(635)) {
				$product_cat = "vechernie-platya";
			}

			if (is_page(201)) {
				$product_cat = "svadebnye-platya";
			}

			$args = array (
					'post_type'              => array( 'product' ),
					'product-cat'            => $product_cat,
					'posts_per_page'         => -1,
					'paged'                  => get_query_var( 'paged' ),
					'order'                  => 'DESC',
				);
			
			$query = new WP_Query( $args );
			if ( $query->have_posts() ) { while ( $query->have_posts() ) { $query->the_post();

			$thumb_id = get_post_thumbnail_id();
			$thumb_url = wp_get_attachment_image_src($thumb_id,'full', true);							
			?>  

			<div class="item">
				<div class="item-bg" style="background-image:url(<?php echo $thumb_url[0]; ?>"></div>   
				<div class="title">
					<div class="subtitle">
          <?php 
            $subtitle = get_the_terms( $post->ID, 'product-cat' );
            echo $subtitle[0]->name;
           ?> 
           </div> 
					<?php the_field('tov-name'); ?>
				</div>
				<div class="btn"><a class="btn-more" href="<?php the_permalink(); ?>">Подробнее</a></div>
			</div>

			<?php }
			} else {
			echo 'Ничего нет!';
			}
			wp_reset_postdata();
			?> 	
			<div class="clear"></div>
		</section>

		<section class="page-cont product-cat">

			<?php if (have_posts()) : while (have_posts()) : the_post(); // Цикл записей ?>
			<?php the_content(); ?>
			<?php endwhile; endif; ?>  

			<div class="clear"></div>	
		</section>	
	</div>

<div class="p1185">
  <div class="clear"></div>

  <h2 class="page-bottom-title">Советы</h2>

  <section class="page-bottom-sovetu">


    <?php 
    $args = array(
      'posts_per_page' => 1,
      'cat'  => 11
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
          <span class="sovet-item-text">Новости</span>
          <div class="sovet-item-title"><?php the_title(); ?></div>
      </a>
      </div>

    <?php }
    } else {
      // Постов не найдено
    }
    wp_reset_postdata();?>


  
    <?php 
    $args = array(
      'posts_per_page' => 2,
      'cat'  => 10
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
          <span class="sovet-item-text">Советы</span>
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
    <?php if(is_page(5)){
          wp_nav_menu(array('menu' => 2));
        }
        if($post->post_parent == 56){
          wp_nav_menu(array('menu' => 3));
        } ?>
  </div>  
</div>


</div>


<?php get_template_part( 'footer2' ); ?>