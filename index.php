<?php
// die;
if (strpos($_SERVER['REQUEST_URI'], 'css')
  || strpos($_SERVER['REQUEST_URI'], 'js')
  || strpos($_SERVER['REQUEST_URI'], 'jpeg')
  || strpos($_SERVER['REQUEST_URI'], 'jpg')
  || strpos($_SERVER['REQUEST_URI'], 'png')
  || strpos($_SERVER['REQUEST_URI'], 'woff')
  || strpos($_SERVER['REQUEST_URI'], 'woff2')
) {
  $actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://{$_SERVER['HTTP_HOST']}{$_SERVER['REQUEST_URI']}";
  $origin_link = str_replace( '//cardigan.test', '//theme.hstatic.net', "$actual_link");
  $origin_link = preg_replace("/\?(.*)/", "", $origin_link);
  // print_r($actual_link);
  // print_r($origin_link);
  // print_r(( $_SERVER['REQUEST_URI'] ));
  $array = (explode("/", $_SERVER['REQUEST_URI']));
  unset($array[count($array) - 1]);
  $path = join("/", $array);
  $path = ltrim( $path, "/");
  echo ("mkdir -p '$path'");
  echo exec("mkdir -p '$path'");
  chdir($path);
  echo getcwd() . "\n";
  echo exec("wget '$origin_link'");
  die;
}


?>

<?php
/**
 * Front to the WordPress application. This file doesn't do anything, but loads
 * wp-blog-header.php which does and tells WordPress to load the theme.
 *
 * @package WordPress
 */

/**
 * Tells WordPress to load the WordPress theme and output it.
 *
 * @var bool
 */
define( 'WP_USE_THEMES', true );

/** Loads the WordPress Environment and Template */
require __DIR__ . '/wp-blog-header.php';
