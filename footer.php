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
            "theme_location" => "footer",
            "depth" => 1,
            "container"  => "nav",
            "container_id" => "footer-nav"
          )); ?>
  </footer><!--/#footer-->
<?php wp_footer(); ?>
</body>
</html>