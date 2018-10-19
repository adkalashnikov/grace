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
    <?php get_template_part('inc/page-header'); ?>
</div>

<?php get_template_part('inc/sidebar-menu'); ?>

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