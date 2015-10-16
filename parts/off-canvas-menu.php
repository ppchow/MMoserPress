<?php
/**
 * Template part for off canvas menu
 *
 * @package WordPress
 * @subpackage FoundationPress
 * @since FoundationPress 1.0.0
 */

?>

<nav class="tab-bar">
  <section class="<?php echo apply_filters( 'filter_mobile_nav_position', 'mobile_nav_position' ); ?>-small">
    <a class="<?php echo apply_filters( 'filter_mobile_nav_position', 'mobile_nav_position' ); ?>-off-canvas-toggle menu-icon" href="#"><span></span></a>
  </section>
  <section class="middle tab-bar-section">

    <div class="title">
    	<a href="<?php echo get_site_url(); ?>">
      		<h1><?php bloginfo( 'name' ); ?></h1>
      		<span><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/icons/favicon-16x16.png"></span>
    	</a>
    </div>

  </section>
</nav>

<aside class="<?php echo apply_filters( 'filter_mobile_nav_position', 'mobile_nav_position' ); ?>-off-canvas-menu" aria-hidden="true">
    <?php foundationpress_mobile_off_canvas( apply_filters('filter_mobile_nav_position', 'mobile_nav_position') ); ?>
</aside>
