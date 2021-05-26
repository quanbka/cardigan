<?php
/**
 * The template for displaying product content within loops
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.6.0
 */

defined( 'ABSPATH' ) || exit;

global $product;

// Ensure visibility.
if ( empty( $product ) || ! $product->is_visible() ) {
	return;
}
?>
<div class="col-md-3 col-sm-6 col-xs-6 pro-loop col-4">
	<div class="product-block product-resize ">
		<div class="product-img ">
			<a href="<?php echo $product->get_permalink() ?>" title="<?php echo $product->get_title() ?>" class="image-resize ratiobox">
				<?php
          $image1 = wp_get_attachment_url($product->get_image_id());
          $image2 = wp_get_attachment_url($product->get_gallery_image_ids()[0]);
        ?>
				<picture>

					<img class="lazyload img-loop" data-sizes="auto" data-src="<?php echo $image1 ?>" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII="
						alt=" <?php echo $product->get_title() ?> " />
				</picture>
				<picture>
					<img class="img-loop img-hover lazyload" data-src="<?php echo $image2 ?>" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII="
						alt=" <?php echo $product->get_title() ?> " />
				</picture>
			</a>

			<div class="pro-price-mb">
				<span class="pro-price"><?php echo $product->get_price_html() ?></span>
			</div>
		</div>
		<div class="product-detail clearfix">
			<div class="box-pro-detail">
				<h3 class="pro-name">
					<a href="<?php echo $product->get_permalink() ?>" title="<?php echo $product->get_title() ?>">
						<?php echo $product->get_title() ?>
					</a>
				</h3>
				<div class="box-pro-prices">
					<p class="pro-price ">
						<span><?php echo $product->get_price_html() ?></span>
					</p>
				</div>
			</div>
		</div>
	</div>
</div>
