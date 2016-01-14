<?php
/**
 * The template for displaying Archive pages.
 *
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

					<header class="page-header">
						<h1 class="page-title">
							<?php
								if ( is_category() ) {
									printf( __( '%s', '1z1b' ), '<span class="category">' . single_cat_title( '', false ) . '</span>' );

								} elseif ( is_tag() ) {
									printf( __( '标签档案: %s', '1z1b' ), '<span>' . single_tag_title( '', false ) . '</span>' );

								} elseif ( is_author() ) {
									/* Queue the first post, that way we know
									 * what author we're dealing with (if that is the case).
									*/
									the_post();
									printf( __( '作者档案: %s', '1z1b' ), '<span class="vcard"><a class="url fn n" href="' . get_author_posts_url( get_the_author_meta( "ID" ) ) . '" title="' . esc_attr( get_the_author() ) . '" rel="me">' . get_the_author() . '</a></span>' );
									/* Since we called the_post() above, we need to
									 * rewind the loop back to the beginning that way
									 * we can run the loop properly, in full.
									 */
									rewind_posts();

								} elseif ( is_day() ) {
									printf( __( '日档案： %s', '1z1b' ), '<span>' . get_the_date() . '</span>' );

								} elseif ( is_month() ) {
									printf( __( '月档案： %s', '1z1b' ), '<span>' . get_the_date( 'Y 年 F' ) . '</span>' );

								} elseif ( is_year() ) {
									printf( __( '年档案： %s', '1z1b' ), '<span>' . get_the_date( 'Y' ) . '</span>' );

								} elseif ( get_post_format() ) {
									printf( __( 'Post Format Archives: %s', '1z1b' ), '<span>' . get_post_format_string( get_post_format() ) . '</span>' );

								} else {
									_e( 'Archives', '1z1b' );

								}
							?>
						</h1>
						<?php
							if ( is_category() ) {
								// show an optional category description
								$category_description = category_description();
								if ( ! empty( $category_description ) )
									echo apply_filters( 'category_archive_meta', '<div class="taxonomy-description">' . $category_description . '</div>' );

							} elseif ( is_tag() ) {
								// show an optional tag description
								$tag_description = tag_description();
								if ( ! empty( $tag_description ) )
									echo apply_filters( 'tag_archive_meta', '<div class="taxonomy-description">' . $tag_description . '</div>' );
							}
						?>
					</header>

					
					
			
				
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