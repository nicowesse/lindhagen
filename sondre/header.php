<?php
/**
* The Header for our theme
*
* Displays all of the <head> section and everything up till <div id="main">
	*
	* @package WordPress
	* @subpackage Twenty_Fourteen
	* @since Twenty Fourteen 1.0
	*/
	define(THEME_URL, get_bloginfo('template_url'));
	?>
	<!DOCTYPE html>
	<html <?php language_attributes(); ?>>
		<head>
			<meta charset="<?php bloginfo( 'charset' ); ?>">
			<meta name="viewport" content="width=device-width, initial-scale=1">
			<title><?php wp_title( '-', true, 'right' ); ?></title>
			<link rel="profile" href="http://gmpg.org/xfn/11">
			<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
			<link rel="icon" href="<?php echo THEME_URL . '/assets/img/favicon.png'; ?>">
			<link rel="stylesheet" href="<?php echo THEME_URL . '/assets/css/foundation.css'; ?>">
			<link rel="stylesheet" href="<?php echo THEME_URL . '/assets/css/main.css'; ?>">
			<link rel="stylesheet" href="<?php echo THEME_URL . '/assets/css/mnml-video-js.css'; ?>">
			<link href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>
			<link href="//netdna.bootstrapcdn.com/font-awesome/4.0.1/css/font-awesome.min.css" rel="stylesheet">
			<!--[if lt IE 9]>
			<script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
			<![endif]-->
			<script>var base = '<?php echo THEME_URL; ?>';</script>
			<script src="<?php echo THEME_URL . '/assets/js/vendor/zepto.js'; ?>"></script>
			<?php //wp_head(); ?>
			<?php if (has_post_thumbnail( $post->ID ) ) { $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'large' ); } ?>
			<?php $description = get_excerpt_by_id( $post->ID ); ?>
			<!-- Facebook -->
			<meta property="fb:admins" content="1510546796" />
			<meta property="fb:admins" content="1065501018" />
			<meta property="fb:app_id" content="163727017160624"/>
			<meta property="og:title" content="<?php single_post_title(); ?>">
			<meta property="og:type" content="article">
			<meta property="og:url" content="<?php echo get_permalink(); ?>">
			<meta property="og:image" content="<?php echo $image[0]; ?>">
			<meta property="og:image" content="<?php echo THEME_URL . "/assets/img/logo.png"; ?>">
			<meta property="og:site_name" content="<?php bloginfo('name'); ?>">
			<meta property="og:description" content="<?php echo $description; ?>">
			<!-- Twitter -->
			<meta name="twitter:card" content="summary_large_image">
			<meta name="twitter:domain" content="www.lindhagen.no">
			<meta name="twitter:creator" content="@sondrelindhagen">
			<meta name="twitter:title" content="<?php single_post_title(); ?>">
			<meta name="twitter:description" content="<?php echo $description; ?>">
			<meta name="twitter:image:src" content="<?php echo $image[0]; ?>">
		</head>
		<body <?php body_class(); ?>>
			<script>
				(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
					(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
					m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
				})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
				ga('create', 'UA-44179177-1', 'lindhagen.no');
				ga('send', 'pageview');
			</script>
			<div id="fb-root"></div>
			<script>(function(d, s, id) {
				var js, fjs = d.getElementsByTagName(s)[0];
				if (d.getElementById(id)) return;
				js = d.createElement(s); js.id = id;
				js.src = "//connect.facebook.net/nb_NO/all.js#xfbml=1&appId=337313296301156";
				fjs.parentNode.insertBefore(js, fjs);
			}(document, 'script', 'facebook-jssdk'));</script>
			<?php if ( !is_single() ) : ?>
			<section class="row">
				<header class="large-12 columns site-header">
					<div class="site-header__logo">
						<h1 class="site-header__title"><?php bloginfo( 'name' ); ?></h1>
					</div>
				</header>
			</section>
			<nav class="site-navigation">
				<section class="row">
					<nav class="large-9 columns">
						<?php wp_nav_menu( array(
								'container'       => 'ul',
								'container_class' => 'menu',
								'menu_class' => 'site-menu',
								'menu' => 'navigation'
						) ); ?>
					</nav>
					<aside class="large-3 columns">
						<?php get_search_form(); ?>
					</aside>
				</section>
			</nav>

			<?php else : ?>
			
			<div class="article-nav on-bg">
				<a href="/" class="article-nav__home" title="Back">Sondre <br>Lindhagen</a>
				<a href="/" class="article-nav__back js-back" title="Back">←</a>
				<span class="article-nav__to-top js-to-top" title="Back to top">↑</span>
			</div>

			<?php endif; ?>
			<section class="row">
