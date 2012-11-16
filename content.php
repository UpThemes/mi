<?php
/**
 * The default template for displaying content. Used for both single and index/archive/search.
 *
 * @package WordPress
 * @subpackage Mi
 * @since Mi 1.0
 */
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  <?php if( !is_singular() ) echo "<a href='" . get_permalink() . "'>"; ?>
    <?php the_post_thumbnail(); ?>
  <?php if( !is_singular() ) echo '</a>'; ?>
  <h1 class="entry-title"><?php if( !is_single() ) echo "<a href=\"" . ( get_permalink() ) . "\">"; ?><?php the_title(); ?><?php if( !is_single() ) echo "</a>"; ?></h1>
  <div class="post-content">
    <?php the_content(''); ?>
    <?php wp_link_pages(); ?>
  </div>
  <div class="post-meta">
    <?php $time = get_the_date(get_option('date_format')) . " at " . get_the_time(get_option('time_format')); ?>
    <?php $author = get_the_author_link(); ?>
    <?php echo sprintf( __('Posted on %s by %s'), $time, $author ); ?> &nbsp;&bull;&nbsp; 
    <?php the_category(', '); ?>
    <?php the_tags( __(' &nbsp;&bull;&nbsp; Tags: ','mi') ); ?>
  </div>
</article>