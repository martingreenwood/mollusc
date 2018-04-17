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

	<div id="primary" class="content-area">
		<main id="main" class="site-main container" role="main">

			<?php
			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/content', 'page' );

			endwhile; // End of the loop.
			?>

		</main>
	</div>

	<div class="cta">
	
		<div class="container">

			<?php $shortcode = get_field( 'facebook_feed', 'options' ); ?>
			<?php if ($shortcode): ?>
			<div class="row">
				<?php echo do_shortcode( $shortcode ); ?>
			</div>
			<?php endif; ?>

			<div class="row">

				<div class="span3">
					&nbsp;<!-- pushes it to the middle -->
				</div>
				<div class="span6">
					<h2>To find out more</h2>
					<p>We would be more than happy to discuss your requirements, or provide more information on our services.</p>
					<p>Email: <a href="mailto:emily@octopodapa.com">emily@octopodapa.com</a><br>
					<a href="tel:07738495216">Tel: 07738 495216</a></p>
					<a class="more" href="<?php echo home_url('/contact-us'); ?>">Enquire Online</a>
				</div>
				<div class="span3">
					&nbsp;<!-- pushes it to the middle -->
				</div>

			</div>

		</div>

	</div>

<?php
get_footer();
