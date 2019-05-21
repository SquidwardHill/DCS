
<?php
/*
 * Template Name: Contact
 *
 */

get_header();?>
<?php
    get_template_part('template-parts/headers/contact');
?>
<main id="main">
    <?php while (have_posts()): the_post();?>
    <section class="section -white">
        <div class="section__wrapper">
          <div class="row">
            <div class="col -half -center">
              <div class="section__content">
                <div class="wysiwyg">
                  <h2><?php the_field('reach_out_title'); ?></h2>
                  <?php the_field('reach_out_body'); ?><a class="section__button" href="mailto:hello@dupontcirclesolutions.com">Email Us</a>
                </div>
              </div>
            </div>
            <div class="col -half -mobileTop"><a class="section__imageBox" href="https://goo.gl/maps/UNz3Lorpx1R2" target="_blank">
                <div class="contact__panel">
                  <p class="contact__details">3100 Clarendon Blvd<br /> Arlington, VA 22201</p>
                  <p class="contact__details">703.340.1443</p>
                </div><img class="section__image" src="/wp-content/uploads/images/map.jpg" alt=""></a></div>
          </div>
        </div>
      </section>
      <section class="section -white">
        <div class="section__wrapper">
          <div class="row">
            <div class="col -half">
              <div class="section__imageBox"><img class="section__image" src="/wp-content/uploads/images/jobs.jpg" alt=""></div>
            </div>
            <div class="col -half -center">
              <div class="section__content">
                <div class="wysiwyg">
                  <h2><?php the_field('work_title'); ?> </h2>
                  <?php the_field('work_body'); ?> <a class="section__link" href="https://www.linkedin.com/jobs/search?f_C=15212683&amp;pageNum=0&amp;position=1" target="_blank">Explore jobs at DCS
                    <svg class="section__linkIcon arrow">
                      <use xlink:href="#arrow"></use>
                    </svg></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
	    
	    <?php endwhile; // end of the loop. ?>
    </main><!-- #primary -->

<?php get_footer();?>
