<?php
/**
 *  Template Name: Наши работы
 */
if (is_mobile()) {
  get_header('m');
  include 'page-mob-rabotu.php';
  return;
} else {
  get_header();
}?> 

<script>
	$('body').addClass('horizontal');
</script>

<?php get_template_part('inc/sidebar-menu'); ?>
     
<section class="slide fade kenBurns before  horizontal" data-title="<?php the_title(); ?>">
  <div class="content">
    <div class="container">
      <div class="">

        <div class="t1185 fixed">
            <?php get_template_part('inc/page-header'); ?>
        </div>

                 <?php if (have_posts()) : while (have_posts()) : the_post(); // Цикл записей ?>
            <div class="my-gallery"><?php the_content(); ?></div>
            <?php endwhile; endif; ?>

            <div class="b1185 fixed rabotu">
    <?php wp_nav_menu(array('menu' => 4)); ?>
        </div>

      </div>
    </div>
  </div>
      <?php
        $thumb_id = get_post_thumbnail_id();
        $thumb_url = wp_get_attachment_image_src($thumb_id,'full', true);
        ?>
  <div class="background def-bg"></div>
</section>

<div class='clear'></div>

<?php get_footer(); // подключаем footer.php ?>

