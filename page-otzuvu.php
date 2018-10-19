<?php
/**
 *  Template Name: Отзывы
 */
if (is_mobile()) {
  get_header('m');
  include 'page-mob.php'; ?>
    <section class="container-m">
      <div id="vk_comments"></div>
      <script type="text/javascript">
      VK.Widgets.Comments("vk_comments", {limit: 20, width: "300", attach: "photo"});
      </script> 
      <div class="clear"></div> 
    </section>
  <?php return;
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
          <?php wp_nav_menu(array('menu' => 13)); ?>
        </div>
    </div>

	<div class="p1185">
	<section class="sovetu-wrap">
	
    <div id="vk_comments"></div>
    <script type="text/javascript">
    VK.Widgets.Comments("vk_comments", {limit: 20, width: "1185", attach: "photo"});
    </script>
	<div class="clear"></div>	
	</section>	
	</div>
</div>

<div class="p1185">
  <section class="sovetu-wrap">
  
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
</div>

<div class="pb-nav">
    <?php

        
          wp_nav_menu(array('menu' => 2));
        

       ?>
  </div>


<?php get_template_part( 'footer2' ); ?>