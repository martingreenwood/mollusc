<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package mollusc
 */

?>



<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	
	<header>
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
		<h2><?php the_field( 'sub_title' ); ?></h2>
	</header>

	<div class="row">
		<div class="entry-content">
			
			<div class="span6">	
				<?php the_content(); ?>
			</div>
			<div class="span6 second-col">
				<?php the_field( 'second_column'); ?>
			</div>
		</div>
	</div>

</article>
