<?php

/**
 * Page Template Name: Opplevelser
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

get_header();

	// Start the Loop.
	while ( have_posts() ) : the_post(); ?>
		<header class="large-12 columns main-description small">
			<?php the_content(); ?>
		</header>

<?php
		if (is_page()) :
			$posts = get_posts( "cat=4&showposts=100" );

			if ($posts) :
			    foreach ($posts as $post) :
			  		setup_postdata($post);

			  		get_template_part( 'content', get_post_format() );

				endforeach;
			else: ?>
				<article class="large-12 columns">
					<p>Desverre ingen innlegg her enda.</p>
				</article>
<?php
			endif;
		endif;
	endwhile;

get_footer(); ?>