<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package Something-Fishy
 * @since Something Fishy1.0
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<h1 class="entry-title"><?php the_title(); ?></h1>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php the_content(); ?>
		<?php wp_link_pages( array( 'before' => '<div class="page-links">', 'after' => '</div>', 'link_before' => '<span class="active-link">', 'link_after' => '</span>' ) ); ?>
		<?php edit_post_link( __( 'Edit', 'something-fishy' ), '<span class="edit-link">', '</span>' ); ?>
	</div><!-- .entry-content -->
</article><!-- #post-<?php the_ID(); ?> -->
