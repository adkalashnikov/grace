<?php
/**
 * Чистый Шаблон для разработки
 * Шаблон хэдера
 * http://dontforget.pro
 * @package WordPress
 * @subpackage clean
 */
?>
<!DOCTYPE html>
<html lang="ru">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta charset="UTF-8">
<meta name= "viewport" content= "width=device-width, initial-scale=1.0" >
<link href='https://fonts.googleapis.com/css?family=Open+Sans:300,400,700&subset=latin,cyrillic' rel='stylesheet' type='text/css'>
<link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/images/icon.png" />

<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/style-mob.css">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js" type="text/javascript" ></script>
<script src="http://cdn.jsdelivr.net/vivus/latest/vivus.min.js"></script> 
<script src="<?php bloginfo('template_url');?>/js/jquery.flexslider-min.js" type="text/javascript"></script>
<script src="<?php bloginfo('template_url');?>/js/openapi.js" type="text/javascript"></script>
<script src="<?php bloginfo('template_url');?>/js/common-m.js" type="text/javascript"></script>





 <script type="text/javascript">
      VK.init({apiId: 4632736, onlyWidgets: true});
    </script> 
 <!--[if lt IE 9]>
 <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
 <![endif]-->
<title>
<?php // Генерируем тайтл в зависимости от контента с разделителем " | "
	global $page, $paged;
	wp_title( '|', true, 'right' );
	bloginfo( 'name' );
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		echo " | $site_description";
	if ( $paged >= 2 || $page >= 2 )
		echo ' | ' . sprintf( __( 'Page %s', 'twentyten' ), max( $paged, $page ) );
?>
</title>
<?php
	wp_head(); // Необходимо для работы плагинов и функционала wp
?>
</head>
<body <?php body_class(); ?>>

<header class="header-m">
	<div class="container-m">
		<div class="hm-soc">
			<a href="http://www.odnoklassniki.ru/profile/249373513305" class="ok" target="_blank"></a>
      <a href="https://vk.com/gracestudio_com_ua" class="vk" target="_blank"></a>
		</div>
		<div class="logo"><a href="<?php echo home_url(); ?>"></a></div>
		<div class="nav-btn"></div>
		<div class="clear"></div>
	</div>
</header>