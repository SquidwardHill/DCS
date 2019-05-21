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
	                  <h2><?php the_field('tracking_title'); ?></h2>
	                  <?php the_field('tracking_body'); ?>
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
	                  <h3><?php the_field('metrics_title'); ?></h3>
										<?php the_field('metrics_body'); ?>
	                 <img src="/wp-content/uploads/images/bar-diagram.svg" alt="">
	                </div>
	              </div>
	            </div>
	            <div class="col -half">
	              <div class="section__content">
	                <div class="wysiwyg">
	                  <h3><?php the_field('team_title'); ?></h3>
										<?php the_field('team_body'); ?>
	                  <h3>	<?php the_field('solutions_title'); ?></h3>
										<?php the_field('solutions_body'); ?>
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