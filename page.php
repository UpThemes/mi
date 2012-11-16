<?php
/**
 * The Template for displaying all pages.
 *
 * @package WordPress
 * @subpackage Mi
 * @since Mi 1.0
 */
?>

<?php get_header(); ?>

<?php if( have_posts() ): while( have_posts() ): the_post(); ?>

<?php get_template_part( 'content', 'page' ); ?>

<?php endwhile; ?>

<?php else: ?>

<?php get_template_part( 'content', 'none' ); ?>

<?php endif; ?>

<?php get_sidebar(); ?>
<?php get_footer(); ?>