<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package tempo301
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<header class="entry-header title-header ph5-l ph4 pt6 pb4 flex flex-column justify-center items-center" id="fade-in">
		<h1 class="ttu tracked-mega fw3 tc"><?php the_title() ?></h1>
    <p class="ttu tracked-mega tc lh-custom-paragraph f6"><?php the_field('subhead'); ?></p>
	</header>


	<div class="entry-content pa5-ns pa4 lh-custom-paragraph" id="fade-in">
		<p class=""><?php the_content(); ?></p>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
<!-- 			<?php
		edit_post_link(
			sprintf(
				wp_kses(
					/* translators: %s: Name of current post. Only visible to screen readers */
					__( 'Edit <span class="screen-reader-text">%s</span>', 'tempo301' ),
					array(
						'span' => array(
							'class' => array(),
						),
					)
				),
				wp_kses_post( get_the_title() )
			),
			'<span class="edit-link">',
			'</span>'
		);
		?> -->
	</footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->
