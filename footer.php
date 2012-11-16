<?php
/**
 * The footer template which holds the lone sidebar and two areas
 * for customizable footer text.
 *
 * @package WordPress
 * @subpackage Mi
 * @since Mi 1.0
 */
?>
  </div><!--/#wrapper-->

  <footer id="footer">
    <?php wp_nav_menu(array(
            "theme_location" => "secondary",
            "depth" => 1,
            "container"  => "nav",
            "container_id" => "secondary-nav"
          )); ?>
  </footer><!--/#footer-->
<?php wp_footer(); ?>
</body>
</html>