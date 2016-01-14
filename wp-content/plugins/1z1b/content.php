<?php
/**
 * @package Something-Fishy
 * @since Something Fishy1.0
 */
?>
<?php if ( '' != get_the_post_thumbnail() ) { ?>
	<div class="featured-image">
		<a href="<?php the_permalink(); ?>" title="<?php echo esc_attr( sprintf( __( 'Permalink to %s', 'something-fishy' ), the_title_attribute( 'echo=0' ) ) ); ?>" rel="bookmark">
			<?php the_post_thumbnail(); ?>
		</a>
	</div>
<?php } ?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<h1 class="entry-title"><a href="<?php the_permalink(); ?>" title="<?php echo esc_attr( sprintf( __( 'Permalink to %s', 'something-fishy' ), the_title_attribute( 'echo=0' ) ) ); ?>" rel="bookmark"><?php the_title(); ?></a></h1>
		<div class="entry-meta">
			<?php somethingfishy_posted_on(); ?>
		</div>
	</header><!-- .entry-header -->

	<?php if ( is_search() ) : // Only display Excerpts for Search ?>
	<div class="entry-summary">
		<?php the_excerpt(); ?>
	</div><!-- .entry-summary -->
	<?php else : ?>
	<div class="entry-content">

		<?php the_content( __( '阅读全文 <span class="meta-nav">&rarr;</span>', 'something-fishy' ) ); ?>

		<?php wp_link_pages( array( 'before' => '<div class="page-links">', 'after' => '</div>', 'link_before' => '<span class="active-link">', 'link_after' => '</span>' ) ); ?>
	</div><!-- .entry-content -->
	<?php endif; ?>

	<footer class="entry-meta">
		<?php if ( 'post' == get_post_type() ) : // Hide category and tag text for pages on Search ?>
			<?php
				/* translators: used between list items, there is a space after the comma */
				$categories_list = get_the_category_list( ' ' );
				if ( $categories_list && somethingfishy_categorized_blog() ) :
			?>
			<span class="cat-links">
				<?php echo $categories_list; ?>
			</span>
			<?php endif; // End if categories ?>

			<?php
				/* translators: used between list items, there is a space after the comma */
				$tags_list = get_the_tag_list( '' );
				if ( $tags_list ) :
			?>
			<span class="tags-links">
				<?php echo $tags_list; ?>
			</span>
			<?php endif; // End if $tags_list ?>
		<?php endif; // End if 'post' == get_post_type() ?>

		<?php if ( ! post_password_required() && ( comments_open() || '0' != get_comments_number() ) ) : ?>

		<span class="comments-link"><?php comments_popup_link( __( 'Leave a comment', 'something-fishy' ), __( '1 Comment', 'something-fishy' ), __( '% Comments', 'something-fishy' ) ); ?></span>
		<?php endif; ?>
<span class="views-link"><?php echo getPostViews(get_the_ID()); ?></span>
		<?php edit_post_link( __( 'Edit', 'something-fishy' ), '<span class="edit-link">', '</span>' ); ?>
	</footer><!-- #entry-meta -->
</article>
<!--2 #post-<?php the_ID(); ?> -->