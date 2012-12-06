<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Starkers
 * @since Starkers 3.0
 */
?><!DOCTYPE html>
<html lang="en" class="no-js" xmlns="http://www.w3.org/1999/xhtml" xmlns:og="http://ogp.me/ns#" xmlns:fb="https://www.facebook.com/2008/fbml"> <!--<![endif]-->
<head>
	<!-- OPEN GRAPH API -->
	<?php if (have_posts()):while(have_posts()):the_post(); endwhile; endif;?>
	<!-- the default values -->
	<meta property="fb:app_id" content="441491099220964" />
	<meta property="fb:admins" content="704446808"/>
	
	<!-- if page is content page -->
	<?php if (is_single()) { ?>
	<meta property="og:url" content="<?php the_permalink() ?>"/>
	<meta property="og:title" content="<?php single_post_title(''); ?>" />
	<meta property="og:description" content="<?php echo strip_tags(get_the_excerpt($post->ID)); ?>" />
	<meta property="og:type" content="article" />
	<meta property="og:image" content="<?php if (function_exists('wp_get_attachment_thumb_url')) {echo wp_get_attachment_thumb_url(get_post_thumbnail_id($post->ID)); }?>" />
	
	<!-- if page is others -->
	<?php } else { ?>
	<meta property="og:site_name" content="<?php bloginfo('name'); ?>" />
	<meta property="og:description" content="<?php bloginfo('description'); ?>" />
	<meta property="og:type" content="website" />
	<meta property="og:image" content="<?php bloginfo( 'template_directory' ); ?>/assets/img/og-logo.jpg" /> <?php } ?>

<meta charset="<?php bloginfo( 'charset' ); ?>" />
<title><?php
	/*
	 * Print the <title> tag based on what is being viewed.
	 * We filter the output of wp_title() a bit -- see
	 * twentyten_filter_wp_title() in functions.php.
	 */
	wp_title( '|', true, 'right' );

	?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

<!-- Mobile viewport optimized: j.mp/bplateviewport -->
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<!-- Global styles -->
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />

<!-- All JavaScript at the bottom, except for Modernizr, Respond. -->
<script src="<?php bloginfo('template_directory'); ?>/assets/js/global/respond.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/assets/js/global/modernizr.custom.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>

	<!-- Global scripts/options concatenated and minified via Codekit-->
	<script src="<?php bloginfo('template_directory'); ?>/assets/js/global/plugins-min.js"></script>
	
	<script type="text/javascript">
		$(document).ready(
			function(){
				$('#reviews').innerfade({
					speed: 500,
					timeout: 7000,
					containerheight: '150px'
				});
			}
		);
	</script>

<!-- Add support for CSS3 selectors to IE6-IE8 -->
<!--[if (gte IE 6)&(lte IE 8)]>
<script type="text/javascript" src="assets/js/global/selectivizr-min.js"></script>
<![endif]-->

<!-- Fav and Touch icons -->
<link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/assets/ico/favicon.ico">
<link rel="apple-touch-icon" href="<?php bloginfo('template_directory'); ?>/assets/ico/apple-touch-icon.png">
<link rel="apple-touch-icon" sizes="72x72" href="<?php bloginfo('template_directory'); ?>/assets/ico/apple-touch-icon-72x72.png">
<link rel="apple-touch-icon" sizes="114x114" href="<?php bloginfo('template_directory'); ?>/assets/ico/apple-touch-icon-114x114.png">

<!-- Google Analytics -->
<script>
//window._gaq = [['_setAccount','UAXXXXXXXX1'],['_trackPageview'],['_trackPageLoadTime']];
//Modernizr.load({
//  load: ('https:' == location.protocol ? '//ssl' : '//www') + '.google-analytics.com/ga.js'
//});
</script>
<?php
	/* We add some JavaScript to pages with the comment form
	 * to support sites with threaded comments (when in use).
	 */
	if ( is_singular() && get_option( 'thread_comments' ) )
		wp_enqueue_script( 'comment-reply' );

	/* Always have wp_head() just before the closing </head>
	 * tag of your theme, or you will break many plugins, which
	 * generally use this hook to add elements to <head> such
	 * as styles, scripts, and meta tags.
	 */
	wp_head();
?>
</head>

<body <?php body_class(); ?>>
	<div id="fb-root"></div>
	<script>(function(d, s, id) {
	  var js, fjs = d.getElementsByTagName(s)[0];
	  if (d.getElementById(id)) return;
	  js = d.createElement(s); js.id = id;
	  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=405126159531480";
	  fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));</script>
	<div class="banner container">
		<div class="main-title">
			<h1>
				<a href="<?php echo home_url( '/' ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
			</h1>
			<div class="actors">
				<img src="<?php bloginfo('template_directory'); ?>/assets/img/global/chaske.png" alt="Chaske Spencer">
				<img src="<?php bloginfo('template_directory'); ?>/assets/img/global/david.png" alt="David Morse">
				<img src="<?php bloginfo('template_directory'); ?>/assets/img/global/julia.png" alt="Julia Jones">
			</div>
			<div class="actions">
				<!-- Twitter -->
				<div class="social twitter-follow">
					<a href="https://twitter.com/share" class="twitter-share-button" data-url="http://winterinthebloodfilm.com" data-text="Winter in the Blood | A film by Alex & Andrew Smith" data-via="winterintheblood">Tweet</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
				</div>
				<!-- Facebook -->
				<div class="social facebook-like">
					<div class="fb-like" data-href="https://www.facebook.com/winterinthebloodfilm" data-send="false" data-layout="button_count" data-width="80" data-show-faces="false" data-font="verdana"></div>
				</div>
				<!-- Trailer -->
				<div class="social trailers">
					Watch the official trailer: <a target="_blank" href="https://vimeo.com/51230755">HERE</a>
				</div>
			</div>
		</div>
		<!--
<div class="laurels">
			<img src="<?php bloginfo('template_directory'); ?>/assets/img/global/laurels-1.png" alt="Tribeca">
			<img src="<?php bloginfo('template_directory'); ?>/assets/img/global/laurels-2.png" alt="SXSW">
		</div>
-->
	</div>

	<!-- <p><?php bloginfo( 'description' ); ?></p> -->

	<div class="container main">


	<?php /* Our navigation menu.  If one isn't filled out, wp_nav_menu falls back to wp_page_menu.  The menu assiged to the primary position is the one used.  If none is assigned, the menu with the lowest ID is used.  */ ?>
	<?php wp_nav_menu( array( 'container_class' => 'primary-nav', 'theme_location' => 'primary' ) ); ?>