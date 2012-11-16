<?php

/*
* Mi functions and definitions
*
* Sets up the theme and provides some helper functions. Some helper functions
* are used in the theme as custom template tags. Others are attached to action and
* filter hooks in WordPress to change core functionality.
*
* The first function, mi_setup(), sets up the theme by registering support
* for various features in WordPress, such as a custom background and a navigation menu.
*
* When using a child theme (see http://codex.wordpress.org/Theme_Development and
* http://codex.wordpress.org/Child_Themes), you can override certain functions
* (those wrapped in a function_exists() call) by defining them first in your child theme's
* functions.php file. The child theme's functions.php file is included before the parent
* theme's file, so the child theme functions would be used.
*
* Functions that are not pluggable (not wrapped in function_exists()) are instead attached
* to a filter or action hook.
*
* For more information on hooks, actions, and filters, see http://codex.wordpress.org/Plugin_API.
*
* @package WordPress
* @subpackage Mi
* @since Mi 1.0
*/

include('inc/custom-header.php');

/**
 * Set the content width based on the theme's design and stylesheet.
 */
if ( ! isset( $content_width ) )
	$content_width = 1120;

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * @uses load_theme_textdomain() For translation/localization support.
 * @uses add_theme_support() To add support for post thumbnails, automatic feed links, custom headers
 * 	and backgrounds, and post formats.
 * @uses register_nav_menu() To add support for navigation menus.
 * @uses set_post_thumbnail_size() To set a custom post thumbnail size.
 *
 * @since UpThemes 1.0
 */
function mi_setup() {

  add_theme_support( 'nav-menus' );
  
  add_theme_support( 'automatic-feed-links' );

	load_theme_textdomain( 'mi', get_stylesheet_directory() . '/languages' );

	$locale = get_locale();
	$locale_file = get_stylesheet_directory() . "/languages/$locale.php";
	if ( is_readable( $locale_file ) )
		require_once( $locale_file );

	// Add default posts and comments RSS feed links to <head>.
	add_theme_support( 'automatic-feed-links' );

	// This theme uses wp_nav_menu() in one location.
  if( function_exists('register_nav_menu') )
  	register_nav_menu( 'primary', __( 'Primary Menu','mi' ) );

	// Add support for a variety of post formats
	add_theme_support( 'post-formats', array( 'video', 'aside', 'link', 'gallery', 'status', 'quote', 'image' ) );

  register_sidebar();

	// This theme uses Featured Images (also known as post thumbnails) for per-post/per-page Custom Header images
	add_theme_support( 'post-thumbnails' );

}

add_action( 'after_setup_theme', 'mi_setup' );

function mi_get_header_image(){
  if( get_header_image() ):
    echo ' style="background-image:url('.get_header_image().'); color: white;"';
  else:
    echo '';
  endif;
}

if ( ! function_exists( 'mi_content_nav' ) ) :
/**
 * Displays navigation to next/previous pages when applicable.
 *
 * @since Mi 1.0
 */
function mi_content_nav( $nav_id ) {
	global $wp_query;

	if ( $wp_query->max_num_pages > 1 ) : ?>
		<nav id="<?php echo $nav_id; ?>" class="navigation" role="navigation">
			<h3 class="assistive-text"><?php _e( 'Post navigation', 'mi' ); ?></h3>
			<div class="nav-previous alignleft"><?php next_posts_link( __( '<span class="meta-nav">&larr;</span> Older posts', 'mi' ) ); ?></div>
			<div class="nav-next alignright"><?php previous_posts_link( __( 'Newer posts <span class="meta-nav">&rarr;</span>', 'mi' ) ); ?></div>
		</nav><!-- #<?php echo $nav_id; ?> .navigation -->
	<?php endif;
}
endif;

if ( ! function_exists( 'mi_post_nav' ) ) :
/**
 * Displays navigation to next/previous page when applicable.
 *
 * @since Mi 1.0
 */
function mi_post_nav() {

	if ( is_single() ) : ?>
		<nav id="single" class="navigation" role="navigation">
			<h3 class="assistive-text"><?php _e( 'Post navigation', 'mi' ); ?></h3>
			<div class="nav-previous alignleft"><?php next_post_link("%link","&larr; %title",''); ?></div>
			<div class="nav-next alignright"><?php previous_post_link("%link","%title &rarr;",''); ?></div>
		</nav><!-- #<?php echo $nav_id; ?> .navigation -->
	<?php endif;
}
endif;

function mi_enqueue_scripts(){
  wp_enqueue_script('view', get_template_directory_uri() . "/assets/js/view.js?auto", array('jquery') );
  wp_enqueue_script('fitvids', get_template_directory_uri() . "/assets/js/fitvids.js", array('jquery') );
  wp_enqueue_script('fittext', get_template_directory_uri() . "/assets/js/fittext.js", array('jquery') );
  wp_enqueue_script('main', get_template_directory_uri() . "/assets/js/main.js", array('view','fitvids','fittext') );
  wp_enqueue_style('style', get_template_directory_uri() . "/style.css", false );
}

add_action('wp_enqueue_scripts','mi_enqueue_scripts',9999);

function mi_post_navigation(){
?>
<div class="navigation">
  <?php posts_nav_link('&#8734;','&larr; Newer','Older &rarr;'); ?>
</div>
<?php
}