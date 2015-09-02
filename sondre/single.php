<?php

/**
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

define(THEME_URL, get_bloginfo('template_url'));

$thumbnail = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );
$thumbnail_url = $thumbnail[0];

get_header(); ?>

	<?php
		// Start the Loop.
		while ( have_posts() ) : the_post();
			?>
			</section><!-- END ROW -->

			<figure class="post__thumbnail post__thumbnail--large" style="background-image: url('<?php echo $thumbnail_url; ?>')">
				<h1 class="post__header post__header--thumbnail"><?php echo the_title(); ?></h1>
			</figure>
			
			<section class="row">

			<article class="large-10 columns large-centered post">
				<!--<h1 class="post__header"><?php echo the_title(); ?></h1>

				<figure class="post__thumbnail post__thumbnail--content">
					<?php the_post_thumbnail(); ?>
				</figure>-->

				<section class="post__content">
					<?php echo the_content(); ?>
				</section>

				<section class="post__meta">
					<!--<span class="post-meta__date"><strong>Publisert: </strong><?php the_date( 'd.m.y' ); ?></span>-->
					<!--<span class="post-meta__date post-meta__date--modified"><strong>Sist oppdatert:</strong> <?php the_modified_time('d.m.y'); ?></span>-->
				</section>

				<aside class="post__social">
					<div class="mt-share-list-bar-sm">
						<a class="mt-facebook" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=<?php echo get_permalink(); ?>" title="Del på Facebook">
							<img src="http://mojotech-static.s3.amazonaws.com/facebook@2x.png">
						</a>

						<a class="mt-twitter" target="_blank" href="http://twitter.com/intent/tweet?text=<?= the_title(); ?> på&amp;url=<?php echo get_permalink(); ?>&amp;via=sondrelindhagen&amp;related=sondrelindhagen"  title="Del på Twitter">
							<img src="http://mojotech-static.s3.amazonaws.com/twitter@2x.png">
						</a>

						<a class="mt-google" target="_blank" href="https://plus.google.com/share?url=<?php echo get_permalink(); ?>">
							<img src="http://mojotech-static.s3.amazonaws.com/google@2x.png"  title="Del på Google+">
						</a>
					</div>
				</aside>

				<?php twentyfourteen_post_nav(); ?>

			</article>

<?php if ( comments_open() ) : ?>
	<section class="large-10 columns large-centered">
		<?php comments_template(); ?>
	</section>
<?php endif; ?>

<?php endwhile; ?>

<?php get_footer();
