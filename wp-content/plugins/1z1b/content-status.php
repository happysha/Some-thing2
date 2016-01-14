<?php
/**
 * The template used for displaying status content
 *
 * @package Something-Fishy
 * @since Something Fishy 1.0
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="entry-content">
		<span class="status-entry-meta">
			<a href="<?php the_permalink(); ?>" title="<?php echo esc_attr( sprintf( __( 'Permalink to %s', 'something-fishy' ), the_title_attribute( 'echo=0' ) ) ); ?>"><?php the_date( get_option( 'date_format' ) ); ?></a> <?php _e( '@', 'something-fishy' ); ?> <?php the_time( 'g:i a' ) ?> <?php _e( '&#187;', 'something-fishy' ); ?>
		</span>
		<?php the_content(); ?>
	</div><!-- .entry-content -->
	<?php edit_post_link( __( 'Edit', 'something-fishy' ) , '', '' ); ?>
</article><!-- #post-<?php the_ID(); ?> -->
