<?php
/*
 * Template Name: Home
 *
 */

get_header(); ?>
	<?php
		get_template_part( 'template-parts/headers/home');
	?>
<main id="main">
    <?php while ( have_posts() ) : the_post(); ?>
      <section class="section">
        <div class="section__wrapper">
          <div class="intro__cards">
            <div class="intro__card">
              <div class="intro__cardContent">
                <h3 class="intro__cardTitle">We’re Salesforce&#32;<br />specialists.</h3>
                <p class="intro__cardText">We’re a team of specialists united by our love of Salesforce. We don’t just pass the baton—we’re in the thick of it, from whiteboarding to data cleanups.</p>
              </div>
            </div>
            <div class="intro__card">
              <div class="intro__cardContent">
                <h3 class="intro__cardTitle">We’ll help you&#32;<br />love Salesforce.</h3>
                <p class="intro__cardText">You may not believe it yet, but some people do love Salesforce. We work with you to set up a system you love too, whether you’re starting from scratch or ready to clean a broken system.</p>
              </div>
            </div>
            <div class="intro__card">
              <div class="intro__cardContent">
                <h3 class="intro__cardTitle">We give it to&#32;<br />you straight.</h3>
                <p class="intro__cardText">We identify the simplest, smartest system for you, using native Salesforce when possible. We level with you to avoid overly customized systems and unnecessarily complicated processes.</p>
              </div>
            </div>
            <div class="intro__card -image">
              <div class="intro__cardImageBox">
                <div class="intro__cardImage" style="background-image:url(/wp-content/uploads/images/intro-index.jpg)"></div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="section -introLine" data-animation="intro-a">
        <div class="section__wrapper">
          <div class="section__introLines">
            <div class="section__lineBox -right">
              <div class="section__line"></div>
            </div>
            <div class="section__lineBox -bottom">
              <div class="section__line"></div>
            </div>
          </div>
        </div>
      </section>
      <section class="section -white">
        <div class="section__wrapper">
          <div class="row">
            <div class="col -half">
              <div class="section__imageBox"><img class="section__image" src="/wp-content/uploads/images/reach-out.jpg" alt=""></div>
            </div>
            <div class="col -half -center">
              <div class="section__content">
                <div class="wysiwyg">
                  <h2>We speak Salesforce, and we’re here to translate.</h2>
                  <p>We partner with you to develop Salesforce solutions on your terms. At DCS, no project is too menial and no question is too granular.</p>
                  <p>We are our clients’ champions, ready to roll up our sleeves and problem-solve to best support your team and make Salesforce work for you.</p><a class="section__link" href="./contact.html">Reach out to us
                    <svg class="section__linkIcon arrow">
                      <use xlink:href="#arrow"></use>
                    </svg></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="section">
        <div class="section__wrapper">
          <div class="row">
            <div class="col -half -center">
              <div class="section__content">
                <div class="wysiwyg">
                  <h2>Let’s work out your workflow.</h2>
                  <p>Get clear guidance from specialized team members equipped with industry knowledge and extensive in-house and consulting experience in the Salesforce ecosystem. Whether you’re installing Salesforce for the first time or revamping an existing implementation, DCS is up to the task.</p><a class="section__link" href="./industries.html">Explore our Industries
                    <svg class="section__linkIcon arrow">
                      <use xlink:href="#arrow"></use>
                    </svg></a>
                </div>
              </div>
            </div>
            <div class="col -half -mobileTop">
              <div class="section__imageBox -diagram"><img class="section__image" src="/wp-content/uploads/images/bars-diagram.svg" alt=""></div>
            </div>
          </div>
        </div>
      </section>
    <?php endwhile; // end of the loop. ?>
</main><!-- #primary -->

<?php get_footer(); ?>