<?php
/*
 * Template Name: Associations
 *
 */

get_header();?>
	<?php
    get_template_part('template-parts/headers/associations');
    ?>
<main id="main">
    <?php while (have_posts()): the_post();?>
	    <section class="section" data-industry="associations">
	        <div class="section__wrapper">
	          <div class="row">
	            <div class="col -half -center">
	              <div class="section__content">
	                <div class="wysiwyg">
	                  <h2>Let’s organize&#32;<br />your operations.</h2>
	                  <p>We can help you leverage Salesforce to track your association’s operations and utilize Salesforce Communities to help power an Association Management Software platform that provides an external login portal for your members.</p>
	                </div>
	              </div>
	            </div>
	            <div class="col -half">
	              <div class="section__imageBox -pattern -split">
	                <div class="section__image" style="background-image:url(/wp-content/uploads/images/associations-pattern.svg)"></div>
	              </div>
	              <div class="section__imageBox"><img class="section__image" src="/wp-content/uploads/images/organize-operations.jpg" alt=""></div>
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
	                  <h3>Unite your community.</h3>
	                  <p>Using Salesforce, we help associations bring their memberships together and create a community, giving members a place to connect and engage.</p>
	                </div>
	              </div>
	            </div>
	            <div class="col -half">
	              <div class="section__content">
	                <div class="wysiwyg"><img src="/wp-content/uploads/images/pie-diagram.svg" alt=""></div>
	              </div>
	            </div>
	          </div>
	        </div>
	      </section>
	      <section class="section" data-industry="associations">
	        <div class="section__wrapper">
	          <div class="section__content">
	            <h3 class="section__title">Key Tools</h3>
	            <p class="section__text">Don’t see something? Give us a call. We currently implement more than 25 technologies  across every&nbsp;industry.</p>
	            <div class="tools">
	              <div class="tool">
	                <p class="tool__name">Salesforce</p>
	              </div>
	              <div class="tool">
	                <p class="tool__name">Salesforce Community Cloud</p>
	              </div>
	              <div class="tool">
	                <p class="tool__name">Salesforce CPQ</p>
	              </div>
	              <div class="tool">
	                <p class="tool__name">Pardot</p>
	              </div>
	              <div class="tool">
	                <p class="tool__name">Hubspot</p>
	              </div>
	              <div class="tool">
	                <p class="tool__name">Fonteva</p>
	              </div>
	              <div class="tool">
	                <p class="tool__name">Drupal Membership Sites</p>
	              </div>
	              <div class="tool">
	                <p class="tool__name">Cvent</p>
	              </div>
	            </div>
	          </div>
	        </div>
	      </section>
	      <section class="section -white">
	        <div class="section__wrapper">
	          <div class="section__content">
	            <h3 class="section__title -center">A Few of Our Partners</h3>
	            <div class="partners"><img class="partner" src="/wp-content/uploads/images/partners/smart-electric-power-alliance.svg" alt="Smart Electric Power Alliance"/><img class="partner" src="/wp-content/uploads/images/partners/solar-energy-tradeshows.jpg" alt="Solar Energy Trade Shows"/><img class="partner" src="/wp-content/uploads/images/partners/ceo.jpg" alt="Chief Executives Organization"/>
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