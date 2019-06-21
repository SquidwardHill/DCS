<?php
/**
 * The template part for displaying content
 *
 * @package WordPress
 * @subpackage DCS
 * @since DCS 1.0
 */
?>

<div class="row">
	<div class="col">
		<article class="post" id="post-<?php the_ID();?>" <?php post_class();?>>
			<div class="post__thumb">
				<?php if (has_post_thumbnail()) {the_post_thumbnail();}?>
			</div>
			<div class="post__right">
				<div class="post__content">
					<h3><?php the_title(); ?></h3>
					<p> <?php echo get_the_excerpt(); ?> </p>
					
					<div class="post__cta">
						<a class="post__link"href="<? echo esc_url( get_permalink()) ?>">
							<p>Continue Reading
							<svg class="post__linkIcon arrow">
								<use xlink:href="#arrow"></use>
							</svg>
							</p>
						</a>
					</div>

				</div>
			</div>
		</article><!-- #post-<?php the_ID();?> -->
	</div>
</div>




