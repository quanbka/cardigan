<?php
/**
 * The Template for displaying products in a product category. Simply includes the archive template
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/taxonomy-product-cat.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see         https://docs.woocommerce.com/document/template-structure/
 * @package     WooCommerce\Templates
 * @version     4.7.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
// die;
wc_get_template( 'archive-product.php' );

?>

<?php get_header(); ?>


<main class="mainContent-theme ">

  <div id="collection" class="collection-page">

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
              <?php get_sidebar(); ?>
            </div>

            <div class="col-md-9 col-sm-12 col-xs-12">
              <div class="wrap-collection-title row">
                <div class="heading-collection row">
                  <div class="col-md-8 col-sm-12 col-xs-12">
                    <h1 class="title">
                      Sản phẩm mới
                    </h1>

                    <div class="alert-no-filter"></div>

                  </div>

                  <div class="col-md-4 hidden-sm hidden-xs">
                    <div class="option browse-tags">
                      <label class="lb-filter hide" for="sort-by">Sắp xếp theo:</label>
                      <span class="custom-dropdown custom-dropdown--grey">
                        <select class="sort-by custom-dropdown__select">

                          <option value="manual">Sản phẩm nổi bật</option>

                          <option value="price-ascending" data-filter="&sortby=(price:product=asc)">Giá: Tăng dần</option>
                          <option value="price-descending" data-filter="&sortby=(price:product=desc)">Giá: Giảm dần</option>
                          <option value="title-ascending" data-filter="&sortby=(title:product=asc)">Tên: A-Z</option>
                          <option value="title-descending" data-filter="&sortby=(price:product=desc)">Tên: Z-A</option>
                          <option value="created-ascending" data-filter="&sortby=(updated_at:product=desc)">Cũ nhất</option>
                          <option value="created-descending" data-filter="&sortby=(updated_at:product=asc)">Mới nhất</option>
                          <option value="best-selling" data-filter="&sortby=(sold_quantity:product=desc)">Bán chạy nhất</option>
                          <option value="quantity-descending">Tồn kho: Giảm dần</option>
                        </select>
                      </span>
                    </div>
                  </div>

                </div>
              </div>

              <div class="row filter-here">
                <div class="content-product-list product-list filter clearfix">

                  <div class="col-md-3 col-sm-6 col-xs-6 pro-loop col-4">










                    <div class="product-block product-resize ">
                      <div class="product-img ">



                        <a href="/products/vay-co-yem-cuc-trai-1va970ho" title="Tulip Dress 1VA970HO" class="image-resize ratiobox">
                          <picture>
                            <source media="(max-width: 480px)" data-srcset="//product.hstatic.net/200000258383/product/dsc09641_68df0602e64149eab65bf9ad23b3a089_large.jpg"
                              srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" />
                            <source media="(min-width: 481px) and (max-width: 767px)" data-srcset="//product.hstatic.net/200000258383/product/dsc09641_68df0602e64149eab65bf9ad23b3a089_large.jpg"
                              srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" />
                            <source media="(min-width: 768px)" data-srcset="//product.hstatic.net/200000258383/product/dsc09641_68df0602e64149eab65bf9ad23b3a089_large.jpg"
                              srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" />
                            <img class="lazyload img-loop" data-sizes="auto" data-src="//product.hstatic.net/200000258383/product/dsc09641_68df0602e64149eab65bf9ad23b3a089_large.jpg"
                              data-lowsrc="//product.hstatic.net/200000258383/product/dsc09641_68df0602e64149eab65bf9ad23b3a089_grande.jpg"
                              src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" alt=" Tulip Dress 1VA970HO " />
                          </picture>
                          <picture>
                            <source media="(max-width: 480px)" data-srcset="//product.hstatic.net/200000258383/product/dsc09676_7be848c63155482ab1da0daa14d02db3_large.jpg"
                              srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=">
                            <source media="(min-width: 481px) and (max-width: 767px)" data-srcset="//product.hstatic.net/200000258383/product/dsc09676_7be848c63155482ab1da0daa14d02db3_large.jpg"
                              srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=">
                            <source media="(min-width: 768px)" data-srcset="//product.hstatic.net/200000258383/product/dsc09676_7be848c63155482ab1da0daa14d02db3_large.jpg"
                              srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=">
                            <img class="img-loop img-hover lazyload" data-src="//product.hstatic.net/200000258383/product/dsc09676_7be848c63155482ab1da0daa14d02db3_large.jpg"
                              src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" alt=" Tulip Dress 1VA970HO " />
                          </picture>
                        </a>
                        <div class="button-add hidden">
                          <button type="submit" title="Buy now" class="action" onclick="buy_now('1070273064')">Mua ngay<i class="fa fa-long-arrow-right"></i></button>
                        </div>
                        <div class="pro-price-mb">
                          <span class="pro-price">795,000₫</span>

                        </div>
                      </div>
                      <div class="product-detail clearfix">
                        <div class="box-pro-detail">
                          <h3 class="pro-name">
                            <a href="/products/vay-co-yem-cuc-trai-1va970ho" title="Tulip Dress 1VA970HO">
                              Tulip Dress 1VA970HO
                            </a>
                          </h3>
                          <div class="box-pro-prices">
                            <p class="pro-price ">
                              <span>795,000₫</span>

                            </p>
                          </div>
                        </div>
                      </div>
                    </div>



                  </div>

                  <div class="col-md-3 col-sm-6 col-xs-6 pro-loop col-4">










                    <div class="product-block product-resize ">
                      <div class="product-img ">



                        <a href="/products/vay-xep-li-cheo-eo-1va1033be" title="Susans Dress 1VA1033BE" class="image-resize ratiobox">
                          <picture>
                            <source media="(max-width: 480px)" data-srcset="//product.hstatic.net/200000258383/product/dsc09744_8cef06a5860d44f5888fe5d0013e86df_large.jpg"
                              srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" />
                            <source media="(min-width: 481px) and (max-width: 767px)" data-srcset="//product.hstatic.net/200000258383/product/dsc09744_8cef06a5860d44f5888fe5d0013e86df_large.jpg"
                              srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" />
                            <source media="(min-width: 768px)" data-srcset="//product.hstatic.net/200000258383/product/dsc09744_8cef06a5860d44f5888fe5d0013e86df_large.jpg"
                              srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" />
                            <img class="lazyload img-loop" data-sizes="auto" data-src="//product.hstatic.net/200000258383/product/dsc09744_8cef06a5860d44f5888fe5d0013e86df_large.jpg"
                              data-lowsrc="//product.hstatic.net/200000258383/product/dsc09744_8cef06a5860d44f5888fe5d0013e86df_grande.jpg"
                              src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" alt=" Susans Dress 1VA1033BE " />
                          </picture>
                          <picture>
                            <source media="(max-width: 480px)" data-srcset="//product.hstatic.net/200000258383/product/dsc09734_9a44f514be7143c5bdc31df901424a3c_large.jpg"
                              srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=">
                            <source media="(min-width: 481px) and (max-width: 767px)" data-srcset="//product.hstatic.net/200000258383/product/dsc09734_9a44f514be7143c5bdc31df901424a3c_large.jpg"
                              srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=">
                            <source media="(min-width: 768px)" data-srcset="//product.hstatic.net/200000258383/product/dsc09734_9a44f514be7143c5bdc31df901424a3c_large.jpg"
                              srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=">
                            <img class="img-loop img-hover lazyload" data-src="//product.hstatic.net/200000258383/product/dsc09734_9a44f514be7143c5bdc31df901424a3c_large.jpg"
                              src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" alt=" Susans Dress 1VA1033BE " />
                          </picture>
                        </a>
                        <div class="button-add hidden">
                          <button type="submit" title="Buy now" class="action" onclick="buy_now('1069946070')">Mua ngay<i class="fa fa-long-arrow-right"></i></button>
                        </div>
                        <div class="pro-price-mb">
                          <span class="pro-price">895,000₫</span>

                        </div>
                      </div>
                      <div class="product-detail clearfix">
                        <div class="box-pro-detail">
                          <h3 class="pro-name">
                            <a href="/products/vay-xep-li-cheo-eo-1va1033be" title="Susans Dress 1VA1033BE">
                              Susans Dress 1VA1033BE
                            </a>
                          </h3>
                          <div class="box-pro-prices">
                            <p class="pro-price ">
                              <span>895,000₫</span>

                            </p>
                          </div>
                        </div>
                      </div>
                    </div>



                  </div>

                  <div class="col-md-3 col-sm-6 col-xs-6 pro-loop col-4">










                    <div class="product-block product-resize ">
                      <div class="product-img ">



                        <a href="/products/vay-hoa-tiet-cup-nguc-1va969xl" title="Ivy Dress 1VA969XL" class="image-resize ratiobox">
                          <picture>
                            <source media="(max-width: 480px)" data-srcset="//product.hstatic.net/200000258383/product/dsc09815_9284d6df776d4d20aa5293545efdd258_large.jpg"
                              srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" />
                            <source media="(min-width: 481px) and (max-width: 767px)" data-srcset="//product.hstatic.net/200000258383/product/dsc09815_9284d6df776d4d20aa5293545efdd258_large.jpg"
                              srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" />
                            <source media="(min-width: 768px)" data-srcset="//product.hstatic.net/200000258383/product/dsc09815_9284d6df776d4d20aa5293545efdd258_large.jpg"
                              srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" />
                            <img class="lazyload img-loop" data-sizes="auto" data-src="//product.hstatic.net/200000258383/product/dsc09815_9284d6df776d4d20aa5293545efdd258_large.jpg"
                              data-lowsrc="//product.hstatic.net/200000258383/product/dsc09815_9284d6df776d4d20aa5293545efdd258_grande.jpg"
                              src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" alt=" Ivy Dress 1VA969XL " />
                          </picture>
                          <picture>
                            <source media="(max-width: 480px)" data-srcset="//product.hstatic.net/200000258383/product/dsc09824_be57c6f502ab43d1929b06a83a17d66e_large.jpg"
                              srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=">
                            <source media="(min-width: 481px) and (max-width: 767px)" data-srcset="//product.hstatic.net/200000258383/product/dsc09824_be57c6f502ab43d1929b06a83a17d66e_large.jpg"
                              srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=">
                            <source media="(min-width: 768px)" data-srcset="//product.hstatic.net/200000258383/product/dsc09824_be57c6f502ab43d1929b06a83a17d66e_large.jpg"
                              srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=">
                            <img class="img-loop img-hover lazyload" data-src="//product.hstatic.net/200000258383/product/dsc09824_be57c6f502ab43d1929b06a83a17d66e_large.jpg"
                              src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" alt=" Ivy Dress 1VA969XL " />
                          </picture>
                        </a>
                        <div class="button-add hidden">
                          <button type="submit" title="Buy now" class="action" onclick="buy_now('1070266365')">Mua ngay<i class="fa fa-long-arrow-right"></i></button>
                        </div>
                        <div class="pro-price-mb">
                          <span class="pro-price">1,250,000₫</span>

                        </div>
                      </div>
                      <div class="product-detail clearfix">
                        <div class="box-pro-detail">
                          <h3 class="pro-name">
                            <a href="/products/vay-hoa-tiet-cup-nguc-1va969xl" title="Ivy Dress 1VA969XL">
                              Ivy Dress 1VA969XL
                            </a>
                          </h3>
                          <div class="box-pro-prices">
                            <p class="pro-price ">
                              <span>1,250,000₫</span>

                            </p>
                          </div>
                        </div>
                      </div>
                    </div>



                  </div>

                  <div class="col-md-3 col-sm-6 col-xs-6 pro-loop col-4">










                    <div class="product-block product-resize ">
                      <div class="product-img ">



                        <a href="/products/vay-nhun-4-tang-1va967tr" title="Nebula Dress 1VA967TR" class="image-resize ratiobox">
                          <picture>
                            <source media="(max-width: 480px)" data-srcset="//product.hstatic.net/200000258383/product/dsc08676-2_48d75f7b3f4f41c2b8b810d44cae78d3_large.jpg"
                              srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" />
                            <source media="(min-width: 481px) and (max-width: 767px)" data-srcset="//product.hstatic.net/200000258383/product/dsc08676-2_48d75f7b3f4f41c2b8b810d44cae78d3_large.jpg"
                              srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" />
                            <source media="(min-width: 768px)" data-srcset="//product.hstatic.net/200000258383/product/dsc08676-2_48d75f7b3f4f41c2b8b810d44cae78d3_large.jpg"
                              srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" />
                            <img class="lazyload img-loop" data-sizes="auto" data-src="//product.hstatic.net/200000258383/product/dsc08676-2_48d75f7b3f4f41c2b8b810d44cae78d3_large.jpg"
                              data-lowsrc="//product.hstatic.net/200000258383/product/dsc08676-2_48d75f7b3f4f41c2b8b810d44cae78d3_grande.jpg"
                              src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" alt=" Nebula Dress 1VA967TR " />
                          </picture>
                          <picture>
                            <source media="(max-width: 480px)" data-srcset="//product.hstatic.net/200000258383/product/dsc08647-2_7d71d151cb0b4cf0a5a8d7976d785e00_large.jpg"
                              srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=">
                            <source media="(min-width: 481px) and (max-width: 767px)" data-srcset="//product.hstatic.net/200000258383/product/dsc08647-2_7d71d151cb0b4cf0a5a8d7976d785e00_large.jpg"
                              srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=">
                            <source media="(min-width: 768px)" data-srcset="//product.hstatic.net/200000258383/product/dsc08647-2_7d71d151cb0b4cf0a5a8d7976d785e00_large.jpg"
                              srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=">
                            <img class="img-loop img-hover lazyload" data-src="//product.hstatic.net/200000258383/product/dsc08647-2_7d71d151cb0b4cf0a5a8d7976d785e00_large.jpg"
                              src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" alt=" Nebula Dress 1VA967TR " />
                          </picture>
                        </a>
                        <div class="button-add hidden">
                          <button type="submit" title="Buy now" class="action" onclick="buy_now('1070483831')">Mua ngay<i class="fa fa-long-arrow-right"></i></button>
                        </div>
                        <div class="pro-price-mb">
                          <span class="pro-price">1,650,000₫</span>

                        </div>
                      </div>
                      <div class="product-detail clearfix">
                        <div class="box-pro-detail">
                          <h3 class="pro-name">
                            <a href="/products/vay-nhun-4-tang-1va967tr" title="Nebula Dress 1VA967TR">
                              Nebula Dress 1VA967TR
                            </a>
                          </h3>
                          <div class="box-pro-prices">
                            <p class="pro-price ">
                              <span>1,650,000₫</span>

                            </p>
                          </div>
                        </div>
                      </div>
                    </div>



                  </div>

                  <div class="col-md-3 col-sm-6 col-xs-6 pro-loop col-4">










                    <div class="product-block product-resize ">
                      <div class="product-img ">



                        <a href="/products/vay-yem-nhun-nguc-1va1002do" title="Gerbera Dress 1VA1002DO" class="image-resize ratiobox">
                          <picture>
                            <source media="(max-width: 480px)" data-srcset="//product.hstatic.net/200000258383/product/dsc06977_5f96a65ae0be47029d600dd106154019_large.jpg"
                              srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" />
                            <source media="(min-width: 481px) and (max-width: 767px)" data-srcset="//product.hstatic.net/200000258383/product/dsc06977_5f96a65ae0be47029d600dd106154019_large.jpg"
                              srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" />
                            <source media="(min-width: 768px)" data-srcset="//product.hstatic.net/200000258383/product/dsc06977_5f96a65ae0be47029d600dd106154019_large.jpg"
                              srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" />
                            <img class="lazyload img-loop" data-sizes="auto" data-src="//product.hstatic.net/200000258383/product/dsc06977_5f96a65ae0be47029d600dd106154019_large.jpg"
                              data-lowsrc="//product.hstatic.net/200000258383/product/dsc06977_5f96a65ae0be47029d600dd106154019_grande.jpg"
                              src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" alt=" Gerbera Dress 1VA1002DO " />
                          </picture>
                          <picture>
                            <source media="(max-width: 480px)" data-srcset="//product.hstatic.net/200000258383/product/dsc07027_b48c6cf5d5844d40811252d86306f295_large.jpg"
                              srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=">
                            <source media="(min-width: 481px) and (max-width: 767px)" data-srcset="//product.hstatic.net/200000258383/product/dsc07027_b48c6cf5d5844d40811252d86306f295_large.jpg"
                              srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=">
                            <source media="(min-width: 768px)" data-srcset="//product.hstatic.net/200000258383/product/dsc07027_b48c6cf5d5844d40811252d86306f295_large.jpg"
                              srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=">
                            <img class="img-loop img-hover lazyload" data-src="//product.hstatic.net/200000258383/product/dsc07027_b48c6cf5d5844d40811252d86306f295_large.jpg"
                              src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" alt=" Gerbera Dress 1VA1002DO " />
                          </picture>
                        </a>
                        <div class="button-add hidden">
                          <button type="submit" title="Buy now" class="action" onclick="buy_now('1069997091')">Mua ngay<i class="fa fa-long-arrow-right"></i></button>
                        </div>
                        <div class="pro-price-mb">
                          <span class="pro-price">750,000₫</span>

                        </div>
                      </div>
                      <div class="product-detail clearfix">
                        <div class="box-pro-detail">
                          <h3 class="pro-name">
                            <a href="/products/vay-yem-nhun-nguc-1va1002do" title="Gerbera Dress 1VA1002DO">
                              Gerbera Dress 1VA1002DO
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

                  <div class="col-md-3 col-sm-6 col-xs-6 pro-loop col-4">










                    <div class="product-block product-resize ">
                      <div class="product-img ">



                        <a href="/products/vay-khoen-nguc-xe-dui-1va1015xt" title="Lavender Dress 1VA1015XT" class="image-resize ratiobox">
                          <picture>
                            <source media="(max-width: 480px)" data-srcset="//product.hstatic.net/200000258383/product/dsc09448_6c55957d1eda4933aa4cfa2eea57fef6_large.jpg"
                              srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" />
                            <source media="(min-width: 481px) and (max-width: 767px)" data-srcset="//product.hstatic.net/200000258383/product/dsc09448_6c55957d1eda4933aa4cfa2eea57fef6_large.jpg"
                              srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" />
                            <source media="(min-width: 768px)" data-srcset="//product.hstatic.net/200000258383/product/dsc09448_6c55957d1eda4933aa4cfa2eea57fef6_large.jpg"
                              srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" />
                            <img class="lazyload img-loop" data-sizes="auto" data-src="//product.hstatic.net/200000258383/product/dsc09448_6c55957d1eda4933aa4cfa2eea57fef6_large.jpg"
                              data-lowsrc="//product.hstatic.net/200000258383/product/dsc09448_6c55957d1eda4933aa4cfa2eea57fef6_grande.jpg"
                              src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" alt=" Lavender Dress 1VA1015XT " />
                          </picture>
                          <picture>
                            <source media="(max-width: 480px)" data-srcset="//product.hstatic.net/200000258383/product/dsc09513_8892936b508f4dbda2e78e53bd99d3a3_large.jpg"
                              srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=">
                            <source media="(min-width: 481px) and (max-width: 767px)" data-srcset="//product.hstatic.net/200000258383/product/dsc09513_8892936b508f4dbda2e78e53bd99d3a3_large.jpg"
                              srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=">
                            <source media="(min-width: 768px)" data-srcset="//product.hstatic.net/200000258383/product/dsc09513_8892936b508f4dbda2e78e53bd99d3a3_large.jpg"
                              srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=">
                            <img class="img-loop img-hover lazyload" data-src="//product.hstatic.net/200000258383/product/dsc09513_8892936b508f4dbda2e78e53bd99d3a3_large.jpg"
                              src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" alt=" Lavender Dress 1VA1015XT " />
                          </picture>
                        </a>
                        <div class="button-add hidden">
                          <button type="submit" title="Buy now" class="action" onclick="buy_now('1070059051')">Mua ngay<i class="fa fa-long-arrow-right"></i></button>
                        </div>
                        <div class="pro-price-mb">
                          <span class="pro-price">1,250,000₫</span>

                        </div>
                      </div>
                      <div class="product-detail clearfix">
                        <div class="box-pro-detail">
                          <h3 class="pro-name">
                            <a href="/products/vay-khoen-nguc-xe-dui-1va1015xt" title="Lavender Dress 1VA1015XT">
                              Lavender Dress 1VA1015XT
                            </a>
                          </h3>
                          <div class="box-pro-prices">
                            <p class="pro-price ">
                              <span>1,250,000₫</span>

                            </p>
                          </div>
                        </div>
                      </div>
                    </div>



                  </div>

                  <div class="col-md-3 col-sm-6 col-xs-6 pro-loop col-4">










                    <div class="product-block product-resize ">
                      <div class="product-img ">



                        <a href="/products/vay-that-no-nguc-tung-nhun-1va968va" title="Glee Dress 1VA968VA" class="image-resize ratiobox">
                          <picture>
                            <source media="(max-width: 480px)" data-srcset="//product.hstatic.net/200000258383/product/dsc07962_605a08b074de42148dbbf1bc975a5115_large.jpg"
                              srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" />
                            <source media="(min-width: 481px) and (max-width: 767px)" data-srcset="//product.hstatic.net/200000258383/product/dsc07962_605a08b074de42148dbbf1bc975a5115_large.jpg"
                              srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" />
                            <source media="(min-width: 768px)" data-srcset="//product.hstatic.net/200000258383/product/dsc07962_605a08b074de42148dbbf1bc975a5115_large.jpg"
                              srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" />
                            <img class="lazyload img-loop" data-sizes="auto" data-src="//product.hstatic.net/200000258383/product/dsc07962_605a08b074de42148dbbf1bc975a5115_large.jpg"
                              data-lowsrc="//product.hstatic.net/200000258383/product/dsc07962_605a08b074de42148dbbf1bc975a5115_grande.jpg"
                              src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" alt=" Glee Dress 1VA968VA " />
                          </picture>
                          <picture>
                            <source media="(max-width: 480px)" data-srcset="//product.hstatic.net/200000258383/product/dsc07817_7209a35a42004ea298963b4157cc1e2f_large.jpg"
                              srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=">
                            <source media="(min-width: 481px) and (max-width: 767px)" data-srcset="//product.hstatic.net/200000258383/product/dsc07817_7209a35a42004ea298963b4157cc1e2f_large.jpg"
                              srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=">
                            <source media="(min-width: 768px)" data-srcset="//product.hstatic.net/200000258383/product/dsc07817_7209a35a42004ea298963b4157cc1e2f_large.jpg"
                              srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=">
                            <img class="img-loop img-hover lazyload" data-src="//product.hstatic.net/200000258383/product/dsc07817_7209a35a42004ea298963b4157cc1e2f_large.jpg"
                              src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" alt=" Glee Dress 1VA968VA " />
                          </picture>
                        </a>
                        <div class="button-add hidden">
                          <button type="submit" title="Buy now" class="action" onclick="buy_now('1070141403')">Mua ngay<i class="fa fa-long-arrow-right"></i></button>
                        </div>
                        <div class="pro-price-mb">
                          <span class="pro-price">695,000₫</span>

                        </div>
                      </div>
                      <div class="product-detail clearfix">
                        <div class="box-pro-detail">
                          <h3 class="pro-name">
                            <a href="/products/vay-that-no-nguc-tung-nhun-1va968va" title="Glee Dress 1VA968VA">
                              Glee Dress 1VA968VA
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

                  <div class="col-md-3 col-sm-6 col-xs-6 pro-loop col-4">










                    <div class="product-block product-resize ">
                      <div class="product-img ">



                        <a href="/products/vay-cup-nguc-duoi-ca-1va1021ti" title="Salvia Dress 1VA1021TI" class="image-resize ratiobox">
                          <picture>
                            <source media="(max-width: 480px)" data-srcset="//product.hstatic.net/200000258383/product/dsc09373_a79c6802de02496b827f213a97e666a3_large.jpg"
                              srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" />
                            <source media="(min-width: 481px) and (max-width: 767px)" data-srcset="//product.hstatic.net/200000258383/product/dsc09373_a79c6802de02496b827f213a97e666a3_large.jpg"
                              srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" />
                            <source media="(min-width: 768px)" data-srcset="//product.hstatic.net/200000258383/product/dsc09373_a79c6802de02496b827f213a97e666a3_large.jpg"
                              srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" />
                            <img class="lazyload img-loop" data-sizes="auto" data-src="//product.hstatic.net/200000258383/product/dsc09373_a79c6802de02496b827f213a97e666a3_large.jpg"
                              data-lowsrc="//product.hstatic.net/200000258383/product/dsc09373_a79c6802de02496b827f213a97e666a3_grande.jpg"
                              src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" alt=" Salvia Dress 1VA1021TI " />
                          </picture>
                          <picture>
                            <source media="(max-width: 480px)" data-srcset="//product.hstatic.net/200000258383/product/dsc09413_7bc8d8c201984a5ab019108cce4c9691_large.jpg"
                              srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=">
                            <source media="(min-width: 481px) and (max-width: 767px)" data-srcset="//product.hstatic.net/200000258383/product/dsc09413_7bc8d8c201984a5ab019108cce4c9691_large.jpg"
                              srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=">
                            <source media="(min-width: 768px)" data-srcset="//product.hstatic.net/200000258383/product/dsc09413_7bc8d8c201984a5ab019108cce4c9691_large.jpg"
                              srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=">
                            <img class="img-loop img-hover lazyload" data-src="//product.hstatic.net/200000258383/product/dsc09413_7bc8d8c201984a5ab019108cce4c9691_large.jpg"
                              src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" alt=" Salvia Dress 1VA1021TI " />
                          </picture>
                        </a>
                        <div class="button-add hidden">
                          <button type="submit" title="Buy now" class="action" onclick="buy_now('1070278997')">Mua ngay<i class="fa fa-long-arrow-right"></i></button>
                        </div>
                        <div class="pro-price-mb">
                          <span class="pro-price">1,250,000₫</span>

                        </div>
                      </div>
                      <div class="product-detail clearfix">
                        <div class="box-pro-detail">
                          <h3 class="pro-name">
                            <a href="/products/vay-cup-nguc-duoi-ca-1va1021ti" title="Salvia Dress 1VA1021TI">
                              Salvia Dress 1VA1021TI
                            </a>
                          </h3>
                          <div class="box-pro-prices">
                            <p class="pro-price ">
                              <span>1,250,000₫</span>

                            </p>
                          </div>
                        </div>
                      </div>
                    </div>



                  </div>

                  <div class="col-md-3 col-sm-6 col-xs-6 pro-loop col-4">










                    <div class="product-block product-resize ">
                      <div class="product-img ">



                        <a href="/products/vay-yem-nhun-nguc-1va1002tr" title="Zinnia Dress 1VA1002TR" class="image-resize ratiobox">
                          <picture>
                            <source media="(max-width: 480px)" data-srcset="//product.hstatic.net/200000258383/product/dsc07256_94790b13c4784838b62bbc8c3e289a62_large.jpg"
                              srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" />
                            <source media="(min-width: 481px) and (max-width: 767px)" data-srcset="//product.hstatic.net/200000258383/product/dsc07256_94790b13c4784838b62bbc8c3e289a62_large.jpg"
                              srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" />
                            <source media="(min-width: 768px)" data-srcset="//product.hstatic.net/200000258383/product/dsc07256_94790b13c4784838b62bbc8c3e289a62_large.jpg"
                              srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" />
                            <img class="lazyload img-loop" data-sizes="auto" data-src="//product.hstatic.net/200000258383/product/dsc07256_94790b13c4784838b62bbc8c3e289a62_large.jpg"
                              data-lowsrc="//product.hstatic.net/200000258383/product/dsc07256_94790b13c4784838b62bbc8c3e289a62_grande.jpg"
                              src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" alt=" Zinnia Dress 1VA1002TR " />
                          </picture>
                          <picture>
                            <source media="(max-width: 480px)" data-srcset="//product.hstatic.net/200000258383/product/dsc07228_fc353ff5fa8b46059e4abbc1492f9f82_large.jpg"
                              srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=">
                            <source media="(min-width: 481px) and (max-width: 767px)" data-srcset="//product.hstatic.net/200000258383/product/dsc07228_fc353ff5fa8b46059e4abbc1492f9f82_large.jpg"
                              srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=">
                            <source media="(min-width: 768px)" data-srcset="//product.hstatic.net/200000258383/product/dsc07228_fc353ff5fa8b46059e4abbc1492f9f82_large.jpg"
                              srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=">
                            <img class="img-loop img-hover lazyload" data-src="//product.hstatic.net/200000258383/product/dsc07228_fc353ff5fa8b46059e4abbc1492f9f82_large.jpg"
                              src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" alt=" Zinnia Dress 1VA1002TR " />
                          </picture>
                        </a>
                        <div class="button-add hidden">
                          <button type="submit" title="Buy now" class="action" onclick="buy_now('1070288479')">Mua ngay<i class="fa fa-long-arrow-right"></i></button>
                        </div>
                        <div class="pro-price-mb">
                          <span class="pro-price">750,000₫</span>

                        </div>
                      </div>
                      <div class="product-detail clearfix">
                        <div class="box-pro-detail">
                          <h3 class="pro-name">
                            <a href="/products/vay-yem-nhun-nguc-1va1002tr" title="Zinnia Dress 1VA1002TR">
                              Zinnia Dress 1VA1002TR
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

                  <div class="col-md-3 col-sm-6 col-xs-6 pro-loop col-4">










                    <div class="product-block product-resize ">
                      <div class="product-img ">



                        <a href="/products/jum-ke-1va990ke" title="Wavy Jum 1VA990KE" class="image-resize ratiobox">
                          <picture>
                            <source media="(max-width: 480px)" data-srcset="//product.hstatic.net/200000258383/product/dsc09868_450e52fee5ef41da9194c1865f2eb0c8_large.jpg"
                              srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" />
                            <source media="(min-width: 481px) and (max-width: 767px)" data-srcset="//product.hstatic.net/200000258383/product/dsc09868_450e52fee5ef41da9194c1865f2eb0c8_large.jpg"
                              srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" />
                            <source media="(min-width: 768px)" data-srcset="//product.hstatic.net/200000258383/product/dsc09868_450e52fee5ef41da9194c1865f2eb0c8_large.jpg"
                              srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" />
                            <img class="lazyload img-loop" data-sizes="auto" data-src="//product.hstatic.net/200000258383/product/dsc09868_450e52fee5ef41da9194c1865f2eb0c8_large.jpg"
                              data-lowsrc="//product.hstatic.net/200000258383/product/dsc09868_450e52fee5ef41da9194c1865f2eb0c8_grande.jpg"
                              src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" alt=" Wavy Jum 1VA990KE " />
                          </picture>
                          <picture>
                            <source media="(max-width: 480px)" data-srcset="//product.hstatic.net/200000258383/product/dsc09884_dbb0274f0c174ea991537ac9f009532c_large.jpg"
                              srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=">
                            <source media="(min-width: 481px) and (max-width: 767px)" data-srcset="//product.hstatic.net/200000258383/product/dsc09884_dbb0274f0c174ea991537ac9f009532c_large.jpg"
                              srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=">
                            <source media="(min-width: 768px)" data-srcset="//product.hstatic.net/200000258383/product/dsc09884_dbb0274f0c174ea991537ac9f009532c_large.jpg"
                              srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=">
                            <img class="img-loop img-hover lazyload" data-src="//product.hstatic.net/200000258383/product/dsc09884_dbb0274f0c174ea991537ac9f009532c_large.jpg"
                              src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" alt=" Wavy Jum 1VA990KE " />
                          </picture>
                        </a>
                        <div class="button-add hidden">
                          <button type="submit" title="Buy now" class="action" onclick="buy_now('1070288392')">Mua ngay<i class="fa fa-long-arrow-right"></i></button>
                        </div>
                        <div class="pro-price-mb">
                          <span class="pro-price">1,250,000₫</span>

                        </div>
                      </div>
                      <div class="product-detail clearfix">
                        <div class="box-pro-detail">
                          <h3 class="pro-name">
                            <a href="/products/jum-ke-1va990ke" title="Wavy Jum 1VA990KE">
                              Wavy Jum 1VA990KE
                            </a>
                          </h3>
                          <div class="box-pro-prices">
                            <p class="pro-price ">
                              <span>1,250,000₫</span>

                            </p>
                          </div>
                        </div>
                      </div>
                    </div>



                  </div>

                  <div class="col-md-3 col-sm-6 col-xs-6 pro-loop col-4">










                    <div class="product-block product-resize ">
                      <div class="product-img ">



                        <a href="/products/vay-maxi-tay-beo-1va919do" title="Dally Dress 1VA919DO" class="image-resize ratiobox">
                          <picture>
                            <source media="(max-width: 480px)" data-srcset="//product.hstatic.net/200000258383/product/dsc06890_3aab00b21fa54b3da8769d95fcd5b6c8_large.jpg"
                              srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" />
                            <source media="(min-width: 481px) and (max-width: 767px)" data-srcset="//product.hstatic.net/200000258383/product/dsc06890_3aab00b21fa54b3da8769d95fcd5b6c8_large.jpg"
                              srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" />
                            <source media="(min-width: 768px)" data-srcset="//product.hstatic.net/200000258383/product/dsc06890_3aab00b21fa54b3da8769d95fcd5b6c8_large.jpg"
                              srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" />
                            <img class="lazyload img-loop" data-sizes="auto" data-src="//product.hstatic.net/200000258383/product/dsc06890_3aab00b21fa54b3da8769d95fcd5b6c8_large.jpg"
                              data-lowsrc="//product.hstatic.net/200000258383/product/dsc06890_3aab00b21fa54b3da8769d95fcd5b6c8_grande.jpg"
                              src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" alt=" Dally Dress 1VA919DO " />
                          </picture>
                          <picture>
                            <source media="(max-width: 480px)" data-srcset="//product.hstatic.net/200000258383/product/dsc06824_069a9fdf1b064c6b8c3c8289938bb2ab_large.jpg"
                              srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=">
                            <source media="(min-width: 481px) and (max-width: 767px)" data-srcset="//product.hstatic.net/200000258383/product/dsc06824_069a9fdf1b064c6b8c3c8289938bb2ab_large.jpg"
                              srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=">
                            <source media="(min-width: 768px)" data-srcset="//product.hstatic.net/200000258383/product/dsc06824_069a9fdf1b064c6b8c3c8289938bb2ab_large.jpg"
                              srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=">
                            <img class="img-loop img-hover lazyload" data-src="//product.hstatic.net/200000258383/product/dsc06824_069a9fdf1b064c6b8c3c8289938bb2ab_large.jpg"
                              src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" alt=" Dally Dress 1VA919DO " />
                          </picture>
                        </a>
                        <div class="button-add hidden">
                          <button type="submit" title="Buy now" class="action" onclick="buy_now('1070388759')">Mua ngay<i class="fa fa-long-arrow-right"></i></button>
                        </div>
                        <div class="pro-price-mb">
                          <span class="pro-price">850,000₫</span>

                        </div>
                      </div>
                      <div class="product-detail clearfix">
                        <div class="box-pro-detail">
                          <h3 class="pro-name">
                            <a href="/products/vay-maxi-tay-beo-1va919do" title="Dally Dress 1VA919DO">
                              Dally Dress 1VA919DO
                            </a>
                          </h3>
                          <div class="box-pro-prices">
                            <p class="pro-price ">
                              <span>850,000₫</span>

                            </p>
                          </div>
                        </div>
                      </div>
                    </div>



                  </div>

                  <div class="col-md-3 col-sm-6 col-xs-6 pro-loop col-4">









                    <div class="product-block product-resize ">
                      <div class="product-img ">

                        <div class="sold-out"><span>Hết hàng</span></div>

                        <a href="/products/vay-dai-do-vat-cheo-lung-1va974do" title="Sharon Dress 1VA974DO" class="image-resize ratiobox">
                          <picture>
                            <source media="(max-width: 480px)" data-srcset="//product.hstatic.net/200000258383/product/dsc08917-2_df266bb98daa44b496c41fa582f47ae3_large.jpg"
                              srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" />
                            <source media="(min-width: 481px) and (max-width: 767px)" data-srcset="//product.hstatic.net/200000258383/product/dsc08917-2_df266bb98daa44b496c41fa582f47ae3_large.jpg"
                              srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" />
                            <source media="(min-width: 768px)" data-srcset="//product.hstatic.net/200000258383/product/dsc08917-2_df266bb98daa44b496c41fa582f47ae3_large.jpg"
                              srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" />
                            <img class="lazyload img-loop" data-sizes="auto" data-src="//product.hstatic.net/200000258383/product/dsc08917-2_df266bb98daa44b496c41fa582f47ae3_large.jpg"
                              data-lowsrc="//product.hstatic.net/200000258383/product/dsc08917-2_df266bb98daa44b496c41fa582f47ae3_grande.jpg"
                              src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" alt=" Sharon Dress 1VA974DO " />
                          </picture>
                          <picture>
                            <source media="(max-width: 480px)" data-srcset="//product.hstatic.net/200000258383/product/dsc08839-2_ac62704bb68441559e8124af3f55ca75_large.jpg"
                              srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=">
                            <source media="(min-width: 481px) and (max-width: 767px)" data-srcset="//product.hstatic.net/200000258383/product/dsc08839-2_ac62704bb68441559e8124af3f55ca75_large.jpg"
                              srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=">
                            <source media="(min-width: 768px)" data-srcset="//product.hstatic.net/200000258383/product/dsc08839-2_ac62704bb68441559e8124af3f55ca75_large.jpg"
                              srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=">
                            <img class="img-loop img-hover lazyload" data-src="//product.hstatic.net/200000258383/product/dsc08839-2_ac62704bb68441559e8124af3f55ca75_large.jpg"
                              src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" alt=" Sharon Dress 1VA974DO " />
                          </picture>
                        </a>
                        <div class="button-add hidden">
                          <button type="submit" title="Buy now" class="action" onclick="buy_now('1070266385')">Mua ngay<i class="fa fa-long-arrow-right"></i></button>
                        </div>
                        <div class="pro-price-mb">
                          <span class="pro-price">850,000₫</span>

                        </div>
                      </div>
                      <div class="product-detail clearfix">
                        <div class="box-pro-detail">
                          <h3 class="pro-name">
                            <a href="/products/vay-dai-do-vat-cheo-lung-1va974do" title="Sharon Dress 1VA974DO">
                              Sharon Dress 1VA974DO
                            </a>
                          </h3>
                          <div class="box-pro-prices">
                            <p class="pro-price ">
                              <span>850,000₫</span>

                            </p>
                          </div>
                        </div>
                      </div>
                    </div>



                  </div>

                  <div class="col-md-3 col-sm-6 col-xs-6 pro-loop col-4">










                    <div class="product-block product-resize ">
                      <div class="product-img ">



                        <a href="/products/vay-cham-bi-cup-nguc-1va969ca" title="Cosmo Dress 1VA969CA" class="image-resize ratiobox">
                          <picture>
                            <source media="(max-width: 480px)" data-srcset="//product.hstatic.net/200000258383/product/dsc07501_481032a2cdde4af1abe8244eafd22b07_large.jpg"
                              srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" />
                            <source media="(min-width: 481px) and (max-width: 767px)" data-srcset="//product.hstatic.net/200000258383/product/dsc07501_481032a2cdde4af1abe8244eafd22b07_large.jpg"
                              srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" />
                            <source media="(min-width: 768px)" data-srcset="//product.hstatic.net/200000258383/product/dsc07501_481032a2cdde4af1abe8244eafd22b07_large.jpg"
                              srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" />
                            <img class="lazyload img-loop" data-sizes="auto" data-src="//product.hstatic.net/200000258383/product/dsc07501_481032a2cdde4af1abe8244eafd22b07_large.jpg"
                              data-lowsrc="//product.hstatic.net/200000258383/product/dsc07501_481032a2cdde4af1abe8244eafd22b07_grande.jpg"
                              src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" alt=" Cosmo Dress 1VA969CA " />
                          </picture>
                          <picture>
                            <source media="(max-width: 480px)" data-srcset="//product.hstatic.net/200000258383/product/dsc07443_9004a32c602b47e3a3bf6b781169578e_large.jpg"
                              srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=">
                            <source media="(min-width: 481px) and (max-width: 767px)" data-srcset="//product.hstatic.net/200000258383/product/dsc07443_9004a32c602b47e3a3bf6b781169578e_large.jpg"
                              srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=">
                            <source media="(min-width: 768px)" data-srcset="//product.hstatic.net/200000258383/product/dsc07443_9004a32c602b47e3a3bf6b781169578e_large.jpg"
                              srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=">
                            <img class="img-loop img-hover lazyload" data-src="//product.hstatic.net/200000258383/product/dsc07443_9004a32c602b47e3a3bf6b781169578e_large.jpg"
                              src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" alt=" Cosmo Dress 1VA969CA " />
                          </picture>
                        </a>
                        <div class="button-add hidden">
                          <button type="submit" title="Buy now" class="action" onclick="buy_now('1069946062')">Mua ngay<i class="fa fa-long-arrow-right"></i></button>
                        </div>
                        <div class="pro-price-mb">
                          <span class="pro-price">850,000₫</span>

                        </div>
                      </div>
                      <div class="product-detail clearfix">
                        <div class="box-pro-detail">
                          <h3 class="pro-name">
                            <a href="/products/vay-cham-bi-cup-nguc-1va969ca" title="Cosmo Dress 1VA969CA">
                              Cosmo Dress 1VA969CA
                            </a>
                          </h3>
                          <div class="box-pro-prices">
                            <p class="pro-price ">
                              <span>850,000₫</span>

                            </p>
                          </div>
                        </div>
                      </div>
                    </div>



                  </div>

                  <div class="col-md-3 col-sm-6 col-xs-6 pro-loop col-4">










                    <div class="product-block product-resize ">
                      <div class="product-img ">



                        <a href="/products/vay-cup-nguc-dan-lung-1va1078va" title="Barley Dress 1VA1078VA" class="image-resize ratiobox">
                          <picture>
                            <source media="(max-width: 480px)" data-srcset="//product.hstatic.net/200000258383/product/dsc06571_96c06c71b46b432492c46e350616e47c_large.jpg"
                              srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" />
                            <source media="(min-width: 481px) and (max-width: 767px)" data-srcset="//product.hstatic.net/200000258383/product/dsc06571_96c06c71b46b432492c46e350616e47c_large.jpg"
                              srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" />
                            <source media="(min-width: 768px)" data-srcset="//product.hstatic.net/200000258383/product/dsc06571_96c06c71b46b432492c46e350616e47c_large.jpg"
                              srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" />
                            <img class="lazyload img-loop" data-sizes="auto" data-src="//product.hstatic.net/200000258383/product/dsc06571_96c06c71b46b432492c46e350616e47c_large.jpg"
                              data-lowsrc="//product.hstatic.net/200000258383/product/dsc06571_96c06c71b46b432492c46e350616e47c_grande.jpg"
                              src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" alt=" Barley Dress 1VA1078VA " />
                          </picture>
                          <picture>
                            <source media="(max-width: 480px)" data-srcset="//product.hstatic.net/200000258383/product/dsc06603_b65b6300fb5744f688498c51d1eeca54_large.jpg"
                              srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=">
                            <source media="(min-width: 481px) and (max-width: 767px)" data-srcset="//product.hstatic.net/200000258383/product/dsc06603_b65b6300fb5744f688498c51d1eeca54_large.jpg"
                              srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=">
                            <source media="(min-width: 768px)" data-srcset="//product.hstatic.net/200000258383/product/dsc06603_b65b6300fb5744f688498c51d1eeca54_large.jpg"
                              srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=">
                            <img class="img-loop img-hover lazyload" data-src="//product.hstatic.net/200000258383/product/dsc06603_b65b6300fb5744f688498c51d1eeca54_large.jpg"
                              src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" alt=" Barley Dress 1VA1078VA " />
                          </picture>
                        </a>
                        <div class="button-add hidden">
                          <button type="submit" title="Buy now" class="action" onclick="buy_now('1070485094')">Mua ngay<i class="fa fa-long-arrow-right"></i></button>
                        </div>
                        <div class="pro-price-mb">
                          <span class="pro-price">750,000₫</span>

                        </div>
                      </div>
                      <div class="product-detail clearfix">
                        <div class="box-pro-detail">
                          <h3 class="pro-name">
                            <a href="/products/vay-cup-nguc-dan-lung-1va1078va" title="Barley Dress 1VA1078VA">
                              Barley Dress 1VA1078VA
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

                  <div class="col-md-3 col-sm-6 col-xs-6 pro-loop col-4">










                    <div class="product-block product-resize ">
                      <div class="product-img ">



                        <a href="/products/vay-cup-nguc-dan-day-lung-1va949va" title="Laliah Dress 1VA949VA" class="image-resize ratiobox">
                          <picture>
                            <source media="(max-width: 480px)" data-srcset="//product.hstatic.net/200000258383/product/dsc06395_716fd9fcb3b8413a942d07f24e442a4c_large.jpg"
                              srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" />
                            <source media="(min-width: 481px) and (max-width: 767px)" data-srcset="//product.hstatic.net/200000258383/product/dsc06395_716fd9fcb3b8413a942d07f24e442a4c_large.jpg"
                              srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" />
                            <source media="(min-width: 768px)" data-srcset="//product.hstatic.net/200000258383/product/dsc06395_716fd9fcb3b8413a942d07f24e442a4c_large.jpg"
                              srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" />
                            <img class="lazyload img-loop" data-sizes="auto" data-src="//product.hstatic.net/200000258383/product/dsc06395_716fd9fcb3b8413a942d07f24e442a4c_large.jpg"
                              data-lowsrc="//product.hstatic.net/200000258383/product/dsc06395_716fd9fcb3b8413a942d07f24e442a4c_grande.jpg"
                              src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" alt=" Laliah Dress 1VA949VA " />
                          </picture>
                          <picture>
                            <source media="(max-width: 480px)" data-srcset="//product.hstatic.net/200000258383/product/dsc06409_23d6f9cffa494df4813dadff4008c099_large.jpg"
                              srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=">
                            <source media="(min-width: 481px) and (max-width: 767px)" data-srcset="//product.hstatic.net/200000258383/product/dsc06409_23d6f9cffa494df4813dadff4008c099_large.jpg"
                              srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=">
                            <source media="(min-width: 768px)" data-srcset="//product.hstatic.net/200000258383/product/dsc06409_23d6f9cffa494df4813dadff4008c099_large.jpg"
                              srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=">
                            <img class="img-loop img-hover lazyload" data-src="//product.hstatic.net/200000258383/product/dsc06409_23d6f9cffa494df4813dadff4008c099_large.jpg"
                              src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" alt=" Laliah Dress 1VA949VA " />
                          </picture>
                        </a>
                        <div class="button-add hidden">
                          <button type="submit" title="Buy now" class="action" onclick="buy_now('1069656985')">Mua ngay<i class="fa fa-long-arrow-right"></i></button>
                        </div>
                        <div class="pro-price-mb">
                          <span class="pro-price">1,250,000₫</span>

                        </div>
                      </div>
                      <div class="product-detail clearfix">
                        <div class="box-pro-detail">
                          <h3 class="pro-name">
                            <a href="/products/vay-cup-nguc-dan-day-lung-1va949va" title="Laliah Dress 1VA949VA">
                              Laliah Dress 1VA949VA
                            </a>
                          </h3>
                          <div class="box-pro-prices">
                            <p class="pro-price ">
                              <span>1,250,000₫</span>

                            </p>
                          </div>
                        </div>
                      </div>
                    </div>



                  </div>

                  <div class="col-md-3 col-sm-6 col-xs-6 pro-loop col-4">









                    <div class="product-block product-resize ">
                      <div class="product-img ">

                        <div class="sold-out"><span>Hết hàng</span></div>

                        <a href="/products/1va908ho" title="Vera Dress 1VA908HO" class="image-resize ratiobox">
                          <picture>
                            <source media="(max-width: 480px)" data-srcset="//product.hstatic.net/200000258383/product/dsc08500-2_c09ef3ea669f466ca2bdb377cdcefdfa_large.jpg"
                              srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" />
                            <source media="(min-width: 481px) and (max-width: 767px)" data-srcset="//product.hstatic.net/200000258383/product/dsc08500-2_c09ef3ea669f466ca2bdb377cdcefdfa_large.jpg"
                              srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" />
                            <source media="(min-width: 768px)" data-srcset="//product.hstatic.net/200000258383/product/dsc08500-2_c09ef3ea669f466ca2bdb377cdcefdfa_large.jpg"
                              srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" />
                            <img class="lazyload img-loop" data-sizes="auto" data-src="//product.hstatic.net/200000258383/product/dsc08500-2_c09ef3ea669f466ca2bdb377cdcefdfa_large.jpg"
                              data-lowsrc="//product.hstatic.net/200000258383/product/dsc08500-2_c09ef3ea669f466ca2bdb377cdcefdfa_grande.jpg"
                              src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" alt=" Vera Dress 1VA908HO " />
                          </picture>
                          <picture>
                            <source media="(max-width: 480px)" data-srcset="//product.hstatic.net/200000258383/product/dsc08366-2_b8068dddf9df49cc809014a5123d8f4d_large.jpg"
                              srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=">
                            <source media="(min-width: 481px) and (max-width: 767px)" data-srcset="//product.hstatic.net/200000258383/product/dsc08366-2_b8068dddf9df49cc809014a5123d8f4d_large.jpg"
                              srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=">
                            <source media="(min-width: 768px)" data-srcset="//product.hstatic.net/200000258383/product/dsc08366-2_b8068dddf9df49cc809014a5123d8f4d_large.jpg"
                              srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=">
                            <img class="img-loop img-hover lazyload" data-src="//product.hstatic.net/200000258383/product/dsc08366-2_b8068dddf9df49cc809014a5123d8f4d_large.jpg"
                              src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" alt=" Vera Dress 1VA908HO " />
                          </picture>
                        </a>
                        <div class="button-add hidden">
                          <button type="submit" title="Buy now" class="action" onclick="buy_now('1069949556')">Mua ngay<i class="fa fa-long-arrow-right"></i></button>
                        </div>
                        <div class="pro-price-mb">
                          <span class="pro-price">1,250,000₫</span>

                        </div>
                      </div>
                      <div class="product-detail clearfix">
                        <div class="box-pro-detail">
                          <h3 class="pro-name">
                            <a href="/products/1va908ho" title="Vera Dress 1VA908HO">
                              Vera Dress 1VA908HO
                            </a>
                          </h3>
                          <div class="box-pro-prices">
                            <p class="pro-price ">
                              <span>1,250,000₫</span>

                            </p>
                          </div>
                        </div>
                      </div>
                    </div>



                  </div>

                  <div class="col-md-3 col-sm-6 col-xs-6 pro-loop col-4">









                    <div class="product-block product-resize ">
                      <div class="product-img ">

                        <div class="sold-out"><span>Hết hàng</span></div>

                        <a href="/products/vay-ke-wrap-1va944ke" title="Coralie Dress 1VA944KE" class="image-resize ratiobox">
                          <picture>
                            <source media="(max-width: 480px)" data-srcset="//product.hstatic.net/200000258383/product/z2441120285531_27240826a58a11ff5cb6cb273f59a7d9_6956d8964dc14dec9ddf110f2b3556ab_large.jpg"
                              srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" />
                            <source media="(min-width: 481px) and (max-width: 767px)" data-srcset="//product.hstatic.net/200000258383/product/z2441120285531_27240826a58a11ff5cb6cb273f59a7d9_6956d8964dc14dec9ddf110f2b3556ab_large.jpg"
                              srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" />
                            <source media="(min-width: 768px)" data-srcset="//product.hstatic.net/200000258383/product/z2441120285531_27240826a58a11ff5cb6cb273f59a7d9_6956d8964dc14dec9ddf110f2b3556ab_large.jpg"
                              srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" />
                            <img class="lazyload img-loop" data-sizes="auto" data-src="//product.hstatic.net/200000258383/product/z2441120285531_27240826a58a11ff5cb6cb273f59a7d9_6956d8964dc14dec9ddf110f2b3556ab_large.jpg"
                              data-lowsrc="//product.hstatic.net/200000258383/product/z2441120285531_27240826a58a11ff5cb6cb273f59a7d9_6956d8964dc14dec9ddf110f2b3556ab_grande.jpg"
                              src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" alt=" Coralie Dress 1VA944KE " />
                          </picture>
                          <picture>
                            <source media="(max-width: 480px)" data-srcset="//product.hstatic.net/200000258383/product/z2441120827884_ba5d4ddd4c0cf636bb0f71b429a6c03e_2ac3ced31d75492491c425496232979c_large.jpg"
                              srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=">
                            <source media="(min-width: 481px) and (max-width: 767px)" data-srcset="//product.hstatic.net/200000258383/product/z2441120827884_ba5d4ddd4c0cf636bb0f71b429a6c03e_2ac3ced31d75492491c425496232979c_large.jpg"
                              srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=">
                            <source media="(min-width: 768px)" data-srcset="//product.hstatic.net/200000258383/product/z2441120827884_ba5d4ddd4c0cf636bb0f71b429a6c03e_2ac3ced31d75492491c425496232979c_large.jpg"
                              srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=">
                            <img class="img-loop img-hover lazyload" data-src="//product.hstatic.net/200000258383/product/z2441120827884_ba5d4ddd4c0cf636bb0f71b429a6c03e_2ac3ced31d75492491c425496232979c_large.jpg"
                              src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" alt=" Coralie Dress 1VA944KE " />
                          </picture>
                        </a>
                        <div class="button-add hidden">
                          <button type="submit" title="Buy now" class="action" onclick="buy_now('1069656559')">Mua ngay<i class="fa fa-long-arrow-right"></i></button>
                        </div>
                        <div class="pro-price-mb">
                          <span class="pro-price">1,050,000₫</span>

                        </div>
                      </div>
                      <div class="product-detail clearfix">
                        <div class="box-pro-detail">
                          <h3 class="pro-name">
                            <a href="/products/vay-ke-wrap-1va944ke" title="Coralie Dress 1VA944KE">
                              Coralie Dress 1VA944KE
                            </a>
                          </h3>
                          <div class="box-pro-prices">
                            <p class="pro-price ">
                              <span>1,050,000₫</span>

                            </p>
                          </div>
                        </div>
                      </div>
                    </div>



                  </div>

                  <div class="col-md-3 col-sm-6 col-xs-6 pro-loop col-4">










                    <div class="product-block product-resize ">
                      <div class="product-img ">



                        <a href="/products/yem-buoc-co-beo-1va939xl" title="Savanna Dress 1VA939XL" class="image-resize ratiobox">
                          <picture>
                            <source media="(max-width: 480px)" data-srcset="//product.hstatic.net/200000258383/product/dsc07718_2e84a2924f6a40dbb73fd9922be9fee9_large.jpg"
                              srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" />
                            <source media="(min-width: 481px) and (max-width: 767px)" data-srcset="//product.hstatic.net/200000258383/product/dsc07718_2e84a2924f6a40dbb73fd9922be9fee9_large.jpg"
                              srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" />
                            <source media="(min-width: 768px)" data-srcset="//product.hstatic.net/200000258383/product/dsc07718_2e84a2924f6a40dbb73fd9922be9fee9_large.jpg"
                              srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" />
                            <img class="lazyload img-loop" data-sizes="auto" data-src="//product.hstatic.net/200000258383/product/dsc07718_2e84a2924f6a40dbb73fd9922be9fee9_large.jpg"
                              data-lowsrc="//product.hstatic.net/200000258383/product/dsc07718_2e84a2924f6a40dbb73fd9922be9fee9_grande.jpg"
                              src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" alt=" Savanna Dress 1VA939XL " />
                          </picture>
                          <picture>
                            <source media="(max-width: 480px)" data-srcset="//product.hstatic.net/200000258383/product/dsc07587_9ee3d5f24380454f912bbc7834dc2180_large.jpg"
                              srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=">
                            <source media="(min-width: 481px) and (max-width: 767px)" data-srcset="//product.hstatic.net/200000258383/product/dsc07587_9ee3d5f24380454f912bbc7834dc2180_large.jpg"
                              srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=">
                            <source media="(min-width: 768px)" data-srcset="//product.hstatic.net/200000258383/product/dsc07587_9ee3d5f24380454f912bbc7834dc2180_large.jpg"
                              srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=">
                            <img class="img-loop img-hover lazyload" data-src="//product.hstatic.net/200000258383/product/dsc07587_9ee3d5f24380454f912bbc7834dc2180_large.jpg"
                              src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" alt=" Savanna Dress 1VA939XL " />
                          </picture>
                        </a>
                        <div class="button-add hidden">
                          <button type="submit" title="Buy now" class="action" onclick="buy_now('1069703146')">Mua ngay<i class="fa fa-long-arrow-right"></i></button>
                        </div>
                        <div class="pro-price-mb">
                          <span class="pro-price">1,250,000₫</span>

                        </div>
                      </div>
                      <div class="product-detail clearfix">
                        <div class="box-pro-detail">
                          <h3 class="pro-name">
                            <a href="/products/yem-buoc-co-beo-1va939xl" title="Savanna Dress 1VA939XL">
                              Savanna Dress 1VA939XL
                            </a>
                          </h3>
                          <div class="box-pro-prices">
                            <p class="pro-price ">
                              <span>1,250,000₫</span>

                            </p>
                          </div>
                        </div>
                      </div>
                    </div>



                  </div>

                  <div class="col-md-3 col-sm-6 col-xs-6 pro-loop col-4">










                    <div class="product-block product-resize ">
                      <div class="product-img ">



                        <a href="/products/vay-cup-nguc-lung-beo-1va945xl" title="Iris Dres 1VA945XL" class="image-resize ratiobox">
                          <picture>
                            <source media="(max-width: 480px)" data-srcset="//product.hstatic.net/200000258383/product/dsc09125_76276424e9d64b438a2c426738400592_large.jpg"
                              srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" />
                            <source media="(min-width: 481px) and (max-width: 767px)" data-srcset="//product.hstatic.net/200000258383/product/dsc09125_76276424e9d64b438a2c426738400592_large.jpg"
                              srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" />
                            <source media="(min-width: 768px)" data-srcset="//product.hstatic.net/200000258383/product/dsc09125_76276424e9d64b438a2c426738400592_large.jpg"
                              srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" />
                            <img class="lazyload img-loop" data-sizes="auto" data-src="//product.hstatic.net/200000258383/product/dsc09125_76276424e9d64b438a2c426738400592_large.jpg"
                              data-lowsrc="//product.hstatic.net/200000258383/product/dsc09125_76276424e9d64b438a2c426738400592_grande.jpg"
                              src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" alt=" Iris Dres 1VA945XL " />
                          </picture>
                          <picture>
                            <source media="(max-width: 480px)" data-srcset="//product.hstatic.net/200000258383/product/dsc09109_1c0e154bce4f4bac97a14b1cb60422fd_large.jpg"
                              srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=">
                            <source media="(min-width: 481px) and (max-width: 767px)" data-srcset="//product.hstatic.net/200000258383/product/dsc09109_1c0e154bce4f4bac97a14b1cb60422fd_large.jpg"
                              srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=">
                            <source media="(min-width: 768px)" data-srcset="//product.hstatic.net/200000258383/product/dsc09109_1c0e154bce4f4bac97a14b1cb60422fd_large.jpg"
                              srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=">
                            <img class="img-loop img-hover lazyload" data-src="//product.hstatic.net/200000258383/product/dsc09109_1c0e154bce4f4bac97a14b1cb60422fd_large.jpg"
                              src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" alt=" Iris Dres 1VA945XL " />
                          </picture>
                        </a>
                        <div class="button-add hidden">
                          <button type="submit" title="Buy now" class="action" onclick="buy_now('1070222602')">Mua ngay<i class="fa fa-long-arrow-right"></i></button>
                        </div>
                        <div class="pro-price-mb">
                          <span class="pro-price">1,250,000₫</span>

                        </div>
                      </div>
                      <div class="product-detail clearfix">
                        <div class="box-pro-detail">
                          <h3 class="pro-name">
                            <a href="/products/vay-cup-nguc-lung-beo-1va945xl" title="Iris Dres 1VA945XL">
                              Iris Dres 1VA945XL
                            </a>
                          </h3>
                          <div class="box-pro-prices">
                            <p class="pro-price ">
                              <span>1,250,000₫</span>

                            </p>
                          </div>
                        </div>
                      </div>
                    </div>



                  </div>

                  <div class="col-md-3 col-sm-6 col-xs-6 pro-loop col-4">









                    <div class="product-block product-resize ">
                      <div class="product-img ">

                        <div class="sold-out"><span>Hết hàng</span></div>

                        <a href="/products/vay-rut-nguc-xe-dui-1va1031ti" title="Freesia Dress 1VA1031TI" class="image-resize ratiobox">
                          <picture>
                            <source media="(max-width: 480px)" data-srcset="//product.hstatic.net/200000258383/product/dsc06195_e0b87e7b8c1848adadbd5706824325f2_large.jpg"
                              srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" />
                            <source media="(min-width: 481px) and (max-width: 767px)" data-srcset="//product.hstatic.net/200000258383/product/dsc06195_e0b87e7b8c1848adadbd5706824325f2_large.jpg"
                              srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" />
                            <source media="(min-width: 768px)" data-srcset="//product.hstatic.net/200000258383/product/dsc06195_e0b87e7b8c1848adadbd5706824325f2_large.jpg"
                              srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" />
                            <img class="lazyload img-loop" data-sizes="auto" data-src="//product.hstatic.net/200000258383/product/dsc06195_e0b87e7b8c1848adadbd5706824325f2_large.jpg"
                              data-lowsrc="//product.hstatic.net/200000258383/product/dsc06195_e0b87e7b8c1848adadbd5706824325f2_grande.jpg"
                              src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" alt=" Freesia Dress 1VA1031TI " />
                          </picture>
                          <picture>
                            <source media="(max-width: 480px)" data-srcset="//product.hstatic.net/200000258383/product/dsc06282_8a553f4fe1164c79a6026149f64287b1_large.jpg"
                              srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=">
                            <source media="(min-width: 481px) and (max-width: 767px)" data-srcset="//product.hstatic.net/200000258383/product/dsc06282_8a553f4fe1164c79a6026149f64287b1_large.jpg"
                              srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=">
                            <source media="(min-width: 768px)" data-srcset="//product.hstatic.net/200000258383/product/dsc06282_8a553f4fe1164c79a6026149f64287b1_large.jpg"
                              srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=">
                            <img class="img-loop img-hover lazyload" data-src="//product.hstatic.net/200000258383/product/dsc06282_8a553f4fe1164c79a6026149f64287b1_large.jpg"
                              src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" alt=" Freesia Dress 1VA1031TI " />
                          </picture>
                        </a>
                        <div class="button-add hidden">
                          <button type="submit" title="Buy now" class="action" onclick="buy_now('1070044430')">Mua ngay<i class="fa fa-long-arrow-right"></i></button>
                        </div>
                        <div class="pro-price-mb">
                          <span class="pro-price">695,000₫</span>

                        </div>
                      </div>
                      <div class="product-detail clearfix">
                        <div class="box-pro-detail">
                          <h3 class="pro-name">
                            <a href="/products/vay-rut-nguc-xe-dui-1va1031ti" title="Freesia Dress 1VA1031TI">
                              Freesia Dress 1VA1031TI
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

                  <div class="col-md-3 col-sm-6 col-xs-6 pro-loop col-4">










                    <div class="product-block product-resize ">
                      <div class="product-img ">



                        <a href="/products/vay-nhun-nguc-co-beo-1va827xl" title="Váy nhún ngực có bèo 1VA827XL" class="image-resize ratiobox">
                          <picture>
                            <source media="(max-width: 480px)" data-srcset="//product.hstatic.net/200000258383/product/1va827xl_1_15825f42769e4767a6b35757eb37de45_large.jpg"
                              srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" />
                            <source media="(min-width: 481px) and (max-width: 767px)" data-srcset="//product.hstatic.net/200000258383/product/1va827xl_1_15825f42769e4767a6b35757eb37de45_large.jpg"
                              srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" />
                            <source media="(min-width: 768px)" data-srcset="//product.hstatic.net/200000258383/product/1va827xl_1_15825f42769e4767a6b35757eb37de45_large.jpg"
                              srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" />
                            <img class="lazyload img-loop" data-sizes="auto" data-src="//product.hstatic.net/200000258383/product/1va827xl_1_15825f42769e4767a6b35757eb37de45_large.jpg"
                              data-lowsrc="//product.hstatic.net/200000258383/product/1va827xl_1_15825f42769e4767a6b35757eb37de45_grande.jpg"
                              src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" alt=" Váy nhún ngực có bèo 1VA827XL " />
                          </picture>
                          <picture>
                            <source media="(max-width: 480px)" data-srcset="//product.hstatic.net/200000258383/product/1va827xl_f8a665df5b2540679fa8f582b4c01b91_large.jpg"
                              srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=">
                            <source media="(min-width: 481px) and (max-width: 767px)" data-srcset="//product.hstatic.net/200000258383/product/1va827xl_f8a665df5b2540679fa8f582b4c01b91_large.jpg"
                              srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=">
                            <source media="(min-width: 768px)" data-srcset="//product.hstatic.net/200000258383/product/1va827xl_f8a665df5b2540679fa8f582b4c01b91_large.jpg"
                              srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=">
                            <img class="img-loop img-hover lazyload" data-src="//product.hstatic.net/200000258383/product/1va827xl_f8a665df5b2540679fa8f582b4c01b91_large.jpg"
                              src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" alt=" Váy nhún ngực có bèo 1VA827XL " />
                          </picture>
                        </a>
                        <div class="button-add hidden">
                          <button type="submit" title="Buy now" class="action" onclick="buy_now('1067326679')">Mua ngay<i class="fa fa-long-arrow-right"></i></button>
                        </div>
                        <div class="pro-price-mb">
                          <span class="pro-price">750,000₫</span>

                        </div>
                      </div>
                      <div class="product-detail clearfix">
                        <div class="box-pro-detail">
                          <h3 class="pro-name">
                            <a href="/products/vay-nhun-nguc-co-beo-1va827xl" title="Váy nhún ngực có bèo 1VA827XL">
                              Váy nhún ngực có bèo 1VA827XL
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

                  <div class="col-md-3 col-sm-6 col-xs-6 pro-loop col-4">










                    <div class="product-block product-resize ">
                      <div class="product-img ">



                        <a href="/products/vay-nhun-buoc-dai-eo-1va840xl" title="Váy nhún buộc đai eo 1VA840XL" class="image-resize ratiobox">
                          <picture>
                            <source media="(max-width: 480px)" data-srcset="//product.hstatic.net/200000258383/product/1va840xl_ef66a4fe252e438bb0b75027010eb96e_large.jpg"
                              srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" />
                            <source media="(min-width: 481px) and (max-width: 767px)" data-srcset="//product.hstatic.net/200000258383/product/1va840xl_ef66a4fe252e438bb0b75027010eb96e_large.jpg"
                              srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" />
                            <source media="(min-width: 768px)" data-srcset="//product.hstatic.net/200000258383/product/1va840xl_ef66a4fe252e438bb0b75027010eb96e_large.jpg"
                              srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" />
                            <img class="lazyload img-loop" data-sizes="auto" data-src="//product.hstatic.net/200000258383/product/1va840xl_ef66a4fe252e438bb0b75027010eb96e_large.jpg"
                              data-lowsrc="//product.hstatic.net/200000258383/product/1va840xl_ef66a4fe252e438bb0b75027010eb96e_grande.jpg"
                              src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" alt=" Váy nhún buộc đai eo 1VA840XL " />
                          </picture>
                          <picture>
                            <source media="(max-width: 480px)" data-srcset="//product.hstatic.net/200000258383/product/1va840xl_1_82946242acb64005a4aebf915dfa2975_large.jpg"
                              srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=">
                            <source media="(min-width: 481px) and (max-width: 767px)" data-srcset="//product.hstatic.net/200000258383/product/1va840xl_1_82946242acb64005a4aebf915dfa2975_large.jpg"
                              srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=">
                            <source media="(min-width: 768px)" data-srcset="//product.hstatic.net/200000258383/product/1va840xl_1_82946242acb64005a4aebf915dfa2975_large.jpg"
                              srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=">
                            <img class="img-loop img-hover lazyload" data-src="//product.hstatic.net/200000258383/product/1va840xl_1_82946242acb64005a4aebf915dfa2975_large.jpg"
                              src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" alt=" Váy nhún buộc đai eo 1VA840XL " />
                          </picture>
                        </a>
                        <div class="button-add hidden">
                          <button type="submit" title="Buy now" class="action" onclick="buy_now('1067426841')">Mua ngay<i class="fa fa-long-arrow-right"></i></button>
                        </div>
                        <div class="pro-price-mb">
                          <span class="pro-price">695,000₫</span>

                        </div>
                      </div>
                      <div class="product-detail clearfix">
                        <div class="box-pro-detail">
                          <h3 class="pro-name">
                            <a href="/products/vay-nhun-buoc-dai-eo-1va840xl" title="Váy nhún buộc đai eo 1VA840XL">
                              Váy nhún buộc đai eo 1VA840XL
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

                  <div class="col-md-3 col-sm-6 col-xs-6 pro-loop col-4">










                    <div class="product-block product-resize ">
                      <div class="product-img ">



                        <a href="/products/vay-nhun-nguc-tay-bong-1va837ca" title="Váy nhún ngực tay bồng 1VA837CA" class="image-resize ratiobox">
                          <picture>
                            <source media="(max-width: 480px)" data-srcset="//product.hstatic.net/200000258383/product/1va837ca_56fa3449fd0045ffa5d22683b6bd2e88_large.jpg"
                              srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" />
                            <source media="(min-width: 481px) and (max-width: 767px)" data-srcset="//product.hstatic.net/200000258383/product/1va837ca_56fa3449fd0045ffa5d22683b6bd2e88_large.jpg"
                              srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" />
                            <source media="(min-width: 768px)" data-srcset="//product.hstatic.net/200000258383/product/1va837ca_56fa3449fd0045ffa5d22683b6bd2e88_large.jpg"
                              srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" />
                            <img class="lazyload img-loop" data-sizes="auto" data-src="//product.hstatic.net/200000258383/product/1va837ca_56fa3449fd0045ffa5d22683b6bd2e88_large.jpg"
                              data-lowsrc="//product.hstatic.net/200000258383/product/1va837ca_56fa3449fd0045ffa5d22683b6bd2e88_grande.jpg"
                              src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" alt=" Váy nhún ngực tay bồng 1VA837CA " />
                          </picture>
                          <picture>
                            <source media="(max-width: 480px)" data-srcset="//product.hstatic.net/200000258383/product/1va837ca_1_49a4964e9d244d948b5de1d6f7fbe94f_large.jpg"
                              srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=">
                            <source media="(min-width: 481px) and (max-width: 767px)" data-srcset="//product.hstatic.net/200000258383/product/1va837ca_1_49a4964e9d244d948b5de1d6f7fbe94f_large.jpg"
                              srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=">
                            <source media="(min-width: 768px)" data-srcset="//product.hstatic.net/200000258383/product/1va837ca_1_49a4964e9d244d948b5de1d6f7fbe94f_large.jpg"
                              srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=">
                            <img class="img-loop img-hover lazyload" data-src="//product.hstatic.net/200000258383/product/1va837ca_1_49a4964e9d244d948b5de1d6f7fbe94f_large.jpg"
                              src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" alt=" Váy nhún ngực tay bồng 1VA837CA " />
                          </picture>
                        </a>
                        <div class="button-add hidden">
                          <button type="submit" title="Buy now" class="action" onclick="buy_now('1067889026')">Mua ngay<i class="fa fa-long-arrow-right"></i></button>
                        </div>
                        <div class="pro-price-mb">
                          <span class="pro-price">650,000₫</span>

                        </div>
                      </div>
                      <div class="product-detail clearfix">
                        <div class="box-pro-detail">
                          <h3 class="pro-name">
                            <a href="/products/vay-nhun-nguc-tay-bong-1va837ca" title="Váy nhún ngực tay bồng 1VA837CA">
                              Váy nhún ngực tay bồng 1VA837CA
                            </a>
                          </h3>
                          <div class="box-pro-prices">
                            <p class="pro-price ">
                              <span>650,000₫</span>

                            </p>
                          </div>
                        </div>
                      </div>
                    </div>



                  </div>

                  <div class="col-md-3 col-sm-6 col-xs-6 pro-loop col-4">










                    <div class="product-block product-resize ">
                      <div class="product-img ">



                        <a href="/products/vay-2-day-dan-lung-1va866xl" title="Váy 2 dây đan lưng 1VA866XL" class="image-resize ratiobox">
                          <picture>
                            <source media="(max-width: 480px)" data-srcset="//product.hstatic.net/200000258383/product/1va866xl_679a3d482938462790e0da397478a645_large.jpg"
                              srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" />
                            <source media="(min-width: 481px) and (max-width: 767px)" data-srcset="//product.hstatic.net/200000258383/product/1va866xl_679a3d482938462790e0da397478a645_large.jpg"
                              srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" />
                            <source media="(min-width: 768px)" data-srcset="//product.hstatic.net/200000258383/product/1va866xl_679a3d482938462790e0da397478a645_large.jpg"
                              srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" />
                            <img class="lazyload img-loop" data-sizes="auto" data-src="//product.hstatic.net/200000258383/product/1va866xl_679a3d482938462790e0da397478a645_large.jpg"
                              data-lowsrc="//product.hstatic.net/200000258383/product/1va866xl_679a3d482938462790e0da397478a645_grande.jpg"
                              src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" alt=" Váy 2 dây đan lưng 1VA866XL " />
                          </picture>
                          <picture>
                            <source media="(max-width: 480px)" data-srcset="//product.hstatic.net/200000258383/product/1va866xl_1_a566a01aa1b344a8bdb631856560c08b_large.jpg"
                              srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=">
                            <source media="(min-width: 481px) and (max-width: 767px)" data-srcset="//product.hstatic.net/200000258383/product/1va866xl_1_a566a01aa1b344a8bdb631856560c08b_large.jpg"
                              srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=">
                            <source media="(min-width: 768px)" data-srcset="//product.hstatic.net/200000258383/product/1va866xl_1_a566a01aa1b344a8bdb631856560c08b_large.jpg"
                              srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=">
                            <img class="img-loop img-hover lazyload" data-src="//product.hstatic.net/200000258383/product/1va866xl_1_a566a01aa1b344a8bdb631856560c08b_large.jpg"
                              src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" alt=" Váy 2 dây đan lưng 1VA866XL " />
                          </picture>
                        </a>
                        <div class="button-add hidden">
                          <button type="submit" title="Buy now" class="action" onclick="buy_now('1067619330')">Mua ngay<i class="fa fa-long-arrow-right"></i></button>
                        </div>
                        <div class="pro-price-mb">
                          <span class="pro-price">750,000₫</span>

                        </div>
                      </div>
                      <div class="product-detail clearfix">
                        <div class="box-pro-detail">
                          <h3 class="pro-name">
                            <a href="/products/vay-2-day-dan-lung-1va866xl" title="Váy 2 dây đan lưng 1VA866XL">
                              Váy 2 dây đan lưng 1VA866XL
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

                  <div class="col-md-3 col-sm-6 col-xs-6 pro-loop col-4">










                    <div class="product-block product-resize ">
                      <div class="product-img ">



                        <a href="/products/vay-2-day-nhun-nguc-1va910va" title="Váy 2 dây nhún ngực 1VA910VA" class="image-resize ratiobox">
                          <picture>
                            <source media="(max-width: 480px)" data-srcset="//product.hstatic.net/200000258383/product/1va910va_48f44db474064c5fad75d33e64d4f5ef_large.jpg"
                              srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" />
                            <source media="(min-width: 481px) and (max-width: 767px)" data-srcset="//product.hstatic.net/200000258383/product/1va910va_48f44db474064c5fad75d33e64d4f5ef_large.jpg"
                              srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" />
                            <source media="(min-width: 768px)" data-srcset="//product.hstatic.net/200000258383/product/1va910va_48f44db474064c5fad75d33e64d4f5ef_large.jpg"
                              srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" />
                            <img class="lazyload img-loop" data-sizes="auto" data-src="//product.hstatic.net/200000258383/product/1va910va_48f44db474064c5fad75d33e64d4f5ef_large.jpg"
                              data-lowsrc="//product.hstatic.net/200000258383/product/1va910va_48f44db474064c5fad75d33e64d4f5ef_grande.jpg"
                              src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" alt=" Váy 2 dây nhún ngực 1VA910VA " />
                          </picture>
                          <picture>
                            <source media="(max-width: 480px)" data-srcset="//product.hstatic.net/200000258383/product/1va910va_1_213f187122ee4f4596240703ae12830c_large.jpg"
                              srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=">
                            <source media="(min-width: 481px) and (max-width: 767px)" data-srcset="//product.hstatic.net/200000258383/product/1va910va_1_213f187122ee4f4596240703ae12830c_large.jpg"
                              srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=">
                            <source media="(min-width: 768px)" data-srcset="//product.hstatic.net/200000258383/product/1va910va_1_213f187122ee4f4596240703ae12830c_large.jpg"
                              srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=">
                            <img class="img-loop img-hover lazyload" data-src="//product.hstatic.net/200000258383/product/1va910va_1_213f187122ee4f4596240703ae12830c_large.jpg"
                              src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" alt=" Váy 2 dây nhún ngực 1VA910VA " />
                          </picture>
                        </a>
                        <div class="button-add hidden">
                          <button type="submit" title="Buy now" class="action" onclick="buy_now('1069243223')">Mua ngay<i class="fa fa-long-arrow-right"></i></button>
                        </div>
                        <div class="pro-price-mb">
                          <span class="pro-price">850,000₫</span>

                        </div>
                      </div>
                      <div class="product-detail clearfix">
                        <div class="box-pro-detail">
                          <h3 class="pro-name">
                            <a href="/products/vay-2-day-nhun-nguc-1va910va" title="Váy 2 dây nhún ngực 1VA910VA">
                              Váy 2 dây nhún ngực 1VA910VA
                            </a>
                          </h3>
                          <div class="box-pro-prices">
                            <p class="pro-price ">
                              <span>850,000₫</span>

                            </p>
                          </div>
                        </div>
                      </div>
                    </div>



                  </div>

                  <div class="col-md-3 col-sm-6 col-xs-6 pro-loop col-4">









                    <div class="product-block product-resize ">
                      <div class="product-img ">

                        <div class="sold-out"><span>Hết hàng</span></div>

                        <a href="/products/vay-2-day-cup-nguc-1va860do" title="Váy 2 dây cúp ngực 1VA860DO" class="image-resize ratiobox">
                          <picture>
                            <source media="(max-width: 480px)" data-srcset="//product.hstatic.net/200000258383/product/1va860do_57f7de223e4d40e8bd373b2055aca6a4_large.jpg"
                              srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" />
                            <source media="(min-width: 481px) and (max-width: 767px)" data-srcset="//product.hstatic.net/200000258383/product/1va860do_57f7de223e4d40e8bd373b2055aca6a4_large.jpg"
                              srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" />
                            <source media="(min-width: 768px)" data-srcset="//product.hstatic.net/200000258383/product/1va860do_57f7de223e4d40e8bd373b2055aca6a4_large.jpg"
                              srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" />
                            <img class="lazyload img-loop" data-sizes="auto" data-src="//product.hstatic.net/200000258383/product/1va860do_57f7de223e4d40e8bd373b2055aca6a4_large.jpg"
                              data-lowsrc="//product.hstatic.net/200000258383/product/1va860do_57f7de223e4d40e8bd373b2055aca6a4_grande.jpg"
                              src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" alt=" Váy 2 dây cúp ngực 1VA860DO " />
                          </picture>
                          <picture>
                            <source media="(max-width: 480px)" data-srcset="//product.hstatic.net/200000258383/product/1va860do_1_dc2dcfbd12ce4f69abfa8dba6c0a68b2_large.jpg"
                              srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=">
                            <source media="(min-width: 481px) and (max-width: 767px)" data-srcset="//product.hstatic.net/200000258383/product/1va860do_1_dc2dcfbd12ce4f69abfa8dba6c0a68b2_large.jpg"
                              srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=">
                            <source media="(min-width: 768px)" data-srcset="//product.hstatic.net/200000258383/product/1va860do_1_dc2dcfbd12ce4f69abfa8dba6c0a68b2_large.jpg"
                              srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=">
                            <img class="img-loop img-hover lazyload" data-src="//product.hstatic.net/200000258383/product/1va860do_1_dc2dcfbd12ce4f69abfa8dba6c0a68b2_large.jpg"
                              src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" alt=" Váy 2 dây cúp ngực 1VA860DO " />
                          </picture>
                        </a>
                        <div class="button-add hidden">
                          <button type="submit" title="Buy now" class="action" onclick="buy_now('1069216689')">Mua ngay<i class="fa fa-long-arrow-right"></i></button>
                        </div>
                        <div class="pro-price-mb">
                          <span class="pro-price">750,000₫</span>

                        </div>
                      </div>
                      <div class="product-detail clearfix">
                        <div class="box-pro-detail">
                          <h3 class="pro-name">
                            <a href="/products/vay-2-day-cup-nguc-1va860do" title="Váy 2 dây cúp ngực 1VA860DO">
                              Váy 2 dây cúp ngực 1VA860DO
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

                  <div class="col-md-3 col-sm-6 col-xs-6 pro-loop col-4">









                    <div class="product-block product-resize ">
                      <div class="product-img ">

                        <div class="sold-out"><span>Hết hàng</span></div>

                        <a href="/products/vay-co-v-cuc-trai-1va846xt" title="Váy cổ V cúc trai 1VA846XT" class="image-resize ratiobox">
                          <picture>
                            <source media="(max-width: 480px)" data-srcset="//product.hstatic.net/200000258383/product/1va846xt_2de2516dbac24644855a42b4c80438af_large.jpg"
                              srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" />
                            <source media="(min-width: 481px) and (max-width: 767px)" data-srcset="//product.hstatic.net/200000258383/product/1va846xt_2de2516dbac24644855a42b4c80438af_large.jpg"
                              srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" />
                            <source media="(min-width: 768px)" data-srcset="//product.hstatic.net/200000258383/product/1va846xt_2de2516dbac24644855a42b4c80438af_large.jpg"
                              srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" />
                            <img class="lazyload img-loop" data-sizes="auto" data-src="//product.hstatic.net/200000258383/product/1va846xt_2de2516dbac24644855a42b4c80438af_large.jpg"
                              data-lowsrc="//product.hstatic.net/200000258383/product/1va846xt_2de2516dbac24644855a42b4c80438af_grande.jpg"
                              src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" alt=" Váy cổ V cúc trai 1VA846XT " />
                          </picture>
                          <picture>
                            <source media="(max-width: 480px)" data-srcset="//product.hstatic.net/200000258383/product/1va846xt_1_7e07d7f9c0fb465e8df5cb2b7906121f_large.jpg"
                              srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=">
                            <source media="(min-width: 481px) and (max-width: 767px)" data-srcset="//product.hstatic.net/200000258383/product/1va846xt_1_7e07d7f9c0fb465e8df5cb2b7906121f_large.jpg"
                              srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=">
                            <source media="(min-width: 768px)" data-srcset="//product.hstatic.net/200000258383/product/1va846xt_1_7e07d7f9c0fb465e8df5cb2b7906121f_large.jpg"
                              srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=">
                            <img class="img-loop img-hover lazyload" data-src="//product.hstatic.net/200000258383/product/1va846xt_1_7e07d7f9c0fb465e8df5cb2b7906121f_large.jpg"
                              src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" alt=" Váy cổ V cúc trai 1VA846XT " />
                          </picture>
                        </a>
                        <div class="button-add hidden">
                          <button type="submit" title="Buy now" class="action" onclick="buy_now('1067935956')">Mua ngay<i class="fa fa-long-arrow-right"></i></button>
                        </div>
                        <div class="pro-price-mb">
                          <span class="pro-price">695,000₫</span>

                        </div>
                      </div>
                      <div class="product-detail clearfix">
                        <div class="box-pro-detail">
                          <h3 class="pro-name">
                            <a href="/products/vay-co-v-cuc-trai-1va846xt" title="Váy cổ V cúc trai 1VA846XT">
                              Váy cổ V cúc trai 1VA846XT
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

                  <div class="col-md-3 col-sm-6 col-xs-6 pro-loop col-4">










                    <div class="product-block product-resize ">
                      <div class="product-img ">



                        <a href="/products/vay-no-nguc-3-day-lung-1va899do" title="Váy nơ ngực 3 dây lưng 1VA899DO" class="image-resize ratiobox">
                          <picture>
                            <source media="(max-width: 480px)" data-srcset="//product.hstatic.net/200000258383/product/1va899do_052934975627453e89774db5fc8c82e4_large.jpg"
                              srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" />
                            <source media="(min-width: 481px) and (max-width: 767px)" data-srcset="//product.hstatic.net/200000258383/product/1va899do_052934975627453e89774db5fc8c82e4_large.jpg"
                              srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" />
                            <source media="(min-width: 768px)" data-srcset="//product.hstatic.net/200000258383/product/1va899do_052934975627453e89774db5fc8c82e4_large.jpg"
                              srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" />
                            <img class="lazyload img-loop" data-sizes="auto" data-src="//product.hstatic.net/200000258383/product/1va899do_052934975627453e89774db5fc8c82e4_large.jpg"
                              data-lowsrc="//product.hstatic.net/200000258383/product/1va899do_052934975627453e89774db5fc8c82e4_grande.jpg"
                              src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" alt=" Váy nơ ngực 3 dây lưng 1VA899DO " />
                          </picture>
                          <picture>
                            <source media="(max-width: 480px)" data-srcset="//product.hstatic.net/200000258383/product/1va899do_1_b6520eac3f634d74b70aaece9b414eb1_large.jpg"
                              srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=">
                            <source media="(min-width: 481px) and (max-width: 767px)" data-srcset="//product.hstatic.net/200000258383/product/1va899do_1_b6520eac3f634d74b70aaece9b414eb1_large.jpg"
                              srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=">
                            <source media="(min-width: 768px)" data-srcset="//product.hstatic.net/200000258383/product/1va899do_1_b6520eac3f634d74b70aaece9b414eb1_large.jpg"
                              srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=">
                            <img class="img-loop img-hover lazyload" data-src="//product.hstatic.net/200000258383/product/1va899do_1_b6520eac3f634d74b70aaece9b414eb1_large.jpg"
                              src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" alt=" Váy nơ ngực 3 dây lưng 1VA899DO " />
                          </picture>
                        </a>
                        <div class="button-add hidden">
                          <button type="submit" title="Buy now" class="action" onclick="buy_now('1069104082')">Mua ngay<i class="fa fa-long-arrow-right"></i></button>
                        </div>
                        <div class="pro-price-mb">
                          <span class="pro-price">750,000₫</span>

                        </div>
                      </div>
                      <div class="product-detail clearfix">
                        <div class="box-pro-detail">
                          <h3 class="pro-name">
                            <a href="/products/vay-no-nguc-3-day-lung-1va899do" title="Váy nơ ngực 3 dây lưng 1VA899DO">
                              Váy nơ ngực 3 dây lưng 1VA899DO
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

                  <div class="col-md-3 col-sm-6 col-xs-6 pro-loop col-4">










                    <div class="product-block product-resize ">
                      <div class="product-img ">



                        <a href="/products/vay-cup-nhun-nguc-1va847xt" title="Váy cúp nhún ngực 1VA847XT" class="image-resize ratiobox">
                          <picture>
                            <source media="(max-width: 480px)" data-srcset="//product.hstatic.net/200000258383/product/1va847xt_5e5dbe04bfff4383a9399f67d80ba2f2_large.jpg"
                              srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" />
                            <source media="(min-width: 481px) and (max-width: 767px)" data-srcset="//product.hstatic.net/200000258383/product/1va847xt_5e5dbe04bfff4383a9399f67d80ba2f2_large.jpg"
                              srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" />
                            <source media="(min-width: 768px)" data-srcset="//product.hstatic.net/200000258383/product/1va847xt_5e5dbe04bfff4383a9399f67d80ba2f2_large.jpg"
                              srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" />
                            <img class="lazyload img-loop" data-sizes="auto" data-src="//product.hstatic.net/200000258383/product/1va847xt_5e5dbe04bfff4383a9399f67d80ba2f2_large.jpg"
                              data-lowsrc="//product.hstatic.net/200000258383/product/1va847xt_5e5dbe04bfff4383a9399f67d80ba2f2_grande.jpg"
                              src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" alt=" Váy cúp nhún ngực 1VA847XT " />
                          </picture>
                          <picture>
                            <source media="(max-width: 480px)" data-srcset="//product.hstatic.net/200000258383/product/1va847xt_1_25de49978272443a8fe5f4c478d8d1bc_large.jpg"
                              srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=">
                            <source media="(min-width: 481px) and (max-width: 767px)" data-srcset="//product.hstatic.net/200000258383/product/1va847xt_1_25de49978272443a8fe5f4c478d8d1bc_large.jpg"
                              srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=">
                            <source media="(min-width: 768px)" data-srcset="//product.hstatic.net/200000258383/product/1va847xt_1_25de49978272443a8fe5f4c478d8d1bc_large.jpg"
                              srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=">
                            <img class="img-loop img-hover lazyload" data-src="//product.hstatic.net/200000258383/product/1va847xt_1_25de49978272443a8fe5f4c478d8d1bc_large.jpg"
                              src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" alt=" Váy cúp nhún ngực 1VA847XT " />
                          </picture>
                        </a>
                        <div class="button-add hidden">
                          <button type="submit" title="Buy now" class="action" onclick="buy_now('1067426018')">Mua ngay<i class="fa fa-long-arrow-right"></i></button>
                        </div>
                        <div class="pro-price-mb">
                          <span class="pro-price">750,000₫</span>

                        </div>
                      </div>
                      <div class="product-detail clearfix">
                        <div class="box-pro-detail">
                          <h3 class="pro-name">
                            <a href="/products/vay-cup-nhun-nguc-1va847xt" title="Váy cúp nhún ngực 1VA847XT">
                              Váy cúp nhún ngực 1VA847XT
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

                  <div class="col-md-3 col-sm-6 col-xs-6 pro-loop col-4">










                    <div class="product-block product-resize ">
                      <div class="product-img ">



                        <a href="/products/vay-gam-co-nu-hoang-1va869be" title="Váy gấm cổ nữ hoàng 1VA869BE" class="image-resize ratiobox">
                          <picture>
                            <source media="(max-width: 480px)" data-srcset="//product.hstatic.net/200000258383/product/1va869be_1d286c982fa740589badc0ce24cae6cb_large.jpg"
                              srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" />
                            <source media="(min-width: 481px) and (max-width: 767px)" data-srcset="//product.hstatic.net/200000258383/product/1va869be_1d286c982fa740589badc0ce24cae6cb_large.jpg"
                              srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" />
                            <source media="(min-width: 768px)" data-srcset="//product.hstatic.net/200000258383/product/1va869be_1d286c982fa740589badc0ce24cae6cb_large.jpg"
                              srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" />
                            <img class="lazyload img-loop" data-sizes="auto" data-src="//product.hstatic.net/200000258383/product/1va869be_1d286c982fa740589badc0ce24cae6cb_large.jpg"
                              data-lowsrc="//product.hstatic.net/200000258383/product/1va869be_1d286c982fa740589badc0ce24cae6cb_grande.jpg"
                              src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" alt=" Váy gấm cổ nữ hoàng 1VA869BE " />
                          </picture>
                          <picture>
                            <source media="(max-width: 480px)" data-srcset="//product.hstatic.net/200000258383/product/1va869be_1_1e9009de6fe4481782cb159a02c38a58_large.jpg"
                              srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=">
                            <source media="(min-width: 481px) and (max-width: 767px)" data-srcset="//product.hstatic.net/200000258383/product/1va869be_1_1e9009de6fe4481782cb159a02c38a58_large.jpg"
                              srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=">
                            <source media="(min-width: 768px)" data-srcset="//product.hstatic.net/200000258383/product/1va869be_1_1e9009de6fe4481782cb159a02c38a58_large.jpg"
                              srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=">
                            <img class="img-loop img-hover lazyload" data-src="//product.hstatic.net/200000258383/product/1va869be_1_1e9009de6fe4481782cb159a02c38a58_large.jpg"
                              src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" alt=" Váy gấm cổ nữ hoàng 1VA869BE " />
                          </picture>
                        </a>
                        <div class="button-add hidden">
                          <button type="submit" title="Buy now" class="action" onclick="buy_now('1068528009')">Mua ngay<i class="fa fa-long-arrow-right"></i></button>
                        </div>
                        <div class="pro-price-mb">
                          <span class="pro-price">850,000₫</span>

                        </div>
                      </div>
                      <div class="product-detail clearfix">
                        <div class="box-pro-detail">
                          <h3 class="pro-name">
                            <a href="/products/vay-gam-co-nu-hoang-1va869be" title="Váy gấm cổ nữ hoàng 1VA869BE">
                              Váy gấm cổ nữ hoàng 1VA869BE
                            </a>
                          </h3>
                          <div class="box-pro-prices">
                            <p class="pro-price ">
                              <span>850,000₫</span>

                            </p>
                          </div>
                        </div>
                      </div>
                    </div>



                  </div>

                  <div class="col-md-3 col-sm-6 col-xs-6 pro-loop col-4">










                    <div class="product-block product-resize ">
                      <div class="product-img ">



                        <a href="/products/vay-nhun-nguc-tung-xoe-1va870va" title="Váy nhún ngực tùng xòe 1VA870VA" class="image-resize ratiobox">
                          <picture>
                            <source media="(max-width: 480px)" data-srcset="//product.hstatic.net/200000258383/product/1va870va_13b8d328c4764a649947d38ebc2594d0_large.jpg"
                              srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" />
                            <source media="(min-width: 481px) and (max-width: 767px)" data-srcset="//product.hstatic.net/200000258383/product/1va870va_13b8d328c4764a649947d38ebc2594d0_large.jpg"
                              srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" />
                            <source media="(min-width: 768px)" data-srcset="//product.hstatic.net/200000258383/product/1va870va_13b8d328c4764a649947d38ebc2594d0_large.jpg"
                              srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" />
                            <img class="lazyload img-loop" data-sizes="auto" data-src="//product.hstatic.net/200000258383/product/1va870va_13b8d328c4764a649947d38ebc2594d0_large.jpg"
                              data-lowsrc="//product.hstatic.net/200000258383/product/1va870va_13b8d328c4764a649947d38ebc2594d0_grande.jpg"
                              src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" alt=" Váy nhún ngực tùng xòe 1VA870VA " />
                          </picture>
                          <picture>
                            <source media="(max-width: 480px)" data-srcset="//product.hstatic.net/200000258383/product/1va870va_1_2af4bad7d432445ea27884a27983bd80_large.jpg"
                              srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=">
                            <source media="(min-width: 481px) and (max-width: 767px)" data-srcset="//product.hstatic.net/200000258383/product/1va870va_1_2af4bad7d432445ea27884a27983bd80_large.jpg"
                              srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=">
                            <source media="(min-width: 768px)" data-srcset="//product.hstatic.net/200000258383/product/1va870va_1_2af4bad7d432445ea27884a27983bd80_large.jpg"
                              srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=">
                            <img class="img-loop img-hover lazyload" data-src="//product.hstatic.net/200000258383/product/1va870va_1_2af4bad7d432445ea27884a27983bd80_large.jpg"
                              src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" alt=" Váy nhún ngực tùng xòe 1VA870VA " />
                          </picture>
                        </a>
                        <div class="button-add hidden">
                          <button type="submit" title="Buy now" class="action" onclick="buy_now('1067425315')">Mua ngay<i class="fa fa-long-arrow-right"></i></button>
                        </div>
                        <div class="pro-price-mb">
                          <span class="pro-price">695,000₫</span>

                        </div>
                      </div>
                      <div class="product-detail clearfix">
                        <div class="box-pro-detail">
                          <h3 class="pro-name">
                            <a href="/products/vay-nhun-nguc-tung-xoe-1va870va" title="Váy nhún ngực tùng xòe 1VA870VA">
                              Váy nhún ngực tùng xòe 1VA870VA
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

                  <div class="col-md-3 col-sm-6 col-xs-6 pro-loop col-4">










                    <div class="product-block product-resize ">
                      <div class="product-img ">



                        <a href="/products/vay-2-day-beo-1va753xl-s" title="Váy 2 dây bèo 1VA753XL" class="image-resize ratiobox">
                          <picture>
                            <source media="(max-width: 480px)" data-srcset="//product.hstatic.net/200000258383/product/1va753xl_a29f0ae1163648a5949bff3a570c8fc2_large.jpg"
                              srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" />
                            <source media="(min-width: 481px) and (max-width: 767px)" data-srcset="//product.hstatic.net/200000258383/product/1va753xl_a29f0ae1163648a5949bff3a570c8fc2_large.jpg"
                              srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" />
                            <source media="(min-width: 768px)" data-srcset="//product.hstatic.net/200000258383/product/1va753xl_a29f0ae1163648a5949bff3a570c8fc2_large.jpg"
                              srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" />
                            <img class="lazyload img-loop" data-sizes="auto" data-src="//product.hstatic.net/200000258383/product/1va753xl_a29f0ae1163648a5949bff3a570c8fc2_large.jpg"
                              data-lowsrc="//product.hstatic.net/200000258383/product/1va753xl_a29f0ae1163648a5949bff3a570c8fc2_grande.jpg"
                              src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" alt=" Váy 2 dây bèo 1VA753XL " />
                          </picture>
                          <picture>
                            <source media="(max-width: 480px)" data-srcset="//product.hstatic.net/200000258383/product/1va753xl_1_cbc8729f6f6840379d20bbed7767f27c_large.jpg"
                              srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=">
                            <source media="(min-width: 481px) and (max-width: 767px)" data-srcset="//product.hstatic.net/200000258383/product/1va753xl_1_cbc8729f6f6840379d20bbed7767f27c_large.jpg"
                              srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=">
                            <source media="(min-width: 768px)" data-srcset="//product.hstatic.net/200000258383/product/1va753xl_1_cbc8729f6f6840379d20bbed7767f27c_large.jpg"
                              srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=">
                            <img class="img-loop img-hover lazyload" data-src="//product.hstatic.net/200000258383/product/1va753xl_1_cbc8729f6f6840379d20bbed7767f27c_large.jpg"
                              src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" alt=" Váy 2 dây bèo 1VA753XL " />
                          </picture>
                        </a>
                        <div class="button-add hidden">
                          <button type="submit" title="Buy now" class="action" onclick="buy_now('1065059470')">Mua ngay<i class="fa fa-long-arrow-right"></i></button>
                        </div>
                        <div class="pro-price-mb">
                          <span class="pro-price">750,000₫</span>

                        </div>
                      </div>
                      <div class="product-detail clearfix">
                        <div class="box-pro-detail">
                          <h3 class="pro-name">
                            <a href="/products/vay-2-day-beo-1va753xl-s" title="Váy 2 dây bèo 1VA753XL">
                              Váy 2 dây bèo 1VA753XL
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

                  <div class="col-md-3 col-sm-6 col-xs-6 pro-loop col-4">










                    <div class="product-block product-resize ">
                      <div class="product-img ">



                        <a href="/products/vay-co-do-dan-lung-1va857xt" title="Váy cổ đổ đan lưng 1VA857XT" class="image-resize ratiobox">
                          <picture>
                            <source media="(max-width: 480px)" data-srcset="//product.hstatic.net/200000258383/product/1va857xt_5d18b254168f47db848ac35db3bb40be_large.jpg"
                              srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" />
                            <source media="(min-width: 481px) and (max-width: 767px)" data-srcset="//product.hstatic.net/200000258383/product/1va857xt_5d18b254168f47db848ac35db3bb40be_large.jpg"
                              srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" />
                            <source media="(min-width: 768px)" data-srcset="//product.hstatic.net/200000258383/product/1va857xt_5d18b254168f47db848ac35db3bb40be_large.jpg"
                              srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" />
                            <img class="lazyload img-loop" data-sizes="auto" data-src="//product.hstatic.net/200000258383/product/1va857xt_5d18b254168f47db848ac35db3bb40be_large.jpg"
                              data-lowsrc="//product.hstatic.net/200000258383/product/1va857xt_5d18b254168f47db848ac35db3bb40be_grande.jpg"
                              src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" alt=" Váy cổ đổ đan lưng 1VA857XT " />
                          </picture>
                          <picture>
                            <source media="(max-width: 480px)" data-srcset="//product.hstatic.net/200000258383/product/1va857xt_1_ad8217b478924d64983b3aba7e7c57f8_large.jpg"
                              srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=">
                            <source media="(min-width: 481px) and (max-width: 767px)" data-srcset="//product.hstatic.net/200000258383/product/1va857xt_1_ad8217b478924d64983b3aba7e7c57f8_large.jpg"
                              srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=">
                            <source media="(min-width: 768px)" data-srcset="//product.hstatic.net/200000258383/product/1va857xt_1_ad8217b478924d64983b3aba7e7c57f8_large.jpg"
                              srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=">
                            <img class="img-loop img-hover lazyload" data-src="//product.hstatic.net/200000258383/product/1va857xt_1_ad8217b478924d64983b3aba7e7c57f8_large.jpg"
                              src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" alt=" Váy cổ đổ đan lưng 1VA857XT " />
                          </picture>
                        </a>
                        <div class="button-add hidden">
                          <button type="submit" title="Buy now" class="action" onclick="buy_now('1067838196')">Mua ngay<i class="fa fa-long-arrow-right"></i></button>
                        </div>
                        <div class="pro-price-mb">
                          <span class="pro-price">695,000₫</span>

                        </div>
                      </div>
                      <div class="product-detail clearfix">
                        <div class="box-pro-detail">
                          <h3 class="pro-name">
                            <a href="/products/vay-co-do-dan-lung-1va857xt" title="Váy cổ đổ đan lưng 1VA857XT">
                              Váy cổ đổ đan lưng 1VA857XT
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

                  <div class="col-md-3 col-sm-6 col-xs-6 pro-loop col-4">










                    <div class="product-block product-resize ">
                      <div class="product-img ">



                        <a href="/products/vay-2-day-xoan-nguc-1va782do" title="Váy 2 dây xoắn ngực 1VA782DO" class="image-resize ratiobox">
                          <picture>
                            <source media="(max-width: 480px)" data-srcset="//product.hstatic.net/200000258383/product/1va782do_2fe31d4e270e443ea337b6715ae8a72b_large.jpg"
                              srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" />
                            <source media="(min-width: 481px) and (max-width: 767px)" data-srcset="//product.hstatic.net/200000258383/product/1va782do_2fe31d4e270e443ea337b6715ae8a72b_large.jpg"
                              srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" />
                            <source media="(min-width: 768px)" data-srcset="//product.hstatic.net/200000258383/product/1va782do_2fe31d4e270e443ea337b6715ae8a72b_large.jpg"
                              srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" />
                            <img class="lazyload img-loop" data-sizes="auto" data-src="//product.hstatic.net/200000258383/product/1va782do_2fe31d4e270e443ea337b6715ae8a72b_large.jpg"
                              data-lowsrc="//product.hstatic.net/200000258383/product/1va782do_2fe31d4e270e443ea337b6715ae8a72b_grande.jpg"
                              src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" alt=" Váy 2 dây xoắn ngực 1VA782DO " />
                          </picture>
                          <picture>
                            <source media="(max-width: 480px)" data-srcset="//product.hstatic.net/200000258383/product/1va782do_1_7e77198ae9714df18408c88f699078d6_large.jpg"
                              srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=">
                            <source media="(min-width: 481px) and (max-width: 767px)" data-srcset="//product.hstatic.net/200000258383/product/1va782do_1_7e77198ae9714df18408c88f699078d6_large.jpg"
                              srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=">
                            <source media="(min-width: 768px)" data-srcset="//product.hstatic.net/200000258383/product/1va782do_1_7e77198ae9714df18408c88f699078d6_large.jpg"
                              srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=">
                            <img class="img-loop img-hover lazyload" data-src="//product.hstatic.net/200000258383/product/1va782do_1_7e77198ae9714df18408c88f699078d6_large.jpg"
                              src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" alt=" Váy 2 dây xoắn ngực 1VA782DO " />
                          </picture>
                        </a>
                        <div class="button-add hidden">
                          <button type="submit" title="Buy now" class="action" onclick="buy_now('1065370680')">Mua ngay<i class="fa fa-long-arrow-right"></i></button>
                        </div>
                        <div class="pro-price-mb">
                          <span class="pro-price">695,000₫</span>

                        </div>
                      </div>
                      <div class="product-detail clearfix">
                        <div class="box-pro-detail">
                          <h3 class="pro-name">
                            <a href="/products/vay-2-day-xoan-nguc-1va782do" title="Váy 2 dây xoắn ngực 1VA782DO">
                              Váy 2 dây xoắn ngực 1VA782DO
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

                  <div class="col-md-3 col-sm-6 col-xs-6 pro-loop col-4">










                    <div class="product-block product-resize ">
                      <div class="product-img ">



                        <a href="/products/set-vay-nhu-y-1va830do" title="Set váy Như Ý 1VA830DO" class="image-resize ratiobox">
                          <picture>
                            <source media="(max-width: 480px)" data-srcset="//product.hstatic.net/200000258383/product/1va830do_a6553c3c3f2c47bbaa82e5d753a12105_large.jpg"
                              srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" />
                            <source media="(min-width: 481px) and (max-width: 767px)" data-srcset="//product.hstatic.net/200000258383/product/1va830do_a6553c3c3f2c47bbaa82e5d753a12105_large.jpg"
                              srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" />
                            <source media="(min-width: 768px)" data-srcset="//product.hstatic.net/200000258383/product/1va830do_a6553c3c3f2c47bbaa82e5d753a12105_large.jpg"
                              srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" />
                            <img class="lazyload img-loop" data-sizes="auto" data-src="//product.hstatic.net/200000258383/product/1va830do_a6553c3c3f2c47bbaa82e5d753a12105_large.jpg"
                              data-lowsrc="//product.hstatic.net/200000258383/product/1va830do_a6553c3c3f2c47bbaa82e5d753a12105_grande.jpg"
                              src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" alt=" Set váy Như Ý 1VA830DO " />
                          </picture>
                          <picture>
                            <source media="(max-width: 480px)" data-srcset="//product.hstatic.net/200000258383/product/1va830do_1_c08de5756e2e496ab05f9726667a5ae0_large.jpg"
                              srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=">
                            <source media="(min-width: 481px) and (max-width: 767px)" data-srcset="//product.hstatic.net/200000258383/product/1va830do_1_c08de5756e2e496ab05f9726667a5ae0_large.jpg"
                              srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=">
                            <source media="(min-width: 768px)" data-srcset="//product.hstatic.net/200000258383/product/1va830do_1_c08de5756e2e496ab05f9726667a5ae0_large.jpg"
                              srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=">
                            <img class="img-loop img-hover lazyload" data-src="//product.hstatic.net/200000258383/product/1va830do_1_c08de5756e2e496ab05f9726667a5ae0_large.jpg"
                              src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" alt=" Set váy Như Ý 1VA830DO " />
                          </picture>
                        </a>
                        <div class="button-add hidden">
                          <button type="submit" title="Buy now" class="action" onclick="buy_now('1067107480')">Mua ngay<i class="fa fa-long-arrow-right"></i></button>
                        </div>
                        <div class="pro-price-mb">
                          <span class="pro-price">1,350,000₫</span>

                        </div>
                      </div>
                      <div class="product-detail clearfix">
                        <div class="box-pro-detail">
                          <h3 class="pro-name">
                            <a href="/products/set-vay-nhu-y-1va830do" title="Set váy Như Ý 1VA830DO">
                              Set váy Như Ý 1VA830DO
                            </a>
                          </h3>
                          <div class="box-pro-prices">
                            <p class="pro-price ">
                              <span>1,350,000₫</span>

                            </p>
                          </div>
                        </div>
                      </div>
                    </div>



                  </div>

                  <div class="col-md-3 col-sm-6 col-xs-6 pro-loop col-4">










                    <div class="product-block product-resize ">
                      <div class="product-img ">



                        <a href="/products/vay-maxi-beo-tung-1va851ho" title="Váy maxi bèo tùng 1VA851HO" class="image-resize ratiobox">
                          <picture>
                            <source media="(max-width: 480px)" data-srcset="//product.hstatic.net/200000258383/product/1va851ho_cdc55b1690c04a6c9dc1929a3a92c3ff_large.jpg"
                              srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" />
                            <source media="(min-width: 481px) and (max-width: 767px)" data-srcset="//product.hstatic.net/200000258383/product/1va851ho_cdc55b1690c04a6c9dc1929a3a92c3ff_large.jpg"
                              srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" />
                            <source media="(min-width: 768px)" data-srcset="//product.hstatic.net/200000258383/product/1va851ho_cdc55b1690c04a6c9dc1929a3a92c3ff_large.jpg"
                              srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" />
                            <img class="lazyload img-loop" data-sizes="auto" data-src="//product.hstatic.net/200000258383/product/1va851ho_cdc55b1690c04a6c9dc1929a3a92c3ff_large.jpg"
                              data-lowsrc="//product.hstatic.net/200000258383/product/1va851ho_cdc55b1690c04a6c9dc1929a3a92c3ff_grande.jpg"
                              src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" alt=" Váy maxi bèo tùng 1VA851HO " />
                          </picture>
                          <picture>
                            <source media="(max-width: 480px)" data-srcset="//product.hstatic.net/200000258383/product/1va851ho_1_03f80c7b168d4aa7b0ff5c8f8a8aeb55_large.jpg"
                              srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=">
                            <source media="(min-width: 481px) and (max-width: 767px)" data-srcset="//product.hstatic.net/200000258383/product/1va851ho_1_03f80c7b168d4aa7b0ff5c8f8a8aeb55_large.jpg"
                              srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=">
                            <source media="(min-width: 768px)" data-srcset="//product.hstatic.net/200000258383/product/1va851ho_1_03f80c7b168d4aa7b0ff5c8f8a8aeb55_large.jpg"
                              srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=">
                            <img class="img-loop img-hover lazyload" data-src="//product.hstatic.net/200000258383/product/1va851ho_1_03f80c7b168d4aa7b0ff5c8f8a8aeb55_large.jpg"
                              src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" alt=" Váy maxi bèo tùng 1VA851HO " />
                          </picture>
                        </a>
                        <div class="button-add hidden">
                          <button type="submit" title="Buy now" class="action" onclick="buy_now('1068537947')">Mua ngay<i class="fa fa-long-arrow-right"></i></button>
                        </div>
                        <div class="pro-price-mb">
                          <span class="pro-price">1,950,000₫</span>

                        </div>
                      </div>
                      <div class="product-detail clearfix">
                        <div class="box-pro-detail">
                          <h3 class="pro-name">
                            <a href="/products/vay-maxi-beo-tung-1va851ho" title="Váy maxi bèo tùng 1VA851HO">
                              Váy maxi bèo tùng 1VA851HO
                            </a>
                          </h3>
                          <div class="box-pro-prices">
                            <p class="pro-price ">
                              <span>1,950,000₫</span>

                            </p>
                          </div>
                        </div>
                      </div>
                    </div>



                  </div>

                  <div class="col-md-3 col-sm-6 col-xs-6 pro-loop col-4">










                    <div class="product-block product-resize ">
                      <div class="product-img ">



                        <a href="/products/vay-ho-nguc-day-cheo-1va894xa" title="Váy hở ngực dây chéo 1VA894XA" class="image-resize ratiobox">
                          <picture>
                            <source media="(max-width: 480px)" data-srcset="//product.hstatic.net/200000258383/product/1va894xa_5135eccf1bb546c2880efe56c7dd05d6_large.jpg"
                              srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" />
                            <source media="(min-width: 481px) and (max-width: 767px)" data-srcset="//product.hstatic.net/200000258383/product/1va894xa_5135eccf1bb546c2880efe56c7dd05d6_large.jpg"
                              srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" />
                            <source media="(min-width: 768px)" data-srcset="//product.hstatic.net/200000258383/product/1va894xa_5135eccf1bb546c2880efe56c7dd05d6_large.jpg"
                              srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" />
                            <img class="lazyload img-loop" data-sizes="auto" data-src="//product.hstatic.net/200000258383/product/1va894xa_5135eccf1bb546c2880efe56c7dd05d6_large.jpg"
                              data-lowsrc="//product.hstatic.net/200000258383/product/1va894xa_5135eccf1bb546c2880efe56c7dd05d6_grande.jpg"
                              src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" alt=" Váy hở ngực dây chéo 1VA894XA " />
                          </picture>
                          <picture>
                            <source media="(max-width: 480px)" data-srcset="//product.hstatic.net/200000258383/product/1va894xa_1_f97af0dac1c340ea9be451a1e8e1df12_large.jpg"
                              srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=">
                            <source media="(min-width: 481px) and (max-width: 767px)" data-srcset="//product.hstatic.net/200000258383/product/1va894xa_1_f97af0dac1c340ea9be451a1e8e1df12_large.jpg"
                              srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=">
                            <source media="(min-width: 768px)" data-srcset="//product.hstatic.net/200000258383/product/1va894xa_1_f97af0dac1c340ea9be451a1e8e1df12_large.jpg"
                              srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=">
                            <img class="img-loop img-hover lazyload" data-src="//product.hstatic.net/200000258383/product/1va894xa_1_f97af0dac1c340ea9be451a1e8e1df12_large.jpg"
                              src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" alt=" Váy hở ngực dây chéo 1VA894XA " />
                          </picture>
                        </a>
                        <div class="button-add hidden">
                          <button type="submit" title="Buy now" class="action" onclick="buy_now('1067902433')">Mua ngay<i class="fa fa-long-arrow-right"></i></button>
                        </div>
                        <div class="pro-price-mb">
                          <span class="pro-price">750,000₫</span>

                        </div>
                      </div>
                      <div class="product-detail clearfix">
                        <div class="box-pro-detail">
                          <h3 class="pro-name">
                            <a href="/products/vay-ho-nguc-day-cheo-1va894xa" title="Váy hở ngực dây chéo 1VA894XA">
                              Váy hở ngực dây chéo 1VA894XA
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

                  <div class="col-md-3 col-sm-6 col-xs-6 pro-loop col-4">










                    <div class="product-block product-resize ">
                      <div class="product-img ">



                        <a href="/products/vay-nhun-nguc-tung-beo-1va838xt" title="Váy nhún ngực tùng bèo 1VA838XT" class="image-resize ratiobox">
                          <picture>
                            <source media="(max-width: 480px)" data-srcset="//product.hstatic.net/200000258383/product/1va838xt_73505f6b6e964b7294c5a29cd3b1a0b4_large.jpg"
                              srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" />
                            <source media="(min-width: 481px) and (max-width: 767px)" data-srcset="//product.hstatic.net/200000258383/product/1va838xt_73505f6b6e964b7294c5a29cd3b1a0b4_large.jpg"
                              srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" />
                            <source media="(min-width: 768px)" data-srcset="//product.hstatic.net/200000258383/product/1va838xt_73505f6b6e964b7294c5a29cd3b1a0b4_large.jpg"
                              srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" />
                            <img class="lazyload img-loop" data-sizes="auto" data-src="//product.hstatic.net/200000258383/product/1va838xt_73505f6b6e964b7294c5a29cd3b1a0b4_large.jpg"
                              data-lowsrc="//product.hstatic.net/200000258383/product/1va838xt_73505f6b6e964b7294c5a29cd3b1a0b4_grande.jpg"
                              src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" alt=" Váy nhún ngực tùng bèo 1VA838XT " />
                          </picture>
                          <picture>
                            <source media="(max-width: 480px)" data-srcset="//product.hstatic.net/200000258383/product/1va838xt_1_2d8b494d52b14792b9ebf87c965571c4_large.jpg"
                              srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=">
                            <source media="(min-width: 481px) and (max-width: 767px)" data-srcset="//product.hstatic.net/200000258383/product/1va838xt_1_2d8b494d52b14792b9ebf87c965571c4_large.jpg"
                              srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=">
                            <source media="(min-width: 768px)" data-srcset="//product.hstatic.net/200000258383/product/1va838xt_1_2d8b494d52b14792b9ebf87c965571c4_large.jpg"
                              srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=">
                            <img class="img-loop img-hover lazyload" data-src="//product.hstatic.net/200000258383/product/1va838xt_1_2d8b494d52b14792b9ebf87c965571c4_large.jpg"
                              src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" alt=" Váy nhún ngực tùng bèo 1VA838XT " />
                          </picture>
                        </a>
                        <div class="button-add hidden">
                          <button type="submit" title="Buy now" class="action" onclick="buy_now('1068085564')">Mua ngay<i class="fa fa-long-arrow-right"></i></button>
                        </div>
                        <div class="pro-price-mb">
                          <span class="pro-price">1,250,000₫</span>

                        </div>
                      </div>
                      <div class="product-detail clearfix">
                        <div class="box-pro-detail">
                          <h3 class="pro-name">
                            <a href="/products/vay-nhun-nguc-tung-beo-1va838xt" title="Váy nhún ngực tùng bèo 1VA838XT">
                              Váy nhún ngực tùng bèo 1VA838XT
                            </a>
                          </h3>
                          <div class="box-pro-prices">
                            <p class="pro-price ">
                              <span>1,250,000₫</span>

                            </p>
                          </div>
                        </div>
                      </div>
                    </div>



                  </div>

                  <div class="col-md-3 col-sm-6 col-xs-6 pro-loop col-4">










                    <div class="product-block product-resize ">
                      <div class="product-img ">



                        <a href="/products/vay-nhun-nguc-tung-beo-1va838be" title="Váy nhún ngực tùng bèo 1VA838BE" class="image-resize ratiobox">
                          <picture>
                            <source media="(max-width: 480px)" data-srcset="//product.hstatic.net/200000258383/product/1va838be_dac2d90ace1d485eb6168e324c04226a_large.jpg"
                              srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" />
                            <source media="(min-width: 481px) and (max-width: 767px)" data-srcset="//product.hstatic.net/200000258383/product/1va838be_dac2d90ace1d485eb6168e324c04226a_large.jpg"
                              srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" />
                            <source media="(min-width: 768px)" data-srcset="//product.hstatic.net/200000258383/product/1va838be_dac2d90ace1d485eb6168e324c04226a_large.jpg"
                              srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" />
                            <img class="lazyload img-loop" data-sizes="auto" data-src="//product.hstatic.net/200000258383/product/1va838be_dac2d90ace1d485eb6168e324c04226a_large.jpg"
                              data-lowsrc="//product.hstatic.net/200000258383/product/1va838be_dac2d90ace1d485eb6168e324c04226a_grande.jpg"
                              src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" alt=" Váy nhún ngực tùng bèo 1VA838BE " />
                          </picture>
                          <picture>
                            <source media="(max-width: 480px)" data-srcset="//product.hstatic.net/200000258383/product/1va838be_1_4343851415b843a2840da5c77c7fbff1_large.jpg"
                              srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=">
                            <source media="(min-width: 481px) and (max-width: 767px)" data-srcset="//product.hstatic.net/200000258383/product/1va838be_1_4343851415b843a2840da5c77c7fbff1_large.jpg"
                              srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=">
                            <source media="(min-width: 768px)" data-srcset="//product.hstatic.net/200000258383/product/1va838be_1_4343851415b843a2840da5c77c7fbff1_large.jpg"
                              srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=">
                            <img class="img-loop img-hover lazyload" data-src="//product.hstatic.net/200000258383/product/1va838be_1_4343851415b843a2840da5c77c7fbff1_large.jpg"
                              src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" alt=" Váy nhún ngực tùng bèo 1VA838BE " />
                          </picture>
                        </a>
                        <div class="button-add hidden">
                          <button type="submit" title="Buy now" class="action" onclick="buy_now('1068085935')">Mua ngay<i class="fa fa-long-arrow-right"></i></button>
                        </div>
                        <div class="pro-price-mb">
                          <span class="pro-price">1,550,000₫</span>

                        </div>
                      </div>
                      <div class="product-detail clearfix">
                        <div class="box-pro-detail">
                          <h3 class="pro-name">
                            <a href="/products/vay-nhun-nguc-tung-beo-1va838be" title="Váy nhún ngực tùng bèo 1VA838BE">
                              Váy nhún ngực tùng bèo 1VA838BE
                            </a>
                          </h3>
                          <div class="box-pro-prices">
                            <p class="pro-price ">
                              <span>1,550,000₫</span>

                            </p>
                          </div>
                        </div>
                      </div>
                    </div>



                  </div>

                  <div class="col-md-3 col-sm-6 col-xs-6 pro-loop col-4">










                    <div class="product-block product-resize ">
                      <div class="product-img ">



                        <a href="/products/vay-hoa-nhi-cam-nhun-than-1va810ca" title="Váy hoa nhí cam nhún thân 1VA810CA" class="image-resize ratiobox">
                          <picture>
                            <source media="(max-width: 480px)" data-srcset="//product.hstatic.net/200000258383/product/1va810ca_040979d3c5854f818176f88220a05dba_large.jpg"
                              srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" />
                            <source media="(min-width: 481px) and (max-width: 767px)" data-srcset="//product.hstatic.net/200000258383/product/1va810ca_040979d3c5854f818176f88220a05dba_large.jpg"
                              srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" />
                            <source media="(min-width: 768px)" data-srcset="//product.hstatic.net/200000258383/product/1va810ca_040979d3c5854f818176f88220a05dba_large.jpg"
                              srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" />
                            <img class="lazyload img-loop" data-sizes="auto" data-src="//product.hstatic.net/200000258383/product/1va810ca_040979d3c5854f818176f88220a05dba_large.jpg"
                              data-lowsrc="//product.hstatic.net/200000258383/product/1va810ca_040979d3c5854f818176f88220a05dba_grande.jpg"
                              src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" alt=" Váy hoa nhí cam nhún thân 1VA810CA " />
                          </picture>
                          <picture>
                            <source media="(max-width: 480px)" data-srcset="//product.hstatic.net/200000258383/product/1va810ca_1_8df0ff7729924e4c8bd8b7afd3838ee6_large.jpg"
                              srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=">
                            <source media="(min-width: 481px) and (max-width: 767px)" data-srcset="//product.hstatic.net/200000258383/product/1va810ca_1_8df0ff7729924e4c8bd8b7afd3838ee6_large.jpg"
                              srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=">
                            <source media="(min-width: 768px)" data-srcset="//product.hstatic.net/200000258383/product/1va810ca_1_8df0ff7729924e4c8bd8b7afd3838ee6_large.jpg"
                              srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=">
                            <img class="img-loop img-hover lazyload" data-src="//product.hstatic.net/200000258383/product/1va810ca_1_8df0ff7729924e4c8bd8b7afd3838ee6_large.jpg"
                              src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" alt=" Váy hoa nhí cam nhún thân 1VA810CA " />
                          </picture>
                        </a>
                        <div class="button-add hidden">
                          <button type="submit" title="Buy now" class="action" onclick="buy_now('1067326747')">Mua ngay<i class="fa fa-long-arrow-right"></i></button>
                        </div>
                        <div class="pro-price-mb">
                          <span class="pro-price">650,000₫</span>

                        </div>
                      </div>
                      <div class="product-detail clearfix">
                        <div class="box-pro-detail">
                          <h3 class="pro-name">
                            <a href="/products/vay-hoa-nhi-cam-nhun-than-1va810ca" title="Váy hoa nhí cam nhún thân 1VA810CA">
                              Váy hoa nhí cam nhún thân 1VA810CA
                            </a>
                          </h3>
                          <div class="box-pro-prices">
                            <p class="pro-price ">
                              <span>650,000₫</span>

                            </p>
                          </div>
                        </div>
                      </div>
                    </div>



                  </div>

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

<?php get_footer(); ?>
