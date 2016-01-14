<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package 1z1b
 * @since 1z1b 1.0
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

				<?php /* Start the Loop */ ?>
				<?php while ( have_posts() ) : the_post(); ?>

					<?php
						/* Include the Post-Format-specific template for the content.
						 * If you want to overload this in a child theme then include a file
						 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
						 */
						get_template_part( 'content', get_post_format() );

					?>

				<?php endwhile; ?>

				

			<?php else : ?>

				<?php get_template_part( 'no-results', 'index' ); ?>

			<?php endif; ?><!-- #content -->
		</div>

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

