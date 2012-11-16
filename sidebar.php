<?php
/**
 * The sidebar template holds default widgets and a dynamic sidebar.
 *
 * @package WordPress
 * @subpackage Mi
 * @since Mi 1.0
 */
?>

<aside id="sidebar" class="clearfix">
  <ul class="widgets">
  <?php if( !dynamic_sidebar() ): ?>
    <li>
    <?php the_widget('WP_Widget_Meta'); ?>
    </li>
    <li>
      <?php the_widget('WP_Widget_Recent_Comments'); ?>
    </li>
    <li>
      <?php the_widget('WP_Widget_Pages'); ?>
    </li>
  <?php endif; ?>
  </ul>
</aside><!--/#sidebar-->