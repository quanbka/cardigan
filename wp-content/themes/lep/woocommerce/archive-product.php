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



<main class="mainContent-theme ">

	<div id="collection" class="collection-page">

		<div class="breadcrumb-shop">
			<div class="container-fluid">
				<div class="row">
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pd5  ">
						<?php // do_action( 'woocommerce_before_main_content' ); ?>
						<ol class="breadcrumb breadcrumb-arrows" itemscope itemtype="http://schema.org/BreadcrumbList">
							<li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
								<a href="/" target="_self" itemprop="item"><span itemprop="name">Trang chủ</span></a>
								<meta itemprop="position" content="1" />
							</li>

							<li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
								<a href="/collections" target="_self" itemprop="item">
									<span itemprop="name">Danh mục</span>
								</a>
								<meta itemprop="position" content="2" />
							</li>


							<li class="active" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
								<span itemprop="item" content="https://lep.vn/collections/hot-products"><span itemprop="name">Sản phẩm mới</span></span>
								<meta itemprop="position" content="3" />
							</li>



						</ol>
					</div>
				</div>
			</div>
		</div>

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
										do_action( 'woocommerce_after_shop_loop' );
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
								<div class="sortpagibar pagi clearfix text-center">
									<div id="pagination" class="clearfix">

										<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">




											<span class="page-node current">1</span>



											<a class="page-node" href="/collections/hot-products?page=2">2</a>



											<a class="page-node" href="/collections/hot-products?page=3">3</a>




											<a class="next" href="/collections/hot-products?page=2">
												<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 31 10" style="enable-background:new 0 0 31 10; width: 31px; height: 10px;" xml:space="preserve">
													<polygon points="31,5 25,0 25,4 0,4 0,6 25,6 25,10 "></polygon>
												</svg> </a>

										</div>


									</div>
								</div>
							</div>

						</div>
					</div>
				</div>
			</div>
		</div>

		<input type="text" class="hidden" id="coll-handle" value="(collectionid:product=1002423532)" />
	</div>
	<script>
		Haravan.queryParams = {};
		if (location.search.length) {
			for (var aKeyValue, i = 0, aCouples = location.search.substr(1).split('&'); i < aCouples.length; i++) {
				aKeyValue = aCouples[i].split('=');
				if (aKeyValue.length > 1) {
					Haravan.queryParams[decodeURIComponent(aKeyValue[0])] = decodeURIComponent(aKeyValue[1]);
				}
			}
		}
		var collFilters = jQuery('.coll-filter');
		collFilters.change(function() {
			var newTags = [];
			var newURL = '';
			delete Haravan.queryParams.page;
			collFilters.each(function() {
				if (jQuery(this).val()) {
					newTags.push(jQuery(this).val());
				}
			});

			newURL = '/collections/' + 'hot-products';
			if (newTags.length) {
				newURL += '/' + newTags.join('+');
			}
			var search = jQuery.param(Haravan.queryParams);
			if (search.length) {
				newURL += '?' + search;
			}
			location.href = newURL;

		});
		jQuery('.sort-by')
			.val('manual')
			.bind('change', function() {
				Haravan.queryParams.sort_by = jQuery(this).val();
				location.search = jQuery.param(Haravan.queryParams);
			});
	</script>




</main>


<?php

get_footer( 'shop' );
