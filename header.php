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
<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Oranienbaum&amp;subset=cyrillic" rel="stylesheet">

<link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/images/icon.png" />

<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/style.css">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js" type="text/javascript" ></script>
<script src="<?php bloginfo('template_url');?>/js/plugins.js" type="text/javascript"></script>
<script src="<?php bloginfo('template_url');?>/js/slides.js" type="text/javascript"></script>
<script src="http://cdn.jsdelivr.net/vivus/latest/vivus.min.js"></script> 
<script src="<?php bloginfo('template_url');?>/js/jquery.flexslider-min.js" type="text/javascript"></script>
<script src="<?php bloginfo('template_url');?>/js/openapi.js" type="text/javascript"></script>
<script src="<?php bloginfo('template_url');?>/js/common.js" type="text/javascript"></script>





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
<body <?php body_class('slides animated cards smooth  animated stage-2'); ?>>

<?php get_template_part('inc/svg-sprite' ); ?>
