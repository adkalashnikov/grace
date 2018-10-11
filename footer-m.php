<footer>
<div class="container-m"><a href="tel:+380933657297">093 365-72-97</a></div>
</footer>
<div class="mob-nav">
<header class="header-m">
	<div class="container-m">
		<div class="hm-soc">
			<a href="http://www.odnoklassniki.ru/profile/249373513305" class="ok" target="_blank"></a>
      <a href="https://vk.com/gracestudio_com_ua" class="vk" target="_blank"></a>
		</div>
		<div class="logo"><a href="<?php echo home_url(); ?>"></a></div>
		<div class="mob-nav-close"></div>
		<div class="clear"></div>
	</div>
</header>
<?php wp_nav_menu(array('menu' => 14)); ?>
<a class="mob-nav-tel" href="tel:+380933657297">093 365-72-97</a>
</div>
<?php
/**
 * Чистый Шаблон для разработки
 * Шаблон футера
 * http://dontforget.pro
 * @package WordPress
 * @subpackage clean
 */

	wp_footer(); // Необходимо для нормальной работы плагинов
?>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-30203618-1', 'auto');
  ga('send', 'pageview');

</script>
</body>
</html>