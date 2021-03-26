<div class="container center ph5-l mb3-l">

  <div class="flex items-center justify-between mb5 ph3" id="fade-in">
    <div class="line"></div>
    <h1 class="f3-s f2 center tc ttu lh-title mv0 explore-title items-center dark-grey tracked fw2">
      Other classes
    </h1>
    <div class="line"></div>
  </div>

  <div class="flex-ns flex-wrap justify-between pb5">
    <?php

      $args = array(
        'posts_per_page' => 3,
        'post_type' => 'classes',
        'orderby' => 'rand',
        'post__not_in' => array($post->ID),
      );

      $query = new WP_Query( $args );

      if ( $query->have_posts() ): while ( $query->have_posts() ): $query->the_post();
        $thumb = get_the_post_thumbnail_url(); ?>


        <a class="db link w-100 w-third-ns ph3 mb3 mb0-ns" href="<?php the_permalink(); ?>">
          <div class="aspect-ratio aspect-ratio--1x1" id="fade-in">

            <div class="aspect-ratio--object bg-center explore-class cover flex items-center justify-center mh3"
            style="background-image: url('<?php echo $thumb; ?>');">
              <div class="class-explore-overlay">
                <p class="mv0 ttu tracked f5 f3-l tc lh-title yellow bold">
                  <?php the_title(); ?>
                </p>
              </div>
            </div>

          </div>
        </a>
    <?php endwhile; endif; ?>

  </div>

</div>
