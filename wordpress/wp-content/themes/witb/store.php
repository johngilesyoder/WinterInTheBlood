<?php
/**
 * Template Name: Store
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query. 
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Starkers
 * @since Starkers 3.0
 */

get_header(); ?>

<!-- Page Specific Styles -->
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('template_directory'); ?>/assets/css/areas/store.css" />
	
		<div class="span8">
			<div class="row">
				<h2 class="page-title"><img src="<?php bloginfo('template_directory'); ?>/assets/img/titles/title-store.png" alt="Store"></h2>
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