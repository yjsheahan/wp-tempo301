<div class="class-container pt6-ns pt5 pb5">

  <div class="trainers-title ttu tracked-mega tc" id="fade-in">
    <h1 class="ttu f1 f3-s f4-xs fw3 lh-copy" id="trainers-index"><?php the_title(); ?></h1>
  </div>

  <div class="classes-index flex flex-wrap" id="fade-in">
    <?php

    $args = array(
      'posts_per_page' => -1,
      'post_type' => 'classes',
      'orderby' => 'date',
      'order' => 'ASC'
    );

    $query = new WP_Query( $args );


    if ( $query->have_posts() ): while ( $query->have_posts() ): $query->the_post();
      $thumb = get_the_post_thumbnail_url(); ?>
      <div class="w-third-ns w-100 pa5-l pa4 lh-custom-paragraph tracked">
        <div class="aspect-ratio aspect-ratio--1x1">
          <a href="<?php the_permalink(); ?>">
            <div class="aspect-ratio--object single-class bg-center classes-card cover flex items-center justify-center ph3"
                style="background-image: url('<?php echo $thumb; ?>');">
            </div>
          </a>
        </div>

        <div class="pv4 class-card-text" id="fade-in">

          <h1 class="f6 ttu fw5"><?php the_title(); ?></h1>
          <p class="lh-copy"><?php custom_excerpt_length( the_excerpt() ); ?> </p>
          <a class="fw6" href="<?php the_permalink(); ?>">Read more</a>
        </div>
      </div>

    <?php endwhile; endif; ?>
  </div>

</div>

<?php get_footer(); ?>

