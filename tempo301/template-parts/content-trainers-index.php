<div class="trainer-container pa6 lh-custom-paragraph">

  <div class="trainers-title ttu tracked-mega tr ml3-l" id="fade-in">
    <h1 class="ttu f1 f3-s f4-xs fw3 lh-copy" id="trainers-index"><?php the_field('alternative_head'); ?></h1>
  </div>

  <div class="trainers-index flex flex-column pb5">


    <?php

    $args = array(
      'posts_per_page' => -1,
      'post_type' => 'trainers',
      'orderby' => 'date',
      'order' => 'ASC'
    );

    $query = new WP_Query( $args );


    if ( $query->have_posts() ): while ( $query->have_posts() ): $query->the_post(); ?>

        <div class="trainer-card flex-ns justify-between-ns pv5" id="fade-in">
          <div class="aspect-ratio aspect-ratio--1x1 fl w-third-ns w-100-s pa2">
            <div style="<?php nice_background('image') ?>" class="trainer-image cover"></div>
          </div>
          <div class="trainer-card-text fl w-two-thirds-ns w-100-s pa2 ml4 ml0-s">
            <p class="ttu tracked fw3"><span class="fw4"><?php the_title(); ?></span> <?php the_field('position');?></p>
            <p><?php custom_excerpt_length( the_excerpt() ); ?> <a class="fw6" href="<?php the_permalink(); ?>">Read more</a></p>
          </div>
        </div>
        <div class="divider"></div>


    <?php endwhile; endif; ?>
  </div>
</div>

<div class="trainer-block"></div>

