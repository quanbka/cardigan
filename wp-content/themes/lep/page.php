<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package lep
 */

get_header();
?>
	<div class="container-fluid">
		<div class="col-md-9 col-sm-12 col-xs-12">
			<div class="wrap-collection-title row">



				<?php
				while ( have_posts() ) :
					the_post();

					get_template_part( 'template-parts/content', 'page' );

					// If comments are open or we have at least one comment, load up the comment template.
					if ( comments_open() || get_comments_number() ) :
						comments_template();
					endif;

				endwhile; // End of the loop.
				?>

			</div>
		</div>
		<div class="col-md-3 col-sm-12 col-xs-12 sidebar-fix">
			<?php get_sidebar(); ?>
		</div>


	</div>

<?php

get_footer();
