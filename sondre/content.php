<?php
/**
 * The default template for displaying content
 *
 * Used for both single and index/archive/search.
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

$thumbnail = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID) );
$thumbnail_url = $thumbnail[0];
$excerpt = get_the_excerpt();
?>

<article id="post-<?php the_ID(); ?>" <?php post_class('large-4 columns posts'); ?>>
	<figure class="post__thumbnail" style="background-image: url('<?php echo $thumbnail_url; ?>');">
		<?php //the_post_thumbnail(); ?>
		<?php //the_title( '<a class="post-title" href="' . esc_url( get_permalink() ) . '">', '</a>' ); ?>
        <a class="post__link" href="<?php the_permalink(); ?>">
            <span class="post__title"><?php the_title(); ?></span>
            <?php if ( get_field('sitat') ) : ?>
            <span class="post__excerpt"><?php the_field('sitat'); ?></span>
        <?php endif; ?>
        </a>
	</figure>
</article>
