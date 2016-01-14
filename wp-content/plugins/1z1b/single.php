<?php
/**
 * The Template for displaying all single posts.
 *
 * @package Something-Fishy
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

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'content', 'single' ); ?>


<!- 作者信息 -->
<div id="article-author" class="author-archives-header">
<div id="author-image" class="author-archives-img">
<?php if (function_exists('get_avatar')) { echo get_avatar( get_the_author_meta( 'ID' ), '70' ) ; }?>
</div>
<div id="author-text">
作者：<strong><?php the_author_link(); ?></strong><br/>
<?php the_author_description();?><br/>
<a href="<?php bloginfo('url');?>" title="<?php bloginfo('name');?>"><?php bloginfo('name');?></a> 版权所有，转载请留下原文链接：<a href="<?php echo get_permalink($post->ID);?>" title="<?php echo $post->post_title; ?>"><?php echo $post->post_title; ?></a><br />
<a href="<?php bloginfo('url');?>" title="<?php bloginfo('name');?>">


</div></div>
<!End 作者信息 -->

				<?php somethingfishy_content_nav( 'nav-below' ); ?>

				<?php
					// If comments are open or we have at least one comment, load up the comment template
					if ( comments_open() || '0' != get_comments_number() )
						comments_template( '', true );
				?>

<?php setPostViews(get_the_ID()); ?>

			<?php endwhile; // end of the loop. ?>

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