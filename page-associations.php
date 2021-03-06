<?php
/*
 * Template Name: Associations
 *
 */

get_header();?>
<?php
get_template_part('template-parts/headers/associations');
?>

<?php
/* page data industry var */
$data_industry = "associations";
?>
<main id="main">
    <?php while (have_posts()): the_post();?>
	    <section class="section" data-industry="<?php echo $data_industry; ?>">
	        <div class="section__wrapper">
	          <div class="row">
	            <div class="col -half -center">
	              <div class="section__content">
	                <div class="wysiwyg">
	                  <h2><?php the_field('operations_title'); ?></h2>
										<?php the_field('operations_body'); ?> 
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
	                  <h3><?php the_field('community_title'); ?></h3>
	                  <?php the_field('community_body'); ?>
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
				<?php
				include( locate_template( 'template-parts/key-tools.php', false, false ) ); 
				?>
	      <!-- <section class="section" data-industry="associations">
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
	      </section> -->
	      <section class="section -white">
	        <div class="section__wrapper">
	          <div class="section__content">
	            <h3 class="section__title -center">A Few of Our Partners</h3>
	            <div class="partners"><img class="partner" src="/wp-content/uploads/images/partners/smart-electric-power-alliance.svg" alt="Smart Electric Power Alliance"/><img class="partner" src="/wp-content/uploads/images/partners/solar-energy-tradeshows.jpg" alt="Solar Energy Trade Shows"/><img class="partner" src="/wp-content/uploads/images/partners/ceo.jpg" alt="Chief Executives Organization"/>
	            </div>
	          </div>
	        </div>
	        </section>
	    <?php get_template_part('template-parts/cta'); ?>
	    <?php endwhile; // end of the loop. ?>
</main><!-- #primary -->

<?php get_footer();?>