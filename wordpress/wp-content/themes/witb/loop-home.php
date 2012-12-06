<?php
/**
 * The loop that displays posts.
 *
 * The loop displays the posts and the post content.  See
 * http://codex.wordpress.org/The_Loop to understand it and
 * http://codex.wordpress.org/Template_Tags to understand
 * the tags used in it.
 *
 * This can be overridden in child themes with loop.php or
 * loop-template.php, where 'template' is the loop context
 * requested by a template. For example, loop-index.php would
 * be used if it exists and we ask for the loop with:
 * <code>get_template_part( 'loop', 'index' );</code>
 *
 * @package WordPress
 * @subpackage Starkers
 * @since Starkers 3.0
 */
?>


<?php query_posts( array(
     'post_type' => array( 'post', 'slideshow', 'video' ),
     'cat' => 3,
     'showposts' => 10 )
     ); ?>
		<?php while ( have_posts() ) : the_post(); ?>

		<?php // Single post ?>
		<article class="span4">
			<a href="<?php the_permalink() ?>"><?php the_post_thumbnail('full'); ?></a>
			<?php if ( 'post' == get_post_type()  ) : ?><span class="type article">Article</span><?php endif; ?>
			<?php if ( 'slideshow' == get_post_type()  ) : ?><span class="type slideshow">Slideshow</span><?php endif; ?>
			<?php if ( 'video' == get_post_type()  ) : ?><span class="type video">Video</span><?php endif; ?>
			<h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
			<p><?php echo get_the_excerpt(); ?></p>
			<?php if ( 'post' == get_post_type()  ) : ?><a href="<?php the_permalink(); ?>" class="action">Read Article</a><?php endif; ?>
			<?php if ( 'slideshow' == get_post_type()  ) : ?><a href="<?php the_permalink(); ?>" class="action">View Slideshow</a><?php endif; ?>
			<?php if ( 'video' == get_post_type()  ) : ?><a href="<?php the_permalink(); ?>" class="action">Watch video</a><?php endif; ?>
		</article>

		<?php endwhile; ?>

<?php /* Display navigation to next/previous pages when applicable */ ?>
<?php if (  $wp_query->max_num_pages > 1 ) : ?>
				<?php next_posts_link( __( '&larr; Older posts', 'twentyten' ) ); ?>
				<?php previous_posts_link( __( 'Newer posts &rarr;', 'twentyten' ) ); ?>
<?php endif; ?>