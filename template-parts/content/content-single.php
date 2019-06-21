<?php
/**
 * The template part for displaying single posts
 *
 * @package WordPress
 * @subpackage DCS
 * @since DCS 1.0
 */
?>

<div class="row">
	<div class="col">
		<article class="single" id="post-<?php the_ID();?>" <?php post_class();?>>
		<!-- <div class="single__header">
			<div class="single__thumb">
				<?php if (has_post_thumbnail()) {the_post_thumbnail();}?>
			</div>
			<div class="single__right">
				<div class="single__title">
					<h3><?php the_title(); ?></h3>
				</div>
			</div>
		</div> -->
		<div class="single__body">
			<p> <?php echo get_the_content(); ?> </p>
		</div>
		</article><!-- #post-<?php the_ID();?> -->
	</div>
</div>



