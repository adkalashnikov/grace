<?php
/**
 * Чистый Шаблон для разработки
 * Это шаблон 404 ошибки, отрабатывает, когда написали фигни в адресную строку
 * http://dontforget.pro
 * @package WordPress
 * @subpackage clean
 */
get_header(); // Подключаем хедер ?> 
<script>
	$('body').removeClass('slides');
</script>

<div class="t1185">
  <div class="actionButton sidebarTrigger" data-sidebar-id="1" id="menu-btn">Меню</div>

  <div class="logo"><a href="<?php echo home_url(); ?>"></a></div>

  <div class="top-right">
    <?php get_template_part('inc/phone-link' ); ?>
    <a href="http://www.odnoklassniki.ru/profile/249373513305" class="ok" target="_blank"></a>
    <a href="https://vk.com/gracestudio_com_ua" class="vk" target="_blank"></a>
  </div>
</div>


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

<div id="page-container">
	
	<div class="pt-img">
		<img src="http://gracestudio.com.ua/wp-content/uploads/2016/04/19.jpg" alt="">
		<div class="w1185 z100 pad-t-15">
	      <?php global $post; ?>
	        <h2>404</h2>
	    </div>
  	</div>

</div>

<?php get_template_part( 'footer2' ); ?>