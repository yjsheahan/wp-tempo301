<div class="trainer-container pv5 ph6 lh-custom-paragraph">

  <div class="trainer-header pt5 flex justify-between">
    <div class="aspect-ratio trainer-img-div aspect-ratio--1x1">
      <div style="<?php nice_background('image') ?>" class="trainer-image cover"></div>
    </div>

    <div class="trainer-header-text ttu tracked-mega tr-ns tc ml3-l " id="fade-in">
      <h1 class="ttu f3-ns f4 fw3 lh-copy"><?php the_title(); ?></h1>
      <h4 class="f3 f4-s f5-xs fw3"><?php the_field('position'); ?></h4>
    </div>

  </div>

  <div class="trainer-text lh-custom-paragraph pv5" id="fade-in">
    <p class="pt4-l"><?php the_content(); ?></p>
  </div>

</div>
<div class="trainer-block"></div>

<?php get_footer(); ?>
