<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package tempo301
 */

get_header();
?>

<main id="primary" class="site-main">
    <?php
    if ( have_posts() ) :

      if ( is_home() && ! is_front_page() ) :
        ?>
        <header>
          <h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
        </header>
        <?php
      endif;

      /* Start the Loop */
      while ( have_posts() ) :
        the_post(); ?>

        <?php if (has_post_thumbnail( $post->ID ) ): ?>
          <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
            <section class="index-blog-hero">
              <div class="aspect-ratio aspect-ratio--16x9 mb4">
                <div class="aspect-ratio--object cover" style="background: linear-gradient(0deg, rgba(183,183,183,0.4), rgba(183,183,183,0.4)), url('http://tempo301.co.uk/wp-content/uploads/2021/02/bridge-2trainers.jpg') center;">
                </div>
              </div>

              <div class="hero-text flex flex-column items-end w-50" id="fade-in">
                <p class="ttu fw3 tr mv0">Latest blog post</p>
                <h1 class="ttu tracked tr f3 fw4 lh-copy"><?php the_title(); ?></h1>
                <div class="hero-buttons flex tc lh-copy">
                  <div id="btn-book" class="button ph4 pv3-l pv2 flex justify-center items-center">
                    <a href="http://tempo301.co.uk/bookings/">Book now</a>
                  </div>
                  <div id="btn-blog" class="button ph4 pv3-l pv2 flex justify-center items-center ml2">
                    <a href="<?php the_permalink(); ?>">Read blog post</a>
                  </div>
                </div>
              </div>

            </section>
          <?php endif; ?>


      <?php endwhile;

      the_posts_navigation();

    else :

      get_template_part( 'template-parts/content', 'none' );

    endif;
    ?>
    <?php get_template_part('template-parts/content-description'); ?>

    <?php get_template_part('template-parts/content-explore'); ?>

  </main><!-- #main -->

<?php
get_footer();
