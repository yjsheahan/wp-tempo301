<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package tempo301
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
  <link rel="stylesheet" href="https://unpkg.com/tachyons@4.12.0/css/tachyons.min.css"/>
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700&family=Spartan:wght@400;500;600&display=swap" rel="stylesheet">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'tempo301' ); ?></a>
	<header id="masthead" class="site-header">
    <nav id="site-navigation" class="main-navigation flex justify-between items-center ph5-ns ph4 pv3">
      <!-- LINK WITH LOGO THAT GOES BACK TO THE HOMEPAGE -->
      <a href="<?php echo home_url(); ?>" style="flex: 1;" id="header-logo">
        <?php echo wp_get_attachment_image(7, 'medium'); ?>
      </a>
      <!-- NAV BAR -->
      <?php wp_nav_menu( array( 'theme_location' => 'header-nav', 'container_class' => 'header-menu' ) ); ?>
      <div style="flex: 1;" class="flex justify-end items-center login-widget">
        <script src="https://widgets.mindbodyonline.com/javascripts/healcode.js" type="text/javascript"></script><healcode-widget data-version="0.2" data-link-class="healcode-login-register-text-link" data-site-id="390" data-mb-site-id="9641" data-type="account-link" data-inner-html="Log in | Sign up"  />
      </div>
      <div id="mobile-nav-toggle">
        <a href="#" class="toggle-nav pl4">
          <?php echo wp_get_attachment_image(512, 'medium'); ?>
       </a>
      </div>
    </nav><!-- #site-navigation -->
    <nav class="mobile-menu flex flex-column justify-center pa">
      <div class="close-icon">
        <?php echo wp_get_attachment_image(549, array('48', '48'), "", array( "class" => "close-icon-responsive")); ?>
      </div>
      <!-- TP LOGO -->
      <div class="mobile-logo flex w-100 justify-center pv3">
        <?php echo wp_get_attachment_image(547, array('416', '89'), "", array( "class" => "img-responsive" )); ?>
      </div>
      <div class="pa2">
        <?php wp_nav_menu( array( 'theme_location' => 'header-nav', 'container_class' => 'header-menu-mobile' ) ); ?>
      </div>
        <div class="divider mobile-only"></div>
        <div class="mobile-login pv3 mobile-only">
          <script src="https://widgets.mindbodyonline.com/javascripts/healcode.js" type="text/javascript"></script><healcode-widget data-version="0.2" data-link-class="healcode-login-register-text-link" data-site-id="390" data-mb-site-id="9641" data-type="account-link" data-inner-html="Log in | Sign up"  />
        </div>
        <div class="divider"></div>

      <div class="pa2">
        <?php wp_nav_menu( array( 'theme_location' => 'footer-nav', 'container_class' => 'footer-menu-mobile' ) ); ?>
      </div>
      <div class="divider"></div>
      <div class="mobile-menu-socials flex justify-center pb4">
        <a href="https://www.facebook.com/login/?next=https%3A%2F%2Fwww.facebook.com%2Ftempo301ldn" onclick="window.open(this.href); return false;" onkeypress="window.open(this.href); return false;"><div>
          <img src="http://tempo301.co.uk/wp-content/uploads/2021/02/facebook-32.png" alt="Facebook Icon">
        </div></a>
        <a href="https://www.instagram.com/tempo301ldn/" onclick="window.open(this.href); return false;" onkeypress="window.open(this.href); return false;"><div>
          <img src="http://tempo301.co.uk/wp-content/uploads/2021/02/instagram-32.png" alt="IG Icon">
        </div></a>
        <a href="https://twitter.com/tempo301ldn" onclick="window.open(this.href); return false;" onkeypress="window.open(this.href); return false;"><div>
          <img src="http://tempo301.co.uk/wp-content/uploads/2021/02/twitter-32.png" alt="Twitter Icon">
        </div></a>
        <a href="https://www.tiktok.com/@tempo301ldn?lang=en" onclick="window.open(this.href); return false;" onkeypress="window.open(this.href); return false;"><div>
          <img src="http://tempo301.co.uk/wp-content/uploads/2021/02/tik-tok.png" alt="TikTok">
        </div></a>
        <a href="https://www.pinterest.co.uk/tempo301ldn/" onclick="window.open(this.href); return false;" onkeypress="window.open(this.href); return false;"><div>
          <img src="http://tempo301.co.uk/wp-content/uploads/2021/02/pinterest-32-1-3.png" alt="Pinterest Icon">
        </div></a>
      </div>
    </nav>


	</header><!-- #masthead -->
