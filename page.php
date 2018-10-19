<?php
/**
 * Чистый Шаблон для разработки
 * Шаблон обычной страницы
 * http://dontforget.pro
 * @package WordPress
 * @subpackage clean
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
      <?php 
      global $post;

        if(is_page(array(5, 670))){ ?>
          <h2>Студия</h2>
      <?php } elseif ($post->post_parent == 56) { ?>
        <h2>Услуги пошива</h2>
      <?php } else { ?>
        <h2><?php the_title(); ?></h2>
      <?php
        }

      	if(is_page(array(5, 670))){
      		wp_nav_menu(array('menu' => 13));
      	}
        if($post->post_parent == 56){
          wp_nav_menu(array('menu' => 3));
        }

       ?>
    </div>
  </div>

	<div class="p1185">
  	<section class="page-cont">
  	
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
    <?php if(is_page(array(5, 670))){
          wp_nav_menu(array('menu' => 2));
        }
        if($post->post_parent == 56){
          wp_nav_menu(array('menu' => 3));
        } ?>
  </div>  
  </div>


</div>


<?php get_template_part( 'footer2' ); ?>