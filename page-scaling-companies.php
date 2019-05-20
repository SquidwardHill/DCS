<?php
/*
 * Template Name: Scaling Companies
 *
 */

get_header();?>
<?php
    get_template_part('template-parts/headers/scaling-companies');
?>
<main id="main">
    <?php while (have_posts()): the_post();?>
	      <section class="section" data-industry="scaling companies">
	        <div class="section__wrapper">
	          <div class="row">
	            <div class="col -half -center">
	              <div class="section__content">
	                <div class="wysiwyg">
	                  <h2>We’ll help you stay on track.</h2>
	                  <p>We know which metrics matter for sales, marketing, and customer success teams. We’ll help you implement the right tracking tools so you can keep the pulse on your pipeline, outbound marketing efforts, renewals, and SaaS metrics.</p>
	                </div>
	              </div>
	            </div>
	            <div class="col -half">
	              <div class="section__imageBox -pattern -split">
	                <div class="section__image" style="background-image:url(/wp-content/uploads/images/scaling-pattern.svg)"></div>
	              </div>
	              <div class="section__imageBox"><img class="section__image" src="/wp-content/uploads/images/on-track.jpg" alt=""></div>
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
	                  <h3>We’ll mind your metrics.</h3>
	                  <p>Whether you are currently working through a messy Salesforce set-up or migrating to Salesforce for the first time, we can help you maximize the platform to track all of the key metrics relevant to your organization and customers.</p>
	                  <p>From SaaS metrics like churn, upsell, ARR, and  MRR to cohort analysis, we understand how to get you the information you need to measure your success.</p><img src="/wp-content/uploads/images/bar-diagram.svg" alt="">
	                </div>
	              </div>
	            </div>
	            <div class="col -half">
	              <div class="section__content">
	                <div class="wysiwyg">
	                  <h3>We’ve been on your side of the table.</h3>
	                  <p>Our team includes former in-house administrators who have worked on implementations for clients of every size—from two-person startups working out of their garages to companies going through the IPO process.</p>
	                  <h3>Our solutions are tried and true.</h3>
	                  <p>Utilizing industry best practices and proven playbooks, we set up easy-to-use, data-rich systems that leverage the best tools in the Salesforce ecosystem to track your KPIs and drive your business goals.</p>
	                </div>
	              </div>
	            </div>
	          </div>
	        </div>
	      </section>
	      <section class="section" data-industry="scaling companies">
	        <div class="section__wrapper">
	          <div class="section__content">
	            <h3 class="section__title">Key Tools</h3>
	            <p class="section__text">Don’t see something? Give us a call. We currently implement more than 25 technologies  across every&nbsp;industry.</p>
	            <div class="tools">
	              <div class="tool">
	                <p class="tool__name">Salesforce</p>
	              </div>
	              <div class="tool">
	                <p class="tool__name">Pardot</p>
	              </div>
	              <div class="tool">
	                <p class="tool__name">Marketo</p>
	              </div>
	              <div class="tool">
	                <p class="tool__name">Hubspot</p>
	              </div>
	              <div class="tool">
	                <p class="tool__name">Qualtrics</p>
	              </div>
	              <div class="tool">
	                <p class="tool__name">Distribution Engine</p>
	              </div>
	              <div class="tool">
	                <p class="tool__name">Salesforce CPQ</p>
	              </div>
	              <div class="tool">
	                <p class="tool__name">Service Cloud</p>
	              </div>
	              <div class="tool">
	                <p class="tool__name">Netsuite</p>
	              </div>
	              <div class="tool">
	                <p class="tool__name">Intaact</p>
	              </div>
	            </div>
	          </div>
	        </div>
	      </section>
	      <section class="section -white">
	        <div class="section__wrapper">
	          <div class="section__content">
	            <h3 class="section__title -center">A few of our partners</h3>
	            <div class="partners"><img class="partner" src="/wp-content/uploads/images/partners/travelbank.svg" alt="TravelBank"/><img class="partner" src="/wp-content/uploads/images/partners/foursquare.svg" alt="FourSquare"/><img class="partner" src="/wp-content/uploads/images/partners/interfolio.svg" alt="Interfolio"/><img class="partner" src="/wp-content/uploads/images/partners/avenu.png" alt="Avenu - Insights and Analytics"/>
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