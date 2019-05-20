<?php
/*
 * Template Name: Industries
 *
 */

get_header();?>
<?php
    get_template_part('template-parts/headers/industries');
?>
<main id="main">
    <?php while (have_posts()): the_post();?>
    <section class="section -white">
        <div class="section__wrapper">
          <div class="row">
            <div class="col -half">
              <div class="section__imageBox -pattern">
                <div class="section__image" style="background-image:url(/wp-content/uploads/images/intro-industry.svg)"></div>
              </div>
            </div>
            <div class="col -half -center">
              <div class="section__content">
                <div class="wysiwyg">
                  <h2>We provide expert tailored solutions to your needs</h2>
                  <p>Through our work with leading technology companies, venture capital and private equity firms, associations, and non-profits and foundations, we’ve garnered industry-specific insights and cemented Salesforce success strategies that support growth.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="section -introLine" data-animation="intro-b">
        <div class="section__wrapper">
          <div class="section__introLines">
            <div class="section__lineBox -left">
              <div class="section__line"></div>
            </div>
            <div class="section__lineBox -bottom">
              <div class="section__line"></div>
            </div>
          </div>
        </div>
      </section>
      <section class="section">
        <div class="section__wrapper">
          <div class="slides"><a class="slide" href="./scaling-companies.html">
              <div class="slide__content">
                <p class="slide__subhead">Scaling Companies</p>
                <h2 class="slide__title">get growing with us</h2>
                <div class="slide__cta">
                  <p class="slide__ctaText">Find out how
                    <svg class="slide__ctaIcon arrow">
                      <use xlink:href="#arrow"></use>
                    </svg>
                  </p>
                </div>
              </div>
              <div class="slide__lines" data-animation="slide">
                <div class="slide__lineBox -center">
                  <div class="slide__line"></div>
                </div>
                <div class="slide__lineBox -bottom">
                  <div class="slide__line"></div>
                </div>
              </div></a><a class="slide" href="./venture-capital-and-private-equity-firms.html">
              <div class="slide__content">
                <p class="slide__subhead">Venture Capital + Private Equity Firms</p>
                <h2 class="slide__title">we speak your language.</h2>
                <div class="slide__cta">
                  <p class="slide__ctaText">Find out how
                    <svg class="slide__ctaIcon arrow">
                      <use xlink:href="#arrow"></use>
                    </svg>
                  </p>
                </div>
              </div>
              <div class="slide__lines" data-animation="slide">
                <div class="slide__lineBox -center">
                  <div class="slide__line"></div>
                </div>
                <div class="slide__lineBox -bottom">
                  <div class="slide__line"></div>
                </div>
              </div></a><a class="slide" href="./associations.html">
              <div class="slide__content">
                <p class="slide__subhead">Associations</p>
                <h2 class="slide__title">expand your network.</h2>
                <div class="slide__cta">
                  <p class="slide__ctaText">Find out how
                    <svg class="slide__ctaIcon arrow">
                      <use xlink:href="#arrow"></use>
                    </svg>
                  </p>
                </div>
              </div>
              <div class="slide__lines" data-animation="slide">
                <div class="slide__lineBox -center">
                  <div class="slide__line"></div>
                </div>
                <div class="slide__lineBox -bottom">
                  <div class="slide__line"></div>
                </div>
              </div></a><a class="slide" href="./non-profits-and-foundations.html">
              <div class="slide__content">
                <p class="slide__subhead">Non-profits + Foundations</p>
                <h2 class="slide__title">propel your purpose.</h2>
                <div class="slide__cta">
                  <p class="slide__ctaText">Find out how
                    <svg class="slide__ctaIcon arrow">
                      <use xlink:href="#arrow"></use>
                    </svg>
                  </p>
                </div>
              </div></a>
          </div>
        </div>
      </section>
	    <?php
             get_template_part('template-parts/cta');
        ?>
	    <?php endwhile; // end of the loop. ?>
    </main><!-- #primary -->

<?php get_footer();?>