<?php
/**
 * The page template.
 *
 * @package WordPress
 * @subpackage Mi
 * @since Mi 1.0
 */
?>

  <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <?php the_post_thumbnail(); ?>
    <h1 class="entry-title"><?php if( !is_single() ) echo "<a href=\"" . ( get_permalink() ) . "\">"; ?><?php the_title(); ?><?php if( !is_single() ) echo "</a>"; ?></h1>
    <div class="post-content">
      <?php the_content(''); ?>
      <?php wp_link_pages(); ?>
    </div>
  </article>