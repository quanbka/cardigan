<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package lep
 */

get_header();
?>

<div class="container-fluid">
	<div class="col-md-9 col-sm-12 col-xs-12">
		<div class="wrap-collection-title row">

		<section class="error-404 not-found">
			<header class="page-header">
				<h1 class="page-title"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'lep' ); ?></h1>
			</header><!-- .page-header -->


			</div><!-- .page-content -->
		</section><!-- .error-404 -->

	</div>
	</div>
	</div>

<?php
get_footer();
