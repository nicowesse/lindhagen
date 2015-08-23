<?php
/**
 * The template for displaying 404 pages (Not Found)
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

get_header(); ?>

<div class="large-12 columns">
		<header class="page-header">
			<h1 class="title"><?php _e( 'Rota deg bort nå da..', 'twentyfourteen' ); ?></h1>
		</header>

		<div class="page-content">
			<p><?php _e( 'Ser ikke ut som om det er noe her. Men du kan jo prøve å søke etter det?', 'twentyfourteen' ); ?></p>

			<?php get_search_form(); ?>
		</div><!-- .page-content -->

</div><!-- #primary -->

<?php
get_footer();
