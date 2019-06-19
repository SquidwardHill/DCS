<?php
/**
 * The template part for displaying single posts
 *
 * @package WordPress
 * @subpackage DCS
 * @since DCS 1.0
 */
?>
<section class="section" data-state="in-view">
  	<div class="section__content">
	<div class="row">
		<div class="col">

			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<header class="entry-header">
					<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
				</header><!-- .entry-header -->
				<div class="entry-content">
				<div class="thumb">
					<?php 
						if ( has_post_thumbnail() ) {
							the_post_thumbnail();
						} 
					?>
				</div>
					<?php
						the_content();

						wp_link_pages(
							array(
								'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'DCS' ) . '</span>',
								'after'       => '</div>',
								'link_before' => '<span>',
								'link_after'  => '</span>',
								'pagelink'    => '<span class="screen-reader-text">' . __( 'Page', 'DCS' ) . ' </span>%',
								'separator'   => '<span class="screen-reader-text">, </span>',
							)
						);

						if ( '' !== get_the_author_meta( 'description' ) ) {
							get_template_part( 'template-parts/content/biography' );
						}
						?>
				</div><!-- .entry-content -->

				<footer class="entry-footer">
				<?php $author = get_the_author(); ?>
				<p class="author"><?php echo $author ?></p>
				<p class="author-date"><?php echo get_the_date(); ?></p>
					<?php
						edit_post_link(
							sprintf(
								/* translators: %s: Name of current post */
								__( 'Edit<span class="screen-reader-text"> "%s"</span>', 'DCS' ),
								get_the_title()
							),
							'<span class="edit-link">',
							'</span>'
						);
						?>
				</footer><!-- .entry-footer -->
			</article><!-- #post-<?php the_ID(); ?> -->

		</div>
	</div>
</div>
</div>


<?php get_footer(); ?>