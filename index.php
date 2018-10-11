<?php
/**
 * Чистый Шаблон для разработки
 * Шаблон главной страницы
 * http://dontforget.pro
 * @package WordPress
 * @subpackage clean
 */
 
if (is_mobile()) {
  get_header('m');
  include 'index-mob.php';
  get_footer('m');
} else {
  get_header();
  include 'index-desktop.php';
  get_footer();
}?> 