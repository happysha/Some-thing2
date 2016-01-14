<?php
/**
 * The template for displaying 404 pages (Not Found).
 *
 * @package Something-Fishy
 * @since Something Fishy1.0
 */

get_header(); ?>
</div>
<section class="zb_postList">
	

			<article id="post-0" class="post error404 not-found hentry">
				<header class="entry-header">
					<h1 class="entry-title"><?php _e( 'Oops! That page can&rsquo;t be found.', 'something-fishy' ); ?></h1>
				</header>

				<div class="entry-content">
					<p><?php _e( 'It looks like nothing was found at this location. Maybe try a search?', 'something-fishy' ); ?></p>

					<?php get_search_form(); ?>

				</div><!-- .entry-content -->
			</article><!-- #post-0 -->

	
</section>
		<?php wp_footer(); ?>
	</body>
	</html>	