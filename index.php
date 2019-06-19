<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage DCS
 * @since 1.0.0
 */

get_header(); ?>
  <?php
    if ( is_home() ) {
      get_template_part( 'template-parts/headers/insights');
    }
	?>
<main id="main">
  <section class="section" data-state="in-view">
  	<div class="section__content">
    <?php if ( have_posts() ) : ?>
    <?php
    // Start the loop.
    while ( have_posts() ) :
      the_post();
      get_template_part( 'template-parts/content/content', get_post_format() );

      // End the loop.
    endwhile;
    // If no content, include the "No posts found" template.
    else :
    get_template_part( 'template-parts/content', 'none' );

    endif;
    ?>
    </div>
  </section>
</main><!-- #primary -->

<?php get_footer(); ?>