<?php
/**
 * The Template for displaying all single products
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see         https://docs.woocommerce.com/document/template-structure/
 * @package     WooCommerce\Templates
 * @version     1.6.4
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

get_header( 'shop' ); ?>



<main class="mainContent-theme ">

	<div id="product" class="productDetail-page">
		<div class="breadcrumb-shop">
			<div class="container-fluid">
				<div class="row">
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pd5  ">
						<ol class="breadcrumb breadcrumb-arrows" itemscope itemtype="http://schema.org/BreadcrumbList">
							<li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
								<a href="/" target="_self" itemprop="item"><span itemprop="name">Trang chủ</span></a>
								<meta itemprop="position" content="1" />
							</li>



							<li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
								<a href="https://lep.vn/collections/ta-t-ca-sa-n-pha-m" target="_self" itemprop="item">
									<span itemprop="name">Tất cả sản phẩm</span>
								</a>
								<meta itemprop="position" content="2" />
							</li>

							<li class="active" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
								<span itemprop="item" content="https://lep.vn/products/vay-cup-nguc-dan-lung-1va1078va">
									<span itemprop="name">Barley Dress 1VA1078VA</span>
								</span>
								<meta itemprop="position" content="3" />
							</li>

						</ol>
					</div>
				</div>
			</div>
		</div>
		<div class="product-detail-wrapper">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-12 col-sm-12 col-xs-12">
						<div class="row product-detail-main pr_style_03">
							<div class="col-md-5 col-sm-12 col-xs-12 product-content-img">


								<div class="product-gallery">
									<div class="product-gallery__thumbs-container hidden-sm hidden-xs">
										<div class="product-gallery__thumbs thumb-fix">

											<div class="product-gallery__thumb active">
												<a class="product-gallery__thumb-placeholder" href="javascript:" data-image="//product.hstatic.net/200000258383/product/dsc06571_96c06c71b46b432492c46e350616e47c_master.jpg"
													data-zoom-image="//product.hstatic.net/200000258383/product/dsc06571_96c06c71b46b432492c46e350616e47c_master.jpg">
													<img alt=" Barley Dress 1VA1078VA " data-image="//product.hstatic.net/200000258383/product/dsc06571_96c06c71b46b432492c46e350616e47c_master.jpg"
														src="//product.hstatic.net/200000258383/product/dsc06571_96c06c71b46b432492c46e350616e47c_compact.jpg">
												</a>
											</div>

											<div class="product-gallery__thumb ">
												<a class="product-gallery__thumb-placeholder" href="javascript:" data-image="//product.hstatic.net/200000258383/product/dsc06603_b65b6300fb5744f688498c51d1eeca54_master.jpg"
													data-zoom-image="//product.hstatic.net/200000258383/product/dsc06603_b65b6300fb5744f688498c51d1eeca54_master.jpg">
													<img alt=" Barley Dress 1VA1078VA " data-image="//product.hstatic.net/200000258383/product/dsc06603_b65b6300fb5744f688498c51d1eeca54_master.jpg"
														src="//product.hstatic.net/200000258383/product/dsc06603_b65b6300fb5744f688498c51d1eeca54_compact.jpg">
												</a>
											</div>

											<div class="product-gallery__thumb ">
												<a class="product-gallery__thumb-placeholder" href="javascript:" data-image="//product.hstatic.net/200000258383/product/dsc06707_fb33457d6de54ef1bf281dfc0f81952d_master.jpg"
													data-zoom-image="//product.hstatic.net/200000258383/product/dsc06707_fb33457d6de54ef1bf281dfc0f81952d_master.jpg">
													<img alt=" Barley Dress 1VA1078VA " data-image="//product.hstatic.net/200000258383/product/dsc06707_fb33457d6de54ef1bf281dfc0f81952d_master.jpg"
														src="//product.hstatic.net/200000258383/product/dsc06707_fb33457d6de54ef1bf281dfc0f81952d_compact.jpg">
												</a>
											</div>

											<div class="product-gallery__thumb ">
												<a class="product-gallery__thumb-placeholder" href="javascript:" data-image="//product.hstatic.net/200000258383/product/dsc06773_abe4f92adfbb49deb8364fd5b4d89311_master.jpg"
													data-zoom-image="//product.hstatic.net/200000258383/product/dsc06773_abe4f92adfbb49deb8364fd5b4d89311_master.jpg">
													<img alt=" Barley Dress 1VA1078VA " data-image="//product.hstatic.net/200000258383/product/dsc06773_abe4f92adfbb49deb8364fd5b4d89311_master.jpg"
														src="//product.hstatic.net/200000258383/product/dsc06773_abe4f92adfbb49deb8364fd5b4d89311_compact.jpg">
												</a>
											</div>

										</div>
									</div>
									<div class="product-image-detail box__product-gallery scroll">
										<ul id="sliderproduct" class="site-box-content slide_product clearfix hidden-lg hidden-md">

											<li class="product-gallery-item gallery-item">
												<img class="product-image-feature" src="//product.hstatic.net/200000258383/product/dsc06571_96c06c71b46b432492c46e350616e47c_master.jpg" alt=" Barley Dress 1VA1078VA ">
											</li>

											<li class="product-gallery-item gallery-item">
												<img class="product-image-feature" src="//product.hstatic.net/200000258383/product/dsc06603_b65b6300fb5744f688498c51d1eeca54_master.jpg" alt=" Barley Dress 1VA1078VA ">
											</li>

											<li class="product-gallery-item gallery-item">
												<img class="product-image-feature" src="//product.hstatic.net/200000258383/product/dsc06707_fb33457d6de54ef1bf281dfc0f81952d_master.jpg" alt=" Barley Dress 1VA1078VA ">
											</li>

											<li class="product-gallery-item gallery-item">
												<img class="product-image-feature" src="//product.hstatic.net/200000258383/product/dsc06773_abe4f92adfbb49deb8364fd5b4d89311_master.jpg" alt=" Barley Dress 1VA1078VA ">
											</li>

										</ul>
										<div class="hidden-sm hidden-xs">
											<img class="product-image-feature" src="//product.hstatic.net/200000258383/product/dsc06571_96c06c71b46b432492c46e350616e47c_master.jpg" alt=" Barley Dress 1VA1078VA ">
										</div>
										<div class="product-image__button">
											<div id="product-zoom-in" class="product-zoom icon-pr-fix " aria-label="Zoom in" title="Zoom in">
												<span class="zoom-in" aria-hidden="true">
													<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 36 36" style="enable-background:new 0 0 36 36; width: 30px; height: 30px;" xml:space="preserve">
														<polyline points="6,14 9,11 14,16 16,14 11,9 14,6 6,6 " />
														<polyline points="22,6 25,9 20,14 22,16 27,11 30,14 30,6 " />
														<polyline points="30,22 27,25 22,20 20,22 25,27 22,30 30,30 " />
														<polyline points="14,30 11,27 16,22 14,20 9,25 6,22 6,30 " />
													</svg>
												</span>
											</div>
										</div>
									</div>
								</div>


							</div>
							<div class="col-md-7 col-sm-12 col-xs-12 product-content-desc" id="detail-product">
								<div class="product-title">
									<h1>Barley Dress 1VA1078VA</h1>

									<span id="pro_sku"><strong>SKU:</strong>1VA1078VAS</span>


								</div>
								<div class="product-price" id="price-preview">

									<span class="pro-price">750,000₫</span>

								</div>


								<form id="add-item-form" action="/cart/add" method="post" class="variants clearfix">
									<div class="select clearfix">
										<select id="product-select" name="id" style="display:none;">

											<option value="1070485094">S - 750,000₫</option>

											<option value="1070485095">M - 750,000₫</option>

											<option value="1070485096">L - 750,000₫</option>

										</select>
									</div>
									<div class="select-swatch clearfix">










										<div id="variant-swatch-0" class="swatch clearfix" data-option="option1" data-option-index="0">
											<div class="header hide">SIZE:</div>

											<div class="select-swap">










												<div data-value="S" class="n-sd swatch-element s  ">
													<input class="variant-0" id="swatch-0-s" type="radio" name="option1" value="S" data-vhandle="s" checked />

													<label for="swatch-0-s">
														<span>S</span>
													</label>

												</div>










												<div data-value="M" class="n-sd swatch-element m  ">
													<input class="variant-0" id="swatch-0-m" type="radio" name="option1" value="M" data-vhandle="m" />

													<label for="swatch-0-m">
														<span>M</span>
													</label>

												</div>










												<div data-value="L" class="n-sd swatch-element l  ">
													<input class="variant-0" id="swatch-0-l" type="radio" name="option1" value="L" data-vhandle="l" />

													<label for="swatch-0-l">
														<span>L</span>
													</label>

												</div>


											</div>
										</div>





									</div>
									<div class="selector-actions">

										<div class="quantity-area clearfix">
											<input type="button" value="-" onclick="minusQuantity()" class="qty-btn">
											<input type="text" id="quantity" name="quantity" value="1" min="1" class="quantity-selector">
											<input type="button" value="+" onclick="plusQuantity()" class="qty-btn">
										</div>
										<div class="wrap-addcart clearfix">
											<button type="button" id="add-to-cart" class=" add-to-cartProduct button dark btn-addtocart addtocart-modal " name="add">
												Thêm vào giỏ
											</button>
											<button type="button" id="buy-now" class=" add-to-cartProduct button dark btn-addtocart addtocart-modal hidden " name="add">
												Mua ngay
											</button>
										</div>
									</div>


									<div class="product-action-bottom visible-xs">
										<div class="input-bottom">
											<input id="quan-input" type="number" value="1" min="1">
										</div>
										<button type="button" id="add-to-cartbottom" class=" add-to-cartProduct add-cart-bottom button dark addtocart-modal" name="add">
											Thêm vào giỏ
										</button>
									</div>
								</form>
								<div class="product-description">
									<div class="title-bl">
										<h2>Mô tả</h2>
									</div>
									<div class="description-content">
										<div class="description-productdetail">

										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="list-productRelated clearfix">
							<div class="heading-title text-center">
								<h2>Có thể nàng sẽ thích</h2>
							</div>








							<div class="content-product-list row">









								<div class="col-md-4 col-sm-6 col-xs-6 pro-loop ">










									<div class="product-block product-resize ">
										<div class="product-img ">



											<a href="/products/1va882do-vay-cup-nguc-tung-do" title="1VA882DO Váy cúp ngực tùng đổ" class="image-resize ratiobox">
												<picture>
													<source media="(max-width: 480px)" data-srcset="//product.hstatic.net/200000258383/product/1va882do_b61fc8b56db446d693562aba1b83b26a_large.jpg"
														srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" />
													<source media="(min-width: 481px) and (max-width: 767px)" data-srcset="//product.hstatic.net/200000258383/product/1va882do_b61fc8b56db446d693562aba1b83b26a_large.jpg"
														srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" />
													<source media="(min-width: 768px)" data-srcset="//product.hstatic.net/200000258383/product/1va882do_b61fc8b56db446d693562aba1b83b26a_large.jpg"
														srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" />
													<img class="lazyload img-loop" data-sizes="auto" data-src="//product.hstatic.net/200000258383/product/1va882do_b61fc8b56db446d693562aba1b83b26a_large.jpg"
														data-lowsrc="//product.hstatic.net/200000258383/product/1va882do_b61fc8b56db446d693562aba1b83b26a_grande.jpg"
														src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" alt=" 1VA882DO Váy cúp ngực tùng đổ " />
												</picture>
												<picture>
													<source media="(max-width: 480px)" data-srcset="//product.hstatic.net/200000258383/product/1va882do_1_20da3dca0ed2490e9e1d2ceacc59a602_large.jpg"
														srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=">
													<source media="(min-width: 481px) and (max-width: 767px)" data-srcset="//product.hstatic.net/200000258383/product/1va882do_1_20da3dca0ed2490e9e1d2ceacc59a602_large.jpg"
														srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=">
													<source media="(min-width: 768px)" data-srcset="//product.hstatic.net/200000258383/product/1va882do_1_20da3dca0ed2490e9e1d2ceacc59a602_large.jpg"
														srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=">
													<img class="img-loop img-hover lazyload" data-src="//product.hstatic.net/200000258383/product/1va882do_1_20da3dca0ed2490e9e1d2ceacc59a602_large.jpg"
														src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" alt=" 1VA882DO Váy cúp ngực tùng đổ " />
												</picture>
											</a>
											<div class="button-add hidden">
												<button type="submit" title="Buy now" class="action" onclick="buy_now('1067926987')">Mua ngay<i class="fa fa-long-arrow-right"></i></button>
											</div>
											<div class="pro-price-mb">
												<span class="pro-price">750,000₫</span>

											</div>
										</div>
										<div class="product-detail clearfix">
											<div class="box-pro-detail">
												<h3 class="pro-name">
													<a href="/products/1va882do-vay-cup-nguc-tung-do" title="1VA882DO Váy cúp ngực tùng đổ">
														1VA882DO Váy cúp ngực tùng đổ
													</a>
												</h3>
												<div class="box-pro-prices">
													<p class="pro-price ">
														<span>750,000₫</span>

													</p>
												</div>
											</div>
										</div>
									</div>



								</div>






								<div class="col-md-4 col-sm-6 col-xs-6 pro-loop ">










									<div class="product-block product-resize ">
										<div class="product-img ">



											<a href="/products/ao-2-day-co-do-1ao050de" title="Áo 2 dây cổ đổ 1AO050DE" class="image-resize ratiobox">
												<picture>
													<source media="(max-width: 480px)" data-srcset="//product.hstatic.net/200000258383/product/126317531_3197059253734005_6838694540234474057_o_72f39ae82ed34b6eae399f3686861b4b_large.jpg"
														srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" />
													<source media="(min-width: 481px) and (max-width: 767px)" data-srcset="//product.hstatic.net/200000258383/product/126317531_3197059253734005_6838694540234474057_o_72f39ae82ed34b6eae399f3686861b4b_large.jpg"
														srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" />
													<source media="(min-width: 768px)" data-srcset="//product.hstatic.net/200000258383/product/126317531_3197059253734005_6838694540234474057_o_72f39ae82ed34b6eae399f3686861b4b_large.jpg"
														srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" />
													<img class="lazyload img-loop" data-sizes="auto" data-src="//product.hstatic.net/200000258383/product/126317531_3197059253734005_6838694540234474057_o_72f39ae82ed34b6eae399f3686861b4b_large.jpg"
														data-lowsrc="//product.hstatic.net/200000258383/product/126317531_3197059253734005_6838694540234474057_o_72f39ae82ed34b6eae399f3686861b4b_grande.jpg"
														src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" alt=" Áo 2 dây cổ đổ 1AO050DE " />
												</picture>
												<picture>
													<source media="(max-width: 480px)" data-srcset="//product.hstatic.net/200000258383/product/126901747_3197060663733864_6931155120587524770_o_ac908e3a8f3442ec8224e4007f0962fb_large.jpg"
														srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=">
													<source media="(min-width: 481px) and (max-width: 767px)" data-srcset="//product.hstatic.net/200000258383/product/126901747_3197060663733864_6931155120587524770_o_ac908e3a8f3442ec8224e4007f0962fb_large.jpg"
														srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=">
													<source media="(min-width: 768px)" data-srcset="//product.hstatic.net/200000258383/product/126901747_3197060663733864_6931155120587524770_o_ac908e3a8f3442ec8224e4007f0962fb_large.jpg"
														srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=">
													<img class="img-loop img-hover lazyload" data-src="//product.hstatic.net/200000258383/product/126901747_3197060663733864_6931155120587524770_o_ac908e3a8f3442ec8224e4007f0962fb_large.jpg"
														src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" alt=" Áo 2 dây cổ đổ 1AO050DE " />
												</picture>
											</a>
											<div class="button-add hidden">
												<button type="submit" title="Buy now" class="action" onclick="buy_now('1065054484')">Mua ngay<i class="fa fa-long-arrow-right"></i></button>
											</div>
											<div class="pro-price-mb">
												<span class="pro-price">395,000₫</span>

											</div>
										</div>
										<div class="product-detail clearfix">
											<div class="box-pro-detail">
												<h3 class="pro-name">
													<a href="/products/ao-2-day-co-do-1ao050de" title="Áo 2 dây cổ đổ 1AO050DE">
														Áo 2 dây cổ đổ 1AO050DE
													</a>
												</h3>
												<div class="box-pro-prices">
													<p class="pro-price ">
														<span>395,000₫</span>

													</p>
												</div>
											</div>
										</div>
									</div>



								</div>






								<div class="col-md-4 col-sm-6 col-xs-6 pro-loop ">










									<div class="product-block product-resize ">
										<div class="product-img ">



											<a href="/products/ao-tre-vai-bong-1ao076xt" title="Áo Athen Set 1AO076XT" class="image-resize ratiobox">
												<picture>
													<source media="(max-width: 480px)" data-srcset="//product.hstatic.net/200000258383/product/1ao076xt_9d458aa8f2ab4eb8958803617fe2ce6f_large.jpg"
														srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" />
													<source media="(min-width: 481px) and (max-width: 767px)" data-srcset="//product.hstatic.net/200000258383/product/1ao076xt_9d458aa8f2ab4eb8958803617fe2ce6f_large.jpg"
														srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" />
													<source media="(min-width: 768px)" data-srcset="//product.hstatic.net/200000258383/product/1ao076xt_9d458aa8f2ab4eb8958803617fe2ce6f_large.jpg"
														srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" />
													<img class="lazyload img-loop" data-sizes="auto" data-src="//product.hstatic.net/200000258383/product/1ao076xt_9d458aa8f2ab4eb8958803617fe2ce6f_large.jpg"
														data-lowsrc="//product.hstatic.net/200000258383/product/1ao076xt_9d458aa8f2ab4eb8958803617fe2ce6f_grande.jpg"
														src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" alt=" Áo Athen Set 1AO076XT " />
												</picture>
												<picture>
													<source media="(max-width: 480px)" data-srcset="//product.hstatic.net/200000258383/product/1ao076xt_1_40519738fca04184ae2c54e4038e52ec_large.jpg"
														srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=">
													<source media="(min-width: 481px) and (max-width: 767px)" data-srcset="//product.hstatic.net/200000258383/product/1ao076xt_1_40519738fca04184ae2c54e4038e52ec_large.jpg"
														srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=">
													<source media="(min-width: 768px)" data-srcset="//product.hstatic.net/200000258383/product/1ao076xt_1_40519738fca04184ae2c54e4038e52ec_large.jpg"
														srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=">
													<img class="img-loop img-hover lazyload" data-src="//product.hstatic.net/200000258383/product/1ao076xt_1_40519738fca04184ae2c54e4038e52ec_large.jpg"
														src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" alt=" Áo Athen Set 1AO076XT " />
												</picture>
											</a>
											<div class="button-add hidden">
												<button type="submit" title="Buy now" class="action" onclick="buy_now('1070526554')">Mua ngay<i class="fa fa-long-arrow-right"></i></button>
											</div>
											<div class="pro-price-mb">
												<span class="pro-price">950,000₫</span>

											</div>
										</div>
										<div class="product-detail clearfix">
											<div class="box-pro-detail">
												<h3 class="pro-name">
													<a href="/products/ao-tre-vai-bong-1ao076xt" title="Áo Athen Set 1AO076XT">
														Áo Athen Set 1AO076XT
													</a>
												</h3>
												<div class="box-pro-prices">
													<p class="pro-price ">
														<span>950,000₫</span>

													</p>
												</div>
											</div>
										</div>
									</div>



								</div>






								<div class="col-md-4 col-sm-6 col-xs-6 pro-loop ">










									<div class="product-block product-resize ">
										<div class="product-img ">



											<a href="/products/ao-khoac-vien-1ak011tr" title="Áo khoác viền 1AK011TR" class="image-resize ratiobox">
												<picture>
													<source media="(max-width: 480px)" data-srcset="//product.hstatic.net/200000258383/product/117629985_2899854156787851_3627425206337600515_o_1c412424cfad44c8852ad4682862ba93_large.jpg"
														srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" />
													<source media="(min-width: 481px) and (max-width: 767px)" data-srcset="//product.hstatic.net/200000258383/product/117629985_2899854156787851_3627425206337600515_o_1c412424cfad44c8852ad4682862ba93_large.jpg"
														srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" />
													<source media="(min-width: 768px)" data-srcset="//product.hstatic.net/200000258383/product/117629985_2899854156787851_3627425206337600515_o_1c412424cfad44c8852ad4682862ba93_large.jpg"
														srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" />
													<img class="lazyload img-loop" data-sizes="auto" data-src="//product.hstatic.net/200000258383/product/117629985_2899854156787851_3627425206337600515_o_1c412424cfad44c8852ad4682862ba93_large.jpg"
														data-lowsrc="//product.hstatic.net/200000258383/product/117629985_2899854156787851_3627425206337600515_o_1c412424cfad44c8852ad4682862ba93_grande.jpg"
														src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" alt=" Áo khoác viền 1AK011TR " />
												</picture>
												<picture>
													<source media="(max-width: 480px)" data-srcset="//product.hstatic.net/200000258383/product/117335426_2899856836787583_7404992549145630764_o_9e579e188fbb4278b46b9c1a20bbb4ba_large.jpg"
														srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=">
													<source media="(min-width: 481px) and (max-width: 767px)" data-srcset="//product.hstatic.net/200000258383/product/117335426_2899856836787583_7404992549145630764_o_9e579e188fbb4278b46b9c1a20bbb4ba_large.jpg"
														srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=">
													<source media="(min-width: 768px)" data-srcset="//product.hstatic.net/200000258383/product/117335426_2899856836787583_7404992549145630764_o_9e579e188fbb4278b46b9c1a20bbb4ba_large.jpg"
														srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=">
													<img class="img-loop img-hover lazyload" data-src="//product.hstatic.net/200000258383/product/117335426_2899856836787583_7404992549145630764_o_9e579e188fbb4278b46b9c1a20bbb4ba_large.jpg"
														src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" alt=" Áo khoác viền 1AK011TR " />
												</picture>
											</a>
											<div class="button-add hidden">
												<button type="submit" title="Buy now" class="action" onclick="buy_now('1065055553')">Mua ngay<i class="fa fa-long-arrow-right"></i></button>
											</div>
											<div class="pro-price-mb">
												<span class="pro-price">450,000₫</span>

											</div>
										</div>
										<div class="product-detail clearfix">
											<div class="box-pro-detail">
												<h3 class="pro-name">
													<a href="/products/ao-khoac-vien-1ak011tr" title="Áo khoác viền 1AK011TR">
														Áo khoác viền 1AK011TR
													</a>
												</h3>
												<div class="box-pro-prices">
													<p class="pro-price ">
														<span>450,000₫</span>

													</p>
												</div>
											</div>
										</div>
									</div>



								</div>






								<div class="col-md-4 col-sm-6 col-xs-6 pro-loop ">










									<div class="product-block product-resize ">
										<div class="product-img ">



											<a href="/products/ao-so-mi-tay-beo-1ao039tr" title="Áo sơ mi tay bèo 1AO039TR" class="image-resize ratiobox">
												<picture>
													<source media="(max-width: 480px)" data-srcset="//product.hstatic.net/200000258383/product/1ao039tr_c564d5f648434343abfb110e27c2d9fe_large.jpg"
														srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" />
													<source media="(min-width: 481px) and (max-width: 767px)" data-srcset="//product.hstatic.net/200000258383/product/1ao039tr_c564d5f648434343abfb110e27c2d9fe_large.jpg"
														srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" />
													<source media="(min-width: 768px)" data-srcset="//product.hstatic.net/200000258383/product/1ao039tr_c564d5f648434343abfb110e27c2d9fe_large.jpg"
														srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" />
													<img class="lazyload img-loop" data-sizes="auto" data-src="//product.hstatic.net/200000258383/product/1ao039tr_c564d5f648434343abfb110e27c2d9fe_large.jpg"
														data-lowsrc="//product.hstatic.net/200000258383/product/1ao039tr_c564d5f648434343abfb110e27c2d9fe_grande.jpg"
														src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" alt=" Áo sơ mi tay bèo 1AO039TR " />
												</picture>
												<picture>
													<source media="(max-width: 480px)" data-srcset="//product.hstatic.net/200000258383/product/1ao039tr_1_e74b0234f18e40fe875ef800031c931c_large.jpg"
														srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=">
													<source media="(min-width: 481px) and (max-width: 767px)" data-srcset="//product.hstatic.net/200000258383/product/1ao039tr_1_e74b0234f18e40fe875ef800031c931c_large.jpg"
														srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=">
													<source media="(min-width: 768px)" data-srcset="//product.hstatic.net/200000258383/product/1ao039tr_1_e74b0234f18e40fe875ef800031c931c_large.jpg"
														srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=">
													<img class="img-loop img-hover lazyload" data-src="//product.hstatic.net/200000258383/product/1ao039tr_1_e74b0234f18e40fe875ef800031c931c_large.jpg"
														src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" alt=" Áo sơ mi tay bèo 1AO039TR " />
												</picture>
											</a>
											<div class="button-add hidden">
												<button type="submit" title="Buy now" class="action" onclick="buy_now('1065055783')">Mua ngay<i class="fa fa-long-arrow-right"></i></button>
											</div>
											<div class="pro-price-mb">
												<span class="pro-price">695,000₫</span>

											</div>
										</div>
										<div class="product-detail clearfix">
											<div class="box-pro-detail">
												<h3 class="pro-name">
													<a href="/products/ao-so-mi-tay-beo-1ao039tr" title="Áo sơ mi tay bèo 1AO039TR">
														Áo sơ mi tay bèo 1AO039TR
													</a>
												</h3>
												<div class="box-pro-prices">
													<p class="pro-price ">
														<span>695,000₫</span>

													</p>
												</div>
											</div>
										</div>
									</div>



								</div>






								<div class="col-md-4 col-sm-6 col-xs-6 pro-loop  pro-loop-lastHide ">










									<div class="product-block product-resize ">
										<div class="product-img ">



											<a href="/products/ao-to-co-v-1ao059be" title="Áo tơ cổ V 1AO059BE" class="image-resize ratiobox">
												<picture>
													<source media="(max-width: 480px)" data-srcset="//product.hstatic.net/200000258383/product/1va758na_97fa663cb67a437b8ecafbc65babbdff_large.jpg"
														srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" />
													<source media="(min-width: 481px) and (max-width: 767px)" data-srcset="//product.hstatic.net/200000258383/product/1va758na_97fa663cb67a437b8ecafbc65babbdff_large.jpg"
														srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" />
													<source media="(min-width: 768px)" data-srcset="//product.hstatic.net/200000258383/product/1va758na_97fa663cb67a437b8ecafbc65babbdff_large.jpg"
														srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" />
													<img class="lazyload img-loop" data-sizes="auto" data-src="//product.hstatic.net/200000258383/product/1va758na_97fa663cb67a437b8ecafbc65babbdff_large.jpg"
														data-lowsrc="//product.hstatic.net/200000258383/product/1va758na_97fa663cb67a437b8ecafbc65babbdff_grande.jpg"
														src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" alt=" Áo tơ cổ V 1AO059BE " />
												</picture>
												<picture>
													<source media="(max-width: 480px)" data-srcset="//product.hstatic.net/200000258383/product/1va758na_1_c0558e3b774c45e68a2f09636d205d9f_large.jpg"
														srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=">
													<source media="(min-width: 481px) and (max-width: 767px)" data-srcset="//product.hstatic.net/200000258383/product/1va758na_1_c0558e3b774c45e68a2f09636d205d9f_large.jpg"
														srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=">
													<source media="(min-width: 768px)" data-srcset="//product.hstatic.net/200000258383/product/1va758na_1_c0558e3b774c45e68a2f09636d205d9f_large.jpg"
														srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=">
													<img class="img-loop img-hover lazyload" data-src="//product.hstatic.net/200000258383/product/1va758na_1_c0558e3b774c45e68a2f09636d205d9f_large.jpg"
														src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" alt=" Áo tơ cổ V 1AO059BE " />
												</picture>
											</a>
											<div class="button-add hidden">
												<button type="submit" title="Buy now" class="action" onclick="buy_now('1066441122')">Mua ngay<i class="fa fa-long-arrow-right"></i></button>
											</div>
											<div class="pro-price-mb">
												<span class="pro-price">420,000₫</span>

											</div>
										</div>
										<div class="product-detail clearfix">
											<div class="box-pro-detail">
												<h3 class="pro-name">
													<a href="/products/ao-to-co-v-1ao059be" title="Áo tơ cổ V 1AO059BE">
														Áo tơ cổ V 1AO059BE
													</a>
												</h3>
												<div class="box-pro-prices">
													<p class="pro-price ">
														<span>420,000₫</span>

													</p>
												</div>
											</div>
										</div>
									</div>



								</div>





							</div>

						</div>


					</div>
				</div>
			</div>
		</div>
	</div>
	<div id="divzoom">
		<div class="divzoom_main">
			<div class="product-thumb text-center">
				<img class="product-image-feature" src="//product.hstatic.net/200000258383/product/dsc06571_96c06c71b46b432492c46e350616e47c_master.jpg" alt=" Barley Dress 1VA1078VA ">
			</div>
			<div class="product-thumb text-center">
				<img class="product-image-feature" src="//product.hstatic.net/200000258383/product/dsc06603_b65b6300fb5744f688498c51d1eeca54_master.jpg" alt=" Barley Dress 1VA1078VA ">
			</div>
			<div class="product-thumb text-center">
				<img class="product-image-feature" src="//product.hstatic.net/200000258383/product/dsc06707_fb33457d6de54ef1bf281dfc0f81952d_master.jpg" alt=" Barley Dress 1VA1078VA ">
			</div>
			<div class="product-thumb text-center">
				<img class="product-image-feature" src="//product.hstatic.net/200000258383/product/dsc06773_abe4f92adfbb49deb8364fd5b4d89311_master.jpg" alt=" Barley Dress 1VA1078VA ">
			</div>
		</div>
		<div id="positionButtonDiv" class="hidden">
			<p>
				<span>
					<button type="button" class="buttonZoomIn"><i></i></button>
					<button type="button" class="buttonZoomOut"><i></i></button>
				</span>
			</p>
		</div>
		<button id="closedivZoom"><i></i></button>
	</div>
	<script>
		$(document).ready(function() {
			$('#add-to-cart').click(function(e) {
				e.preventDefault();
				$(this).addClass('clicked_buy');
				add_item_show_modalCart($('#product-select').val());
				//getCartModal();
			});
		});
	</script>
	<script>
		$(document).ready(function() {
			$('#add-to-cartbottom').click(function() {
				$('#add-to-cart').trigger('click');
			});
			$('#quan-input').keyup(function() {
				$('[name="quantity"]').val($(this).val());
			})
			$('[name="quantity"]').on('keyup change', function() {
				$('#quan-input').val($(this).val());
			})
		});
		$(document).on("click", "#product-zoom-in", function() {
			//	var indexThumb = $(this).index();
			$("body").addClass("open_layer");
			$("#divzoom").css({
				'opcaity': 0,
				'visibility': 'hidden'
			}).show();
			$('.divzoom_main').flickity({
				resize: true,
				draggable: true,
			});
			if ($(window).width() > 768) {
				var ncurrent = parseInt($(".gallery-index .current").html()) - 1;
			} else {
				var ncurrent = parseInt($(".product-gallery-item.is-selected").index());
			}
			$('.divzoom_main').flickity('select', ncurrent);
			setTimeout(function() {
				$("#divzoom").css({
					'opcaity': 1,
					'visibility': 'visible'
				})
			}, 50);
		});
		$(document).on('click', '#closedivZoom', function(event) {
			$("#divzoom").hide();
			$("body").removeClass("open_layer");
			$('.divzoom_main').flickity('select', 0);
			//$('.divzoom_main').slick('unslick');
		});
	</script>
	<script>
		$(".product-gallery__thumb img").click(function() {
			$(".product-gallery__thumb").removeClass('active');
			$(this).parents('.product-gallery__thumb').addClass('active');
			var img_thumb = $(this).data('image');
			var total_index = $(this).parents('.product-gallery__thumb').index() + 1;
			$(".gallery-index .current").html(total_index);

			$(".product-image-detail .product-image-feature").attr("src", $(this).attr("data-image"));


		});
		$(".product-gallery__thumb").first().addClass('active');
		var check_variant = true;
		var fIndex = false;
		var selectCallback = function(variant, selector) {
			if (variant && variant.available) {
				if (variant.featured_image != null) {
					if ($(window).width() > 991) {

						$(".product-gallery__thumb a img[data-image='" + Haravan.resizeImage(variant.featured_image.src, 'master').replace('https:', '') + "']").click().parents('.product-gallery__thumb').addClass('active');

					} else {
						setTimeout(function() {
							var indexVariant = $(".product-gallery-item img[src='" + Haravan.resizeImage(variant.featured_image.src, 'master').replace('https:', '') + "']").parent().index();
							$("#sliderproduct").flickity('select', indexVariant);
						}, 500);
					}

				}
				if (variant.sku != null) {
					jQuery('#pro_sku').html('SKU: ' + variant.sku);
				}
				jQuery('#detail-product .add-to-cartProduct').removeAttr('disabled').removeClass('disabled').html("Thêm vào giỏ");


				jQuery('#detail-product #buy-now').removeAttr('disabled').removeClass('disabled').html("Mua ngay").show();
				jQuery('#detail-product .pro-soldold').addClass('hidden')
				if (variant.price < variant.compare_at_price) {
					//jQuery('#price-preview').html("<span>" + Haravan.formatMoney(variant.price, "{{amount}}₫") + "</span><del>" + Haravan.formatMoney(variant.compare_at_price, "{{amount}}₫") + "</del>");
					var pro_sold = variant.price;
					var pro_comp = variant.compare_at_price / 100;
					var sale = 100 - (pro_sold / pro_comp);
					var kq_sale = Math.round(sale);
					var html = '<span class="pro-sale">-' + kq_sale + '%</span>';
					html += '<span class="pro-price">' + Haravan.formatMoney(pro_sold, "{{amount}}₫") + '</span>';
					html += '<del>' + Haravan.formatMoney(variant.compare_at_price, "{{amount}}₫") + '</del>';
					jQuery('#detail-product #price-preview').html(html);
					jQuery('#detail-product .price-fixed-mb').html(html);
				} else {
					jQuery('#detail-product #price-preview').html("<span class='pro-price'>" + Haravan.formatMoney(variant.price, "{{amount}}₫" + "</span>"));
					jQuery('#detail-product .price-fixed-mb').html("<span class='pro-price'>" + Haravan.formatMoney(variant.price, "{{amount}}₫" + "</span>"));
				}
				check_variant = true;
			} else {
				jQuery('#detail-product .add-to-cartProduct').addClass('disabled').attr('disabled', 'disabled').html("Hết hàng");

				jQuery('#detail-product #buy-now').addClass('disabled').attr('disabled', 'disabled').html("Hết hàng").hide();
				var message = variant ? "Hết hàng" : "Không có hàng";
				jQuery('#detail-product .pro-soldold').removeClass('hidden')
				jQuery('#detail-product .pro-soldold').text(message);
				check_variant = false;
			}
			return check_variant;
		};
		jQuery(document).ready(function($) {

			new Haravan.OptionSelectors("product-select", {
				product: {
					"available": true,
					"compare_at_price_max": 0.0,
					"compare_at_price_min": 0.0,
					"compare_at_price_varies": false,
					"compare_at_price": 0.0,
					"content": null,
					"description": null,
					"featured_image": "https://product.hstatic.net/200000258383/product/dsc06571_96c06c71b46b432492c46e350616e47c.jpg",
					"handle": "vay-cup-nguc-dan-lung-1va1078va",
					"id": 1032328466,
					"images": ["https://product.hstatic.net/200000258383/product/dsc06571_96c06c71b46b432492c46e350616e47c.jpg", "https://product.hstatic.net/200000258383/product/dsc06603_b65b6300fb5744f688498c51d1eeca54.jpg",
						"https://product.hstatic.net/200000258383/product/dsc06707_fb33457d6de54ef1bf281dfc0f81952d.jpg", "https://product.hstatic.net/200000258383/product/dsc06773_abe4f92adfbb49deb8364fd5b4d89311.jpg"
					],
					"options": ["SIZE"],
					"price": 75000000.0,
					"price_max": 75000000.0,
					"price_min": 75000000.0,
					"price_varies": false,
					"tags": [],
					"template_suffix": null,
					"title": "Barley Dress 1VA1078VA",
					"type": "Váy",
					"url": "/products/vay-cup-nguc-dan-lung-1va1078va",
					"pagetitle": "Váy cúp ngực đan lưng 1VA1078VA",
					"metadescription": null,
					"variants": [{
						"id": 1070485094,
						"barcode": "1VA1078VAS",
						"available": true,
						"price": 75000000.0,
						"sku": "1VA1078VAS",
						"option1": "S",
						"option2": "",
						"option3": "",
						"options": ["S"],
						"inventory_quantity": 1,
						"old_inventory_quantity": 1,
						"title": "S",
						"weight": 0.0,
						"compare_at_price": 0.0,
						"inventory_management": "haravan",
						"inventory_policy": "deny",
						"selected": false,
						"url": null,
						"featured_image": {
							"id": 1190917637,
							"created_at": "0001-01-01T00:00:00",
							"position": 1,
							"product_id": 1032328466,
							"updated_at": "0001-01-01T00:00:00",
							"src": "https://product.hstatic.net/200000258383/product/dsc06571_96c06c71b46b432492c46e350616e47c.jpg",
							"variant_ids": [1070485094]
						}
					}, {
						"id": 1070485095,
						"barcode": "1VA1078VAM",
						"available": true,
						"price": 75000000.0,
						"sku": "1VA1078VAM",
						"option1": "M",
						"option2": "",
						"option3": "",
						"options": ["M"],
						"inventory_quantity": 1,
						"old_inventory_quantity": 1,
						"title": "M",
						"weight": 0.0,
						"compare_at_price": 0.0,
						"inventory_management": "haravan",
						"inventory_policy": "deny",
						"selected": false,
						"url": null,
						"featured_image": {
							"id": 1190917803,
							"created_at": "0001-01-01T00:00:00",
							"position": 2,
							"product_id": 1032328466,
							"updated_at": "0001-01-01T00:00:00",
							"src": "https://product.hstatic.net/200000258383/product/dsc06603_b65b6300fb5744f688498c51d1eeca54.jpg",
							"variant_ids": [1070485095]
						}
					}, {
						"id": 1070485096,
						"barcode": "1VA1078VAL",
						"available": true,
						"price": 75000000.0,
						"sku": "1VA1078VAL",
						"option1": "L",
						"option2": "",
						"option3": "",
						"options": ["L"],
						"inventory_quantity": 1,
						"old_inventory_quantity": 1,
						"title": "L",
						"weight": 0.0,
						"compare_at_price": 0.0,
						"inventory_management": "haravan",
						"inventory_policy": "deny",
						"selected": false,
						"url": null,
						"featured_image": {
							"id": 1190917872,
							"created_at": "0001-01-01T00:00:00",
							"position": 4,
							"product_id": 1032328466,
							"updated_at": "0001-01-01T00:00:00",
							"src": "https://product.hstatic.net/200000258383/product/dsc06773_abe4f92adfbb49deb8364fd5b4d89311.jpg",
							"variant_ids": [1070485096]
						}
					}],
					"vendor": "Khác",
					"published_at": "2021-04-24T03:40:22.92Z",
					"created_at": "2021-04-22T08:09:31.26Z",
					"not_allow_promotion": false
				},
				onVariantSelected: selectCallback
			});

			// Add label if only one product option and it isn't 'Title'.

			$('#detail-product .selector-wrapper:eq(0)').prepend('<label>SIZE</label>');


			// Auto-select first available variant on page load.





			$('#detail-product .single-option-selector:eq(0)').val("S").trigger('change');







			$('#detail-product .selector-wrapper select').each(function() {
				$(this).wrap('<span class="custom-dropdown custom-dropdown--white"></span>');
				$(this).addClass("custom-dropdown__select custom-dropdown__select--white");
			});

		});
	</script>
	<script>
		var swatch_size = parseInt($('#add-item-form .select-swatch').children().size());
		jQuery(document).on('click', '#add-item-form .swatch input', function(e) {
			e.preventDefault();
			var $this = $(this);
			var _available = '';
			$this.parent().siblings().find('label').removeClass('sd');
			$this.next().addClass('sd');
			var name = $this.attr('name');
			var value = $this.val();
			$('#add-item-form select[data-option=' + name + ']').val(value).trigger('change');
			if (swatch_size == 2) {
				if (name.indexOf('1') != -1) {
					$('#add-item-form #variant-swatch-1 .swatch-element').find('input').prop('disabled', false);
					$('#add-item-form #variant-swatch-2 .swatch-element').find('input').prop('disabled', false);
					$('#add-item-form #variant-swatch-1 .swatch-element label').removeClass('sd');
					$('#add-item-form #variant-swatch-1 .swatch-element').removeClass('soldout');
					$('#add-item-form .selector-wrapper .single-option-selector').eq(1).find('option').each(function() {
						var _tam = $(this).val();
						$(this).parent().val(_tam).trigger('change');
						if (check_variant) {
							if (_available == '') {
								_available = _tam;
							}
						} else {
							$('#add-item-form #variant-swatch-1 .swatch-element[data-value="' + _tam + '"]').addClass('soldout');
							$('#add-item-form #variant-swatch-1 .swatch-element[data-value="' + _tam + '"]').find('input').prop('disabled', true);
						}
					})
					$('#add-item-form .selector-wrapper .single-option-selector').eq(1).val(_available).trigger('change');
					$('#add-item-form #variant-swatch-1 .swatch-element[data-value="' + _available + '"] label').addClass('sd');
				}
			} else if (swatch_size == 3) {
				var _count_op2 = $('#add-item-form #variant-swatch-1 .swatch-element').size();
				var _count_op3 = $('#add-item-form #variant-swatch-2 .swatch-element').size();
				if (name.indexOf('1') != -1) {
					$('#add-item-form #variant-swatch-1 .swatch-element').find('input').prop('disabled', false);
					$('#add-item-form #variant-swatch-2 .swatch-element').find('input').prop('disabled', false);
					$('#add-item-form #variant-swatch-1 .swatch-element label').removeClass('sd');
					$('#add-item-form #variant-swatch-1 .swatch-element').removeClass('soldout');
					$('#add-item-form #variant-swatch-2 .swatch-element label').removeClass('sd');
					$('#add-item-form #variant-swatch-2 .swatch-element').removeClass('soldout');
					var _avi_op1 = '';
					var _avi_op2 = '';
					$('#add-item-form #variant-swatch-1 .swatch-element').each(function(ind, value) {
						var _key = $(this).data('value');
						var _unavi = 0;
						$('#add-item-form .single-option-selector').eq(1).val(_key).change();
						$('#add-item-form #variant-swatch-2 .swatch-element label').removeClass('sd');
						$('#add-item-form #variant-swatch-2 .swatch-element').removeClass('soldout');
						$('#add-item-form #variant-swatch-2 .swatch-element').find('input').prop('disabled', false);
						$('#add-item-form #variant-swatch-2 .swatch-element').each(function(i, v) {
							var _val = $(this).data('value');
							$('#add-item-form .single-option-selector').eq(2).val(_val).change();
							if (check_variant == true) {
								if (_avi_op1 == '') {
									_avi_op1 = _key;
								}
								if (_avi_op2 == '') {
									_avi_op2 = _val;
								}
								//console.log(_avi_op1 + ' -- ' + _avi_op2)
							} else {
								_unavi += 1;
							}
						})
						if (_unavi == _count_op3) {
							$('#add-item-form #variant-swatch-1 .swatch-element[data-value = "' + _key + '"]').addClass('soldout');
							setTimeout(function() {
								$('#add-item-form #variant-swatch-1 .swatch-element[data-value = "' + _key + '"] input').attr('disabled', 'disabled');
							})
						}
					})
					$('#add-item-form #variant-swatch-1 .swatch-element[data-value="' + _avi_op1 + '"] input').click();
				} else if (name.indexOf('2') != -1) {
					$('#add-item-form #variant-swatch-2 .swatch-element label').removeClass('sd');
					$('#add-item-form #variant-swatch-2 .swatch-element').removeClass('soldout');
					$('#add-item-form #variant-swatch-2 .swatch-element').find('input').prop('disabled', false);
					$('#add-item-form .selector-wrapper .single-option-selector').eq(2).find('option').each(function() {
						var _tam = $(this).val();
						$(this).parent().val(_tam).trigger('change');
						if (check_variant) {
							if (_available == '') {
								_available = _tam;
							}
						} else {
							$('#add-item-form #variant-swatch-2 .swatch-element[data-value="' + _tam + '"]').addClass('soldout');
							$('#add-item-form #variant-swatch-2 .swatch-element[data-value="' + _tam + '"]').find('input').prop('disabled', true);
						}
					})
					$('#add-item-form .selector-wrapper .single-option-selector').eq(2).val(_available).trigger('change');
					$('#add-item-form #variant-swatch-2 .swatch-element[data-value="' + _available + '"] label').addClass('sd');
				}
			} else {

			}
		})
		$(document).ready(function() {
			var _chage = '';
			$('#add-item-form .swatch-element[data-value="' + $('#add-item-form .selector-wrapper .single-option-selector').eq(0).val() + '"]').find('input').click();
			$('#add-item-form .swatch-element[data-value="' + $('#add-item-form .selector-wrapper .single-option-selector').eq(1).val() + '"]').find('input').click();
			if (swatch_size == 2) {
				var _avi_op1 = '';
				var _avi_op2 = '';
				var _count = $('#add-item-form #variant-swatch-1 .swatch-element').size();
				$('#add-item-form #variant-swatch-0 .swatch-element').each(function(ind, value) {
					var _key = $(this).data('value');
					var _unavi = 0;
					$('#add-item-form .single-option-selector').eq(0).val(_key).change();
					$('#add-item-form #variant-swatch-1 .swatch-element').each(function(i, v) {
						var _val = $(this).data('value');
						$('#add-item-form .single-option-selector').eq(1).val(_val).change();
						if (check_variant == true) {
							if (_avi_op1 == '') {
								_avi_op1 = _key;
							}
							if (_avi_op2 == '') {
								_avi_op2 = _val;
							}
						} else {
							_unavi += 1;
						}
					})
					if (_unavi == _count) {
						$('#add-item-form #variant-swatch-0 .swatch-element[data-value = "' + _key + '"]').addClass('soldout');
						$('#add-item-form #variant-swatch-0 .swatch-element[data-value = "' + _key + '"]').find('input').attr('disabled', 'disabled');
					}
				})
				$('#add-item-form #variant-swatch-1 .swatch-element[data-value = "' + _avi_op2 + '"] input').click();
				$('#add-item-form #variant-swatch-0 .swatch-element[data-value = "' + _avi_op1 + '"] input').click();
			} else if (swatch_size == 3) {
				var _avi_op1 = '';
				var _avi_op2 = '';
				var _avi_op3 = '';
				var _size_op2 = $('#add-item-form #variant-swatch-1 .swatch-element').size();
				var _size_op3 = $('#add-item-form #variant-swatch-2 .swatch-element').size();

				$('#add-item-form #variant-swatch-0 .swatch-element').each(function(ind, value) {
					var _key_va1 = $(this).data('value');
					var _count_unavi = 0;
					$('#add-item-form .single-option-selector').eq(0).val(_key_va1).change();
					$('#add-item-form #variant-swatch-1 .swatch-element').each(function(i, v) {
						var _key_va2 = $(this).data('value');
						var _unavi_2 = 0;
						$('#add-item-form .single-option-selector').eq(1).val(_key_va2).change();
						$('#add-item-form #variant-swatch-2 .swatch-element').each(function(j, z) {
							var _key_va3 = $(this).data('value');
							$('#add-item-form .single-option-selector').eq(2).val(_key_va3).change();
							if (check_variant == true) {
								if (_avi_op1 == '') {
									_avi_op1 = _key_va1;
								}
								if (_avi_op2 == '') {
									_avi_op2 = _key_va2;
								}
								if (_avi_op3 == '') {
									_avi_op3 = _key_va3;
								}
							} else {
								_unavi_2 += 1;
							}
						})
						if (_unavi_2 == _size_op3) {
							_count_unavi += 1;
						}
					})
					if (_size_op2 == _count_unavi) {
						$('#add-item-form #variant-swatch-0 .swatch-element[data-value = "' + _key_va1 + '"]').addClass('soldout');
						$('#add-item-form #variant-swatch-0 .swatch-element[data-value = "' + _key_va1 + '"]').find('input').attr('disabled', 'disabled');
					}
				})
				$('#add-item-form #variant-swatch-0 .swatch-element[data-value = "' + _avi_op1 + '"] input').click();
			}
		});
		$(document).ready(function() {
			var vl = $('#add-item-form .swatch .color input').val();
			$('#add-item-form .swatch .color input').parents(".swatch").find(".header span").html(vl);
			$("#add-item-form .select-swap .color").hover(function() {
				var value = $(this).data("value");
				$(this).parents(".swatch").find(".header span").html(value);
			}, function() {
				var value = $("#add-item-form .select-swap .color label.sd span").html();
				$(this).parents(".swatch").find(".header span").html(value);
			});
		});
	</script>




</main>


<?php
get_footer( 'shop' );

/* Omit closing PHP tag at the end of PHP files to avoid "headers already sent" issues. */
