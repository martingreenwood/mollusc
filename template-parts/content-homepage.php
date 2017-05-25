<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package mollusc
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class('span7'); ?>>

	<div class="entry-content">
		<?php
			the_content();
		?>
	</div>

</article>
