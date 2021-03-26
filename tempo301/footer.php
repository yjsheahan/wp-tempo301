<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package tempo301
 */

?>

	<footer id="colophon" class="site-footer flex justify-between pa4">
    <!-- LEFT SIDE OF FOOTER -->
		<div class="footer-content flex flex-column">
      <!-- FOOTER NAV -->
      <div class="footer-nav">
        <?php wp_nav_menu( array( 'theme_location' => 'footer-nav', 'container_class' => 'footer-menu' ) ); ?>
      </div>
      <!-- FOOTER FLEXBOX -->
      <div class="footer-flex flex mt4 justify-center items-center">
        <!-- LOGO -->
        <img src="https://test.frb.io/wp-content/uploads/2021/01/TEMPO_301_LOGO_PRINT_CMYK_INVERSE_STACKED-e1611155277549.png" alt="Tempo 301 logo">
        <!-- REGISTERED ADDRESS -->
        <p class="tracked-mega ttu pl4 lh-copy f6">
          TEMPO ELEPHANT PARK LTD Company number 12409655
          <br>VAT registered GB 360169801
          <br>Registered office: 58 Downsfield Road,
          <br>London, UK, E17 8BZ
          <br>Copyright All Rights Reserved © <?php echo date('Y'); ?>
        </p>
      </div>
		</div>

    <!-- RIGHT SIDE OF FOOTER -->
    <div class="footer-socials flex flex-column">
      <a href="https://www.facebook.com/login/?next=https%3A%2F%2Fwww.facebook.com%2Ftempo301ldn" onclick="window.open(this.href); return false;" onkeypress="window.open(this.href); return false;"><div>
        <img src="http://tempo301.co.uk/wp-content/uploads/2021/02/facebook-32.png" alt="FB">
      </div></a>
      <a href="https://www.instagram.com/tempo301ldn/" onclick="window.open(this.href); return false;" onkeypress="window.open(this.href); return false;"><div>
        <img src="http://tempo301.co.uk/wp-content/uploads/2021/02/instagram-32.png" alt="IG">
      </div></a>
      <a href="https://twitter.com/tempo301ldn" onclick="window.open(this.href); return false;" onkeypress="window.open(this.href); return false;"><div>
        <img src="http://tempo301.co.uk/wp-content/uploads/2021/02/twitter-32.png" alt="Twitter">
      </div></a>
      <a href="https://www.tiktok.com/@tempo301ldn?lang=en" onclick="window.open(this.href); return false;" onkeypress="window.open(this.href); return false;"><div>
        <img src="http://tempo301.co.uk/wp-content/uploads/2021/02/tik-tok.png" alt="TikTok">
      </div></a>
      <a href="https://www.pinterest.co.uk/tempo301ldn/" onclick="window.open(this.href); return false;" onkeypress="window.open(this.href); return false;"><div>
        <img src="http://tempo301.co.uk/wp-content/uploads/2021/02/pinterest-32-1-3.png" alt="Pinterest">
      </div></a>

    </div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>
</body>
</html>
