<?php
 	/**
 * The Template for displaying product archives, including the main shop page which is a post type archive
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/archive-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.4.0
 */

defined( 'ABSPATH' ) || exit;

get_header( 'shop' );
//do_action( 'woocommerce_before_main_content' );

?>



<?php
	/**
	 * woocommerce_before_main_content hook.
	 *
	 * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
	 * @hooked woocommerce_breadcrumb - 20
	 */
	do_action( 'woocommerce_before_main_content' );
?>


		<div class="main-content ">
			<div class="container-fluid">
				<div class="row">
					<div id="collection-body" class="wrap-collection-body clearfix">


						<div class="col-md-3 col-sm-12 col-xs-12 sidebar-fix">
							<?php do_action( 'woocommerce_sidebar' ); ?>
						</div>

						<div class="col-md-9 col-sm-12 col-xs-12">
							<div class="wrap-collection-title row">
								<div class="heading-collection row">
									<div class="col-md-8 col-sm-12 col-xs-12">
										<?php if ( apply_filters( 'woocommerce_show_page_title', true ) ) : ?>
										<h1 class="woocommerce-products-header__title page-title"><?php woocommerce_page_title(); ?></h1>
										<?php endif; ?>

										<div class="alert-no-filter"></div>

										<?php do_action( 'woocommerce_archive_description' ); ?>

									</div>
									<div class="col-md-4 hidden-sm hidden-xs">
										<?php woocommerce_catalog_ordering(); ?>
									</div>





								</div>
							</div>

							<div class="row filter-here">
								<div class="content-product-list product-list filter clearfix">
									<?php

									if ( woocommerce_product_loop() ) {

										/**
										 * Hook: woocommerce_before_shop_loop.
										 *
										 * @hooked woocommerce_output_all_notices - 10
										 * @hooked woocommerce_result_count - 20
										 * @hooked woocommerce_catalog_ordering - 30
										 */
										// woocommerce_catalog_ordering();
										// do_action( 'woocommerce_before_shop_loop' );

										woocommerce_product_loop_start();

										if ( wc_get_loop_prop( 'total' ) ) {
											while ( have_posts() ) {
												the_post();

												/**
												 * Hook: woocommerce_shop_loop.
												 */
												do_action( 'woocommerce_shop_loop' );

												wc_get_template_part( 'content', 'product' );
											}
										}

										woocommerce_product_loop_end();

										/**
										 * Hook: woocommerce_after_shop_loop.
										 *
										 * @hooked woocommerce_pagination - 10
										 */
										// do_action( 'woocommerce_after_shop_loop' );
									} else {
										/**
										 * Hook: woocommerce_no_products_found.
										 *
										 * @hooked wc_no_products_found - 10
										 */
										do_action( 'woocommerce_no_products_found' );
									}
									?>

								</div>
								<?php  do_action( 'woocommerce_after_shop_loop' ); ?>

							</div>

						</div>
					</div>
				</div>
			</div>
		</div>

	</div>

</main>

<?php

get_footer( 'shop' );
