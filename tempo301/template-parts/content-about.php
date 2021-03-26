<section class="method min-vh-100 flex">
  <div class="method-left-content w-50 flex flex-column items-center justify-center pa5 yellow-overlay ttu tc">
    <!-- About -->
    <h1 class="f2-xl f3 method-about fw1 tracked-mega"><?php the_title(); ?></h1>


    <!-- Logo Image -->
    <div class="aspect-ratio method-logo-div trainer-img-div aspect-ratio--16x9">
      <div style="background-image: url('<?php echo get_the_post_thumbnail_url(); ?>');" class="w-90 bg-center contain"></div>
    </div>

  </div>

  <div class="method-right-content w-50 pa5-l pa4 flex flex-column justify-center lh-custom-paragraph tracked tj" id="fade-in">
    <!-- Method Content -->
    <p><?php the_content(); ?></p>
  </div>
</section>
