<?php
/**
 * The link template.
 *
 * @package WordPress
 * @subpackage Mi
 * @since Mi 1.0
 */
?>
  
  <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <div class="post-content clearfix">
      <?php the_content(''); ?>
      <?php wp_link_pages(); ?>
    </div>
  </article>