<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package tempo301
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

  <section class="pa5 pa4-s lh-custom-paragraph flex flex-column justify-center" id="fade-in">
    <div class="blog-title">
      <h1 class="f3 f4-s fw3 tracked-mega ttu pv4 lh-custom-heading"><?php the_title(); ?> | <span class="ttu grey"><?php the_date(); ?></span></h1>
    </div>

    <div class="blog-content" id="fade-in">
      <div class="blog-image fr ph4">
        <?php the_post_thumbnail( 'medium' ); ?>
      </div>
      <p><?php the_content(); ?></p>
    </div>
  </section>

	<header class="entry-header">

	</header><!-- .entry-header -->

	<div class="entry-content">

	</div><!-- .entry-content -->

	<footer class="entry-footer">
    <?php get_footer(); ?>
  </footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->
