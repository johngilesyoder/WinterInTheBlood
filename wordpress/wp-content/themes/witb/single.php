<?php
/**
 * The Template for displaying all single posts.
 *
 * @package WordPress
 * @subpackage Starkers
 * @since Starkers 3.0
 */

get_header(); ?>

<!-- Page Specific Styles -->
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('template_directory'); ?>/assets/css/areas/blogroll.css" />
	
<div class="span8">
	<div class="row">
		<?php 
		if ( in_category( 'featured' )) { ?>
			<h2 class="page-title"><img src="<?php bloginfo('template_directory'); ?>/assets/img/titles/title-home.png" alt="Music"></h2>
		<?php } else { ?>
			<h2 class="page-title"><img src="<?php bloginfo('template_directory'); ?>/assets/img/titles/title-blog.png" alt="Music"></h2>
		<?php } ?>

		<div class="span8">
			<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
			<div class="post">
				<h1 class="post-title"><?php the_title(); ?></h1>
				<p class="date">Posted on <?php the_date(); ?></p>

					<?php the_content(); ?>
					<?php wp_link_pages( array( 'before' => '' . __( 'Pages:', 'twentyten' ), 'after' => '' ) ); ?>

				<div class="share">
					<div class="fb-like" data-href="<?php the_permalink() ?>" data-send="false" data-layout="button_count" data-width="80" data-show-faces="false" data-font="arial"></div>
					<a href="https://twitter.com/share" class="twitter-share-button" data-url="<?php the_permalink() ?>" data-via="WinterBloodFilm">Tweet</a>
				<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
				</div>
			</div>

			<?php endwhile; // end of the loop. ?>

		</div>
	</div>
</div>

		<?php get_sidebar(); ?>
</div><!-- .main -->
<footer class="container">	
	<?php get_footer(); ?>
</footer>