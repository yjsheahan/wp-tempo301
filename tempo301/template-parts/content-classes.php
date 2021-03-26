<div>
  <section class="lh-custom-heading">
    <header class="entry-header title-header ph5 pt6 pt4-s pb4 flex flex-column justify-center items-center" id="fade-in">
      <h1 class="ttu tc tracked-mega f1-ns f3 f5-s fw3"><?php the_title() ?></h1>
      <p class="ttu tracked-mega tc lh-custom-paragraph f6-ns f7"><?php the_field('subhead'); ?></p>
    </header>

    <div class="blog-content entry-content ph6-ns pv5-ns pa4" id="fade-in">
      <p><?php the_content(); ?></p>
      <div class="mv4 tc">
        <a href="http://tempo301.co.uk/bookings/" id="btn-black" class="ph4 pv3">Book now</a>
      </div>
    </div>
  </section>
</div>

<?php get_template_part('template-parts/content-class-explore'); ?>


<?php get_footer(); ?>
