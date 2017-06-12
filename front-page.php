<?php
/**
 * The template for displaying welcome splah page
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package mollusc
 */

get_header('welcome'); ?>

<div class="table">
	<div class="cell middle">
		<center>
			<?php
			if ( function_exists( 'the_custom_logo' ) ) {
				the_custom_logo();
			} else {
				?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/home' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				<?php
			}
			?>
			<h3><a href="<?php echo home_url( '/home' ); ?>">ENTER SITE</a></h3>
		</center>
	</div>
</div>

<?php get_footer('welcome');
