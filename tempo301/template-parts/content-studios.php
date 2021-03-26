<section>
  <header class="title-header ph5 pt6 pb4 flex flex-column justify-center items-center" id="fade-in">
    <h1 class="ttu tc tracked-mega f1-ns f3 fw3"><?php the_title() ?></h1>
    <p class="ttu tracked-mega tc lh-custom-paragraph f6-ns f7 mt0 mb4"><?php the_field('pilates_or_301'); ?></p>

    <div class="contact-container flex justify-between items-center">
      <div class="google-map">
        <?php the_field('google_map_embed'); ?>
      </div>
      <div class="lh-custom-paragraph tracked studio-info pl5 fw3" id="fade-in">
        <p class="mv0"><?php the_field('address'); ?></p>
        <a class="ttl grey fw4" href="mailto:<?php the_field('email'); ?>">
          <?php the_field('email'); ?>
        </a>
        <p class="mv0"><?php the_field('number'); ?></p>
      </div>

    </div>

  </header>

</section>

<!-- MB SECTION -->
<div class="mindbody pt5 ph5-l ph3-s ph4 pb3 lh-custom-paragraph" id="fade-in">
    <?php the_content(); ?>
</div>


<!-- CREATE ACCOUNT SECTION -->
<div class="flex flex-column justify-center items-center pa5-l pa3-s pa4 pt3" id="fade-in">
  <p class="tc lh-custom-paragraph">If you are new to Tempo Pilates, you can open a free online account and start booking.
    <br>
 Introductory Offer – First Reformer class only £15 at your home studio.</p>
  <div id="btn-book" class="ph4-l ph3 pv3 flex justify-center items-center" style="width: fit-content;">
    <p id="btn-popup" style="color: #127199; cursor: pointer;" class="ttu ma0 tracked"><script src="https://widgets.mindbodyonline.com/javascripts/healcode.js" type="text/javascript"></script><healcode-widget data-version="0.2" data-link-class="healcode-login-register-text-link" data-site-id="390" data-mb-site-id="9641" data-type="account-link" data-inner-html="Create account"  /></p>
  </div>
</div>

<!-- FACILITIES SECTION -->
<div class="facilities-container bg-grey mw9 center ph3-ns pv4" id="fade-in">

  <p class="fw4 ttu tc tracked">Facilities</p>

  <div class="facilities-values cf ph2-ns pt3 pb4">
    <?php

    // Check rows exists.

    if( have_rows('facilities_list') ):

        // Loop through rows.
        while( have_rows('facilities_list') ) : the_row();

            // Load sub field value.
            $sub_value = get_sub_field('facility');
            // Do something...?>
            <div class="fl w-100 w-25-ns tc">
              <p class="tc pa1 ma0"><?php echo the_sub_field('facility'); ?></p>
            </div>

        <?php // End loop.
        endwhile;

    // No value.
    else :
        // Do something...
    endif; ?>
  </div>
</div>

<?php get_template_part('template-parts/content-studio-explore'); ?>

<!-- <div class="studio-overlay w-90 h-100 pa5-l pa3 flex flex-column items-center">
  <h1 class="tc pt4 ph3 ttu fw3 lh-custom-heading">Create Account</h1>
  <div class="close-overlay">
    <?php echo wp_get_attachment_image(549, array('48', '48'), "", array( "class" => "close-icon-responsive")); ?>
  </div>
  <div class="w-80">
    <?php the_field('create_account_link'); ?>
  </div>
</div> -->

<?php get_footer(); ?>


