<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package mollusc
 */

get_header(); ?>

	<?php get_template_part( 'partials/homepage', 'slider' ); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main container" role="main">

			<?php
			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/content', 'homepage' );

			endwhile; // End of the loop.
			?>

		</main>

		<div class="columns">

		<?php
		if( have_rows('columns') ):
			while ( have_rows('columns') ) : the_row();
				?>
				<div class="column">
					<div class="copy">
						<div class="table">
							<div class="cell middle">
							<?php the_sub_field('column_content'); ?>
							</div>
						</div>
					</div>
				</div>
				<?php
			endwhile;
		endif;
		?>

		</div>

	</div>

<?php
get_footer();
