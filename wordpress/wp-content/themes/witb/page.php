<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the wordpress construct of pages
 * and that other 'pages' on your wordpress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage Starkers
 * @since Starkers 3.0
 */

get_header(); ?>

		<div class="span8 page-content">
			<div class="row">
				<h2 class="page-title"><img src="<?php bloginfo('template_directory'); ?>/assets/img/titles/title-home.png" alt="A Peek into Winter in the Blood"></h2>
				<div class="page-share">
					<div class="fb-like" data-href="<?php the_permalink() ?>" data-send="false" data-layout="button_count" data-width="80" data-show-faces="false" data-font="arial"></div>
					<a href="https://twitter.com/share" class="twitter-share-button" data-url="<?php the_permalink() ?>" data-via="WinterBloodFilm">Tweet</a>
				<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
				</div>
				<div class="span8">
					<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>		

						<?php the_content(); ?>

					<?php endwhile; ?>
				</div>
			</div>
		</div>

		<?php get_sidebar(); ?>
</div><!-- .main -->
<footer class="container">	
	<?php get_footer(); ?>
</footer>