<?php
/**
 * The template for displaying Archive pages.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
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
					<h1 class="page-title"><?php _e( '作者档案', '1z1b' ); ?></h1>
					<div class="author-archives-header">
						<?php
								/* Queue the first post, that way we know
								 * what author we're dealing with (if that is the case).
								*/
								the_post();
								print( '<div class="author-info">' );
								printf( '<span class="author-archives-name">' . __( '%s', '1z1b' ) . '</span>', '<span class="vcard"><a class="url fn n" href="' . get_author_posts_url( get_the_author_meta( "ID" ) ) . '" title="' . esc_attr( get_the_author() ) . '" rel="me">' . get_the_author() . '</a></span>' );
								printf( '<span class="author-archives-url">' . __( '%s', '1z1b' ) . '</span>', '<a href="' . get_the_author_meta( 'user_url', get_the_author_meta( 'ID' ) ) . '" title="' . esc_attr( get_the_author() . '\'s website' ) . '">' . get_the_author_meta( 'user_url', get_the_author_meta( 'ID' ) ) . '</a>' );
								printf( '<span class="author-archives-bio">' . __( '%s', '1z1b' ) . '</span>', get_the_author_meta( 'user_description', get_the_author_meta( 'ID' ) ) );
								print( '</div>' );
								printf( '<span class="author-archives-img">%1$s</span>', get_avatar( get_the_author_meta( 'ID' ), '60' ) );
						?>
					</div>

				<?php rewind_posts(); ?>

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

				<?php get_template_part( 'no-results', 'archive' ); ?>

			<?php endif; ?>

			</div><!-- #content -->
		<div class="zb_nav clearfix">
			<span class="nav_button"></span>
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