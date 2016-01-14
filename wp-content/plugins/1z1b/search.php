<?php
/**
 * The template for displaying Search Results pages.
 *
 * @package 1z1b
 * @since Something Fishy1.0
 */

get_header(); ?>
<?php get_sidebar(); ?>

		<section class="zb_postList">
			<div class="zb_nav clearfix">			
			<span class="nav_button" title="hide/show sidebar"></span>
			<?php if (  $wp_query->max_num_pages > 1 ) : ?>
				<?php if(function_exists('wp_pagenavi')){ wp_pagenavi();}else{ ?>		
				<?php next_posts_link( __( '<span class="nav_prev" title="Older posts"></span>', 'twentyten' ) ); ?>				
				<?php previous_posts_link( __( '<span class="nav_next" title="Newer posts"></span>', 'twentyten' ) ); ?>
				
				<?php } ?>
			<?php endif; ?>
			</div>
<div class="mt30">	

			<?php if ( have_posts() ) : ?>

				<header class="page-header">
					<h1 class="page-title"><?php printf( __( 'Search Results for: %s', '1z1b' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
				</header>

				<?php /* Start the Loop */ ?>
				<?php while ( have_posts() ) : the_post(); ?>

					<?php get_template_part( 'content', 'search' ); ?>

				<?php endwhile; ?>

				

			<?php else : ?>

				<?php get_template_part( 'no-results', 'search' ); ?>

			<?php endif; ?>

			</div><!-- #content -->

			<div class="zb_nav clearfix">			
			<span class="nav_button" title="hide/show sidebar"></span>
			<?php if (  $wp_query->max_num_pages > 1 ) : ?>
				<?php if(function_exists('wp_pagenavi')){ wp_pagenavi();}else{ ?>		
				<?php next_posts_link( __( '<span class="nav_prev" title="Older posts"></span>', 'twentyten' ) ); ?>				
				<?php previous_posts_link( __( '<span class="nav_next" title="Newer posts"></span>', 'twentyten' ) ); ?>
				
				<?php } ?>
			<?php endif; ?>
			</div>
			
		</section>
		<?php wp_footer(); ?>
	</body>
	</html>	