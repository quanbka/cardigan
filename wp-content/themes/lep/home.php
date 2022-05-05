<?php get_header(); ?>
<main class="mainContent-theme  main-index ">
	<?php $sliders = get_posts([
		'post_type' => 'slider'
	]); ?>
	<style media="screen">
		.owl-carousel .owl-item img {
			height: auto;
		}
	</style>
	<div id="home-slider">
		<div id="homepage_slider" class="owl-carousel">
			<?php foreach ($sliders as $key => $post): ?>
				<?php $url = get_post_meta($post->ID, 'url', true) ?>

			<div class="item ">
				<a href="<?php echo $url ?>" title="" aria-label="<?php the_title() ?>">
							<?php the_post_thumbnail() ?>
				</a>
			</div>
			<?php endforeach; ?>

		</div>
	</div>
	<!-- Nhóm 1 -->

	<!--  -->


	<?php 
		$categories = [
			'du-lich', 'bo-hoa-qua', 'cong-ty-nha-hang', 'tap-de', 'ao-phong',
		];
		foreach ($categories as $category) :
			$ctgObject = get_term_by('slug', $category, 'product_cat');
			$url = esc_url(get_term_link($ctgObject));
			$name = ($ctgObject->name );
			$img = get_term_meta($ctgObject->term_id, 'thumbnail_id', true);
		
			
	?>

		

	<section class="section section-collection">
		<div class="wrapper-heading-home animation-tran text-center">
			<div class="container-fluid">
				<a href="<?php echo $url ?>">
				<?php
					if ($img) {
						$img = wp_get_attachment_url($img);
						echo "<img style='width: 100%;' src='$img'>";
				 	} else {
				?>
				<div class="site-animation">
					<h2>
						<?php echo $name ?></a>
					</h2>
				</div>
				<?php } ?>
			</div>
		</div>
		<div class="wrapper-collection-1">
			<div class="container-fluid">
				<div class="row">
					<div class="clearfix content-product-list">
						<?php
							$args = array(
								'number' => 10,
								'category' => array( $category ),
							);
							$products = wc_get_products( $args );
							foreach ($products as $key => $product) {
								global $product;
									 get_template_part('box');
									// get_template

							}
						 ?>

					</div>
				</div>
			</div>
		</div>
	</section>

	<?php endforeach; ?>
	
	<style media="screen">
		.wp-post-image {
			height: auto;
		}
	</style>
	<div class="wrapper-home-banner">
		<div class="clearfix">

			<?php
				$slider2 = get_posts([
					'post_type' => 'slider2'
				]);
				foreach ($slider2 as $key => $post): ?>
				<?php $url = get_post_meta($post->ID, 'url', true) ?>
				<div class="col-xs-12 col-sm-4 col-md-4 home-banner-pd">
					<div class="block-banner-category ratiobox">
						<a class="link-banner" href="<?php echo $url; ?>">
								<?php the_post_thumbnail() ?>
						</a>
						<div class="caption_banner">
							<span class="subtitle"></span>
							<h3></h3>
						</div>
					</div>
				</div>
			<?php endforeach; ?>
		</div>
	</div>


</main>
<?php get_footer(); ?>
