<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage DCS
 * @since 1.0.0
 */

?>

	</main><!-- #main -->
<footer class="footer">
      <div class="footer__wrapper">
        <div class="row -gutter">
          <div class="col -twoThirds">
            <div class="footer__box">
              <svg class="footer__logo logo-full">
                <use xlink:href="#logo-full"></use>
              </svg>
              <p class="footer__tagline">Salesforce problems? We’ve&nbsp;got&nbsp;you&nbsp;covered.</p>
            </div>
            <div class="footer__box">
            <div class="footer__logos">
              <?php while( have_rows('footer_badges', 'option') ): the_row(); 
                // vars
                $image = get_sub_field('badge_icon');
                ?>
                <img class="footer__logo" src="<?php echo $image; ?>"/>
              <?php endwhile; ?>
              </div>
            </div>
          </div>
          <div class="col -oneThirds -mobileMargin">
            <div class="footer__box">
              <p class="footer__label">Say Hello</p><a class="footer__details" href="mailto:hello@dupontcirclesolutions.com">hello@dupontcirclesolutions.com</a><a class="footer__details" href="tel:1-703-340-1443">703.340.1443</a>
            </div>
            <div class="footer__box">
              <p class="footer__label">Find Us</p>
              <p class="footer__details">3100 Clarendon Boulevard,<br/>Arlington, VA 22201</p>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col">
            <div class="footer__box">
              <p class="footer__legal">&copy;&nbsp;
                <script>document.write(new Date().getFullYear());</script>
                <noscript>2019</noscript>&nbsp;Dupont Circle Solutions. All Rights Reserved.
              </p>
            </div>
          </div>
        </div>
      </div>
    </footer>