<?php 
 
@include "_local_location.php";
defined('SITE_ROOT')    ? null : define('SITE_ROOT', "...");
 
defined('THEME_PATH')   ? null : define('THEME_PATH', SITE_ROOT."/wp-content/themes/wp-skeleton-theme");
defined('LIB_PATH')     ? null : define('LIB_PATH', THEME_PATH."/functions/lib");
defined('HOME_URI')     ? null : define('HOME_URI', get_bloginfo('url'));
defined('THEME_URI')    ? null : define('THEME_URI', get_stylesheet_directory_uri());
defined('THEME_CSS')    ? null : define('THEME_CSS', THEME_URI . '/css');
defined('THEME_IMAGES') ? null : define('THEME_IMAGES', THEME_URI . '/images');
defined('THEME_JS')     ? null : define('THEME_JS', THEME_URI . '/js');
defined('THEME_FONTS')  ? null : define('THEME_FONTS', THEME_URI . '/fonts');