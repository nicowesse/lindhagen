<?php
/**
 * The template for displaying a "No posts found" message
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
?>

<div class="large-12 columns">
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

		<h1 class="title"><?php _e( 'Fant ingenting', 'twentyfourteen' ); ?></h1>

		<?php if ( is_home() && current_user_can( 'publish_posts' ) ) : ?>

		<p><?php printf( __( 'Klar til å skrive noen innlegg? <a href="%1$s">Start her</a>.', 'twentyfourteen' ), admin_url( 'post-new.php' ) ); ?></p>

		<?php elseif ( is_search() ) : ?>

		<p><?php _e( 'Beklager, men finner ingenting som stemmer med det du søkte på. Prøv gjerne å søke på noe annet.', 'twentyfourteen' ); ?></p>
		<?php get_search_form(); ?>

		<?php else : ?>

		<p><?php _e( 'Ser ikke ut til at vi finner det du ser etter. Du kan jo prøve å søke eller rusle i de andre sidene våre.', 'twentyfourteen' ); ?></p>
		<?php get_search_form(); ?>

		<?php endif; ?>
	</article><!-- #post-## -->
</div>
