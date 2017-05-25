<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package mollusc
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">

<?php wp_head(); ?>
</head>

<body <?php body_class($pagename); ?>>
<div id="page" class="site">

	<nav id="site-navigation" class="main-navigation" role="navigation">
		<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">
			<span></span>
			<span></span>
			<span></span>
		</button>
		<?php wp_nav_menu( array( 'theme_location' => 'menu-1', 'menu_id' => 'primary-menu' ) ); ?>
	</nav>

	<header id="masthead" class="site-header" role="banner">

		<div class="caption">
			<div class="table">
				<div class="cell middle">

					<div class="">
					
						<div class="half">
							<?php
							if ( function_exists( 'the_custom_logo' ) ) {
								the_custom_logo();
							} else {
								?>
								<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
								<?php
							}
							?>
							<?php if(get_field( 'top_intro' )): ?>
							<div class="copy">
								<?php the_field( 'top_intro' ); ?>
							</div>
							<?php endif; ?>
						</div>
					
					</div>

				</div>
			</div>
		</div>

	</header>

	<div id="content" class="site-content">
