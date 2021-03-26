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
 * @package tempo301
 */

get_header();
?>

	<main id="primary" class="site-main">

		<?php
		while ( have_posts() ) :
			the_post();

      if ( is_page(78) ) {
        get_template_part( 'template-parts/content-about' );
      } elseif ( is_page(171) ) {
        get_template_part( 'template-parts/content-trainers-index' );
      } elseif ( is_page(100) ) {
        get_template_part( 'template-parts/content-classes-index');
      } elseif ( is_page(175) ) {
        get_template_part( 'template-parts/content-studios-index');
      } elseif ( is_page(173) ) {
        get_template_part( 'template-parts/content-pricing');
      } elseif ( is_page(90) ) {
        get_template_part( 'template-parts/content-blog');
      } elseif ( is_page(235) ) {
        get_template_part( 'template-parts/content-terms');
      } else {

			 get_template_part( 'template-parts/content', 'page' );

  			// If comments are open or we have at least one comment, load up the comment template.
  			if ( comments_open() || get_comments_number() ) :
  				comments_template();
  			endif;

      }

		endwhile; // End of the loop.
		?>

	</main><!-- #main -->

<?php
get_footer();
