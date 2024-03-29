<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Mi
 * @since Mi 1.0
 */
?>

<?php get_header(); ?>

<?php if( have_posts() ): while( have_posts() ): the_post(); ?>

<?php get_template_part( 'content', get_post_format() ); ?>

<?php endwhile; ?>

<?php else: ?>

<?php get_template_part( 'content', 'none' ); ?>

<?php endif; ?>

<?php mi_content_nav('index'); ?>

<?php get_sidebar(); ?>
<?php get_footer(); ?>