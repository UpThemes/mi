<?php
/**
 * The quote template.
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
    </div>
  </article>