<?php
/**
 * Displays the Venture Capital and Private Equity Firms header area
 *
 * @package WordPress
 * @subpackage DCS
 * @since 1.0.0
 */
?>

<header class="header" data-animation="header-d" data-page="industries">
      <div class="header__wrapper">
        <div class="header__content">
         <div class="single">
          <div class="single__header">
            <div class="single__thumb">
              <?php if (has_post_thumbnail()) {the_post_thumbnail();}?>
            </div>
            <div class="single__right">
              <div class="single__title">
                <h3><?php the_title(); ?></h3>
              </div>
            </div>
          </div>
         </div>
          
        </div>
        <div class="header__lines -punch">
          <div class="header__lineBox -middle">
            <div class="header__line"></div>
          </div>
          <div class="header__lineBox -right">
            <div class="header__line"></div>
          </div>
          <div class="header__lineBox -top">
            <div class="header__line"></div>
          </div>
          <div class="header__lineBox -left">
            <div class="header__line"></div>
          </div>
          <div class="header__lineBox -bottom">
            <div class="header__line"></div>
          </div>
        </div><a class="header__cta -balticSea" href="#main">
          <!-- <p class="header__ctaText">Read More</p> -->
          <div class="header__ctaLineBox -top">
            <div class="header__ctaLine"></div>
          </div>
          <div class="header__ctaLineBox -right">
            <div class="header__ctaLine"></div>
          </div>
          <div class="header__ctaLineBox -arrow"></div></a>
      </div>
    </header>
