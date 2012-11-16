<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and website header
 *
 * @package Mi
 * @since Mi 1.0
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php wp_title(); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

<?php if ( is_singular() ) wp_enqueue_script( "comment-reply" ); ?>

<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
  <div id="wrapper">

    <header id="masthead"<?php mi_get_header_image(); ?>>

      <div class="site-info">
        <div id="site-title"><a href="http://solo"><?php bloginfo('title'); ?></a></div>
        <div id="site-description"><?php bloginfo('description'); ?></div>
      </div>

      <?php wp_nav_menu(array(
              "theme_location" => "primary",
              "depth" => 1,
              "container"  => "nav",
              "container_id" => "primary-nav"
            )); ?>

    </header>