<?php
/*
 * Template Name: Venture Capital and Private Equity Firms
 *
 */

get_header();?>
<?php
    get_template_part('template-parts/headers/venture-capital-and-private-equity-firms');
?>
<main id="main">
    <?php while (have_posts()): the_post();?>
    <section class="section" data-industry="vc-pe">
        <div class="section__wrapper">
          <div class="row">
            <div class="col -half -center">
              <div class="section__content">
                <div class="wysiwyg">
                  <h2><?php the_field('choose_a_partner_title'); ?></h2>
                  <?php the_field('choose_a_partner_body'); ?>
                </div>
              </div>
            </div>
            <div class="col -half">
              <div class="section__imageBox -pattern -split">
                <div class="section__image" style="background-image:url(/wp-content/uploads/images/vc-pe-pattern.svg)"></div>
              </div>
              <div class="section__imageBox"><img class="section__image" src="/wp-content/uploads/images/peers-trust.jpg" alt=""></div>
            </div>
          </div>
        </div>
      </section>
      <section class="section">
        <div class="section__wrapper">
          <div class="row -gutter">
            <div class="col -half">
              <div class="section__content">
                <div class="wysiwyg">
                  <h3><?php the_field('network_title'); ?></h3>
                  <?php the_field('network_body'); ?>
                </div>
              </div>
            </div>
            <div class="col -half">
              <div class="section__content">
                <div class="wysiwyg">
                  <h3><?php the_field('save_time_title'); ?></h3>
                  <?php the_field('save_time_body'); ?>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="section" data-industry="vc-pe">
        <div class="section__wrapper">
          <div class="section__content">
            <h3 class="section__title">Key Tools</h3>
            <p class="section__text">Don’t see something? Give us a call. We currently implement more than 25 technologies  across every&nbsp;industry.</p>
            <div class="tools">
              <div class="tool">
                <p class="tool__name">Salesforce</p>
              </div>
              <div class="tool">
                <p class="tool__name">PitchBook</p>
              </div>
              <div class="tool">
                <p class="tool__name">Pardot</p>
              </div>
              <div class="tool">
                <p class="tool__name">Hubspot</p>
              </div>
              <div class="tool">
                <p class="tool__name">Salesforce Marketing Cloud</p>
              </div>
              <div class="tool">
                <p class="tool__name">CrunchBase</p>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="section -white">
        <div class="section__wrapper">
          <div class="section__content">
            <h3 class="section__title -center">A Few of Our Partners</h3>
            <div class="partners"><img class="partner" src="/wp-content/uploads/images/partners/bowery.svg" alt="Bowery Capital"/><img class="partner" src="/wp-content/uploads/images/partners/lavrock.png" alt="Lavrock Ventures"/><img class="partner" src="/wp-content/uploads/images/partners/nea.svg" alt="NEA"/>
            </div>
          </div>
        </div>
      </section>
	    <?php
             get_template_part('template-parts/cta');
        ?>
	    <?php endwhile; // end of the loop. ?>
    </main><!-- #primary -->

<?php get_footer();?>