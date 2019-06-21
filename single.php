<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package WordPress
 * @subpackage DCS
 * @since DCS 1.0
 */
get_header();?>
<?php
get_template_part('template-parts/headers/blog-single-header');
?>

<main id="main">
  <section class="section" data-state="in-view">
  	<div class="single__content">
		<?php
		// Start the loop.
		while (have_posts()):
			the_post();

			// Include the single post content template.
			get_template_part('template-parts/content/content-single', 'content-single');

			// If comments are open or we have at least one comment, load up the comment template.
			// if ( comments_open() || get_comments_number() ) {
			//     comments_template();
			// }

			if (is_singular('attachment')) {
				// Parent post navigation.
				the_post_navigation(
					array(
						'prev_text' => _x('<span class="meta-nav">Published in</span><span class="post-title">%title</span>', 'Parent post link', 'DCS'),
					)
				);
			} elseif (is_singular('post')) {
			// Previous/next post navigation.
			the_post_navigation(
				array(
					'prev_text'                  => __( 'Previous Post' ),
            		'next_text'                  => __( 'Next Post' )
				)
			);
		}

		// End of the loop.
		endwhile;
		?>
		</div>
	</section>
</main>
<?php get_footer();?>
