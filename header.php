<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>" />
  <title><?php wp_title(); ?></title>
  <link rel="profile" href="http://gmpg.org/xfn/11" />
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
  <?php wp_head(); ?>
</head>
<body>
<div class="wrapper">
<header>
  <a href="<?php echo bloginfo( 'url' ); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/logo.png"></a>
</header>