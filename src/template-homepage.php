<?php
/**
 * The template for displaying the homepage.
 *
 * This page template will display any functions hooked into the `homepage` action.
 * By default this includes a variety of product displays and the page content itself. To change the order or toggle these components
 * use the Homepage Control plugin.
 * https://wordpress.org/plugins/homepage-control/
 *
 * Template name: Homepage
 *
 * @package storefront
 */

get_header(); ?>

	<section class="rotate">
		<div class="flexslider principal">
			<ul class="slides">
				<li><img src="<?php bloginfo('stylesheet_directory'); ?>/images/banner-mercadopago.jpg"></li>
				<li><img src="<?php bloginfo('stylesheet_directory'); ?>/images/banner-zoom.jpg"></li>
				<li><img src="<?php bloginfo('stylesheet_directory'); ?>/images/banner-hoffman.jpg"></li>
			</ul>
		</div>
	</section>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php
			/**
			 *
			 * Functions hooked in to homepage action
			 * @hooked storefront_recent_products - 30
			 * @hooked storefront_on_sale_products - 60
			 * @hooked storefront_best_selling_products - 70
			 */
			do_action( 'homepage' ); ?>

		</main><!-- #main -->
	</div><!-- #primary -->
<?php
get_footer();
