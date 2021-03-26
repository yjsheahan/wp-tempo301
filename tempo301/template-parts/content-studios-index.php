<div class="studios-container">
  <header class="ph5 pt6-l pb5-l flex flex-column justify-center items-center pt6 pb5" style="background-color: #F7F7F7;" id="fade-in">
    <h1 class="ttu tracked-mega fw3 f2 tc"><?php the_title() ?></h1>
  </header>

  <div class="studio-index flex flex-column pb5">

    <?php

    $args = array(
      'posts_per_page' => -1,
      'post_type' => 'studios',
      'order' => 'DESC',
    );

    $query = new WP_Query( $args );

    if ( $query->have_posts() ): while ( $query->have_posts() ): $query->the_post(); ?>

        <div class="studio-card flex justify-center items-center mh3 mv4" id="fade-in">
          <a href="<?php the_permalink(); ?>">
            <div class="aspect-ratio aspect-ratio--16x9 flex items-center justify-center fl">

                <div style="background-color: #B3B3B3; <?php nice_background('image') ?>" class="studio-image cover"></div>
            </div>
          </a>
          <div class="w-50-ns w-90 studio-text pl4 lh-copy flex flex-column justify-center">
            <p class="ma0 ttu"><?php the_title(); ?> | <span class= "f7 grey"><?php the_field('pilates_or_301'); ?></span></p>
            <p class="ma0 f7"><?php the_field('address'); ?></p>
            <a href="<?php the_field('email'); ?>"><p class="ma0 f7 ttl grey tracked-tight"><?php the_field('email'); ?></p></a>
            <p class="f7 ma0"><?php the_field('number'); ?></p>
            <a class="tracked-tight pv3" href="<?php the_permalink(); ?>">
              <p class="ma0 f7 ttu fw5 grey">Book a class</p>
            </a>
          </div>
        </div>

        <div class="divider"></div>

    <?php endwhile; endif; ?>

  </div>
</div>
<?php get_footer(); ?>
