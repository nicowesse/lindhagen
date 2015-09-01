<?php
/**
 * Page Template Name: Hjem
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

get_header(); ?>

<?php
// Start the Loop.
while ( have_posts() ) : the_post();
	$about = get_the_content();
?>
	<header class="large-12 columns main-description">
		<p><?php bloginfo('description'); ?></p>
	</header>


	<?php
	if (is_page()) :

		$sticky = get_option( 'sticky_posts' );
        // first loop to display only my single,
        // MOST RECENT sticky post
        $most_recent_sticky_post = new WP_Query( array(
            'post__in'            => get_option( 'sticky_posts' ),
            'ignore_sticky_posts' => 1,
            'orderby'             => 'date',
            'posts_per_page'      => 1
        ) );

        while ( $most_recent_sticky_post->have_posts() ) :  $most_recent_sticky_post->the_post();
        	get_template_part( 'content', 'sticky' );
    	endwhile;
    	wp_reset_query();

		$cat = 1; //use page title to get a category ID
		$posts = get_posts( "cat=$cat&showposts=6" );
		if ($posts) :
	    	foreach ($posts as $post):
		  		setup_postdata($post);

		  		get_template_part( 'content', get_post_format() );

			endforeach;
		endif;

	endif;
	?>

	<div class="large-12 columns explain">
		<a href="/intervjuer">Vis alle</a>
	</div>

</section>

<figure class="about-sondre">
	<figcaption class="about-sondre__overlay">
		<span class="about-sondre__tagline">Hvem er Sondre?</span>
	</figcaption>
</figure>

<article class="row">
	<div class="large-10 columns large-centered about">
		<p class="description"><?php echo $about; ?></p>
	</div>
</article>

<?php
endwhile; ?>

<?php get_footer(); ?>
