<?php
/*
 * Template Name: Non Profits and Foundations
 *
 */

get_header();?>
<?php
    get_template_part('template-parts/headers/non-profits-and-foundations');
?>
<main id="main">
    <?php while (have_posts()): the_post();?>
    <section class="section" data-industry="np-f">
        <div class="section__wrapper">
          <div class="row">
            <div class="col -half -center">
              <div class="section__content">
                <div class="wysiwyg">
                  <h2>Mobilize and&#32;<br />motivate.</h2>
                  <p>Employing standard Salesforce functionality, we can help to centralize your information across all of your organization's efforts. From fundraising and donor cultivation to program, event, and volunteer management, we can help you to better understand, engage, and mobilize your base.</p>
                </div>
              </div>
            </div>
            <div class="col -half">
              <div class="section__imageBox -pattern -split">
                <div class="section__image" style="background-image:url(/wp-content/uploads/images/non-profit-pattern.svg)"></div>
              </div>
              <div class="section__imageBox"><img class="section__image" src="/wp-content/uploads/images/mobilize-motivate.jpg" alt=""></div>
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
                  <h3>Put your mission first.</h3>
                  <p>We build systems that do the hard work for you, freeing up your team to build relationships and bring awareness to your cause.</p>
                </div>
              </div>
            </div>
            <div class="col -half">
              <div class="section__content">
                <div class="wysiwyg">
                  <h3>Make the numbers count.</h3>
                  <p>Our Salesforce expertise and fundraising backgrounds enable us to bring compelling metrics to the forefront, providing the right data to tell your story of impact.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="section" data-industry="np-f">
        <div class="section__wrapper">
          <div class="section__content">
            <h3 class="section__title">Key Tools</h3>
            <p class="section__text">Don’t see something? Give us a call. We currently implement more than 25 technologies  across every&nbsp;industry.</p>
            <div class="tools">
              <div class="tool">
                <p class="tool__name">Salesforce</p>
              </div>
              <div class="tool">
                <p class="tool__name">Marketing Cloud</p>
              </div>
              <div class="tool">
                <p class="tool__name">Service Cloud</p>
              </div>
              <div class="tool">
                <p class="tool__name">Community Cloud</p>
              </div>
              <div class="tool">
                <p class="tool__name">Wealth Engine</p>
              </div>
              <div class="tool">
                <p class="tool__name">Pardot</p>
              </div>
              <div class="tool">
                <p class="tool__name">Nonprofit Success Pack</p>
              </div>
              <div class="tool">
                <p class="tool__name">Form Assembly</p>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="section -white">
        <div class="section__wrapper">
          <div class="section__content">
            <h3 class="section__title -center">A Few of Our Partners</h3>
            <div class="partners"><img class="partner" src="/wp-content/uploads/images/partners/twc.png" alt="The Washington Center"/><img class="partner" src="/wp-content/uploads/images/partners/aids-united.svg" alt="Aids United"/><img class="partner" src="/wp-content/uploads/images/partners/globaltiesus.svg" alt="Global Ties US"/>
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