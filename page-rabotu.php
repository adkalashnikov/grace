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


<nav class="sidebar sidebar-menu left" data-sidebar-id="1">
  <div class="close">закрыть</div>

  <div class="content">
    <div class="sbm-logo"><div class="logo"><a href="<?php echo home_url(); ?>"></a></div></div>
    <div class="sbm-navs">
      <div class="sbmn-item">
        <?php wp_nav_menu(array('menu' => 5)); ?>
      </div>
      <div class="sbmn-item">
        <?php wp_nav_menu(array('menu' => 6)); ?>
      </div>
      <div class="sbmn-item">
        <?php wp_nav_menu(array('menu' => 7)); ?>
      </div>
      <div class="sbmn-item">
        <?php wp_nav_menu(array('menu' => 8)); ?>
      </div>
      <div class="sbmn-item">
        <?php wp_nav_menu(array('menu' => 9)); ?>
      </div>
      
    </div>
    <div class="sbm-foo">
      <?php get_template_part('inc/phone-link' ); ?>
      <a href="http://www.odnoklassniki.ru/profile/249373513305" class="ok" target="_blank"></a>
      <a href="https://vk.com/gracestudio_com_ua" class="vk" target="_blank"></a>
    </div>
  </div>
</nav>
     
					<section class="slide fade kenBurns before  horizontal" data-title="<?php the_title(); ?>">
					  <div class="content">
					    <div class="container">
					      <div class="">

					        <div class="t1185 fixed">
					          <div class="actionButton sidebarTrigger" data-sidebar-id="1" id="menu-btn">Меню</div>
					      
					          <div class="logo"><a href="<?php echo home_url(); ?>"></a></div>

					          <div class="top-right">
					            <?php get_template_part('inc/phone-link' ); ?>
					            <a href="http://www.odnoklassniki.ru/profile/249373513305" class="ok" target="_blank"></a>
					            <a href="https://vk.com/gracestudio_com_ua" class="vk" target="_blank"></a>
					          </div>
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