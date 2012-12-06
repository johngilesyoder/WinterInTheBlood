<?php
/**
 * The Sidebar containing the primary and secondary widget areas.
 *
 * @package WordPress
 * @subpackage Starkers
 * @since Starkers 3.0
 */
?>

<ul class="span4 sidebar">
<div class="fb-like-box" data-href="http://www.facebook.com/winterinthebloodfilm" data-width="310" data-show-faces="true" data-stream="true" data-header="true"></div>
	<li>
		<h3>Reviews</h3>
		<div id="reviews">
			<div class="review">
				<div>
					<span class="review-stars four-stars"></span>
					“That sense of reality and storytelling coming together is especially strong.”
					<div class="credit"><span class="author">Kenneth Turan</span><span class="publication">L.A. Times</span></div>
				</div>
			</div>
			<!--
<div class="review">
				<div>
					<span class="review-stars three-stars"></span>
					“I was lifted off of my feet. Breathtaking.”
					<div class="credit"><span class="author">Gene Siskel</span><span class="publication">USA Today</span></div>
				</div>
			</div>
-->
		</div>
	</li>

<?php
	/* When we call the dynamic_sidebar() function, it'll spit out
	 * the widgets for that widget area. If it instead returns false,
	 * then the sidebar simply doesn't exist, so we'll hard-code in
	 * some default sidebar stuff just in case.
	 */
	if ( ! dynamic_sidebar( 'primary-widget-area' ) ) : ?>
	

		<?php endif; // end primary widget area ?>
		
	<li>
		<h3>Tickets &amp; Showtimes</h3>
		<div class="tix">
			<img class="poster" src="<?php bloginfo('template_directory'); ?>/assets/img/sidebar/tickets-poster.png">
			<form class="pull-right">
			  <label>Enter your zip</label>
			  <!-- <input type="text"> -->
			  <em style="font-family:'SentBook';text-transform: none;margin-bottom: 20px;display:block;">(Release date pending)</em>
			  <span class="help-block">Select ticket site</span>
			  <input class="fandango" type="image" src="<?php bloginfo('template_directory'); ?>/assets/img/sidebar/tickets-fandango.png" width="30" height="38">
			  <input class="movietix" type="image" src="<?php bloginfo('template_directory'); ?>/assets/img/sidebar/tickets-movietix.png" width="55" height="38">
			</form>
		</div>
	</li>
</ul>