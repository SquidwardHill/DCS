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
                  <h2>Choose the partner your peers&nbsp;trust.</h2>
                  <p>With an established track record partnering with venture capital and private equity firms, and a founder who used to work at a fund of funds, we understand your goals and priorities. We can help you set up your Salesforce to monitor your deal flow, track your engagements with current portfolio companies, and manage relationships with current and potential LPs.</p>
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
                  <h3>Make the right connections.</h3>
                  <p>We understand your network is your most important differentiator and valuable asset. We can help you leverage Salesforce to track your network, coordinate your team’s outreach efforts, and gain insights on your firm’s business.</p>
                </div>
              </div>
            </div>
            <div class="col -half">
              <div class="section__content">
                <div class="wysiwyg">
                  <h3>We’ll make it easy.</h3>
                  <p>We relieve your team of administrative and organizational burdens and save you from expending resources on third-party CRM systems so that you can spend your time sourcing new deals.</p>
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