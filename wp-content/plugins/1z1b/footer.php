<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package Something-Fishy
 * @since Something Fishy1.0
 */
?>
	</div><!-- #main -->
	<div class="reeds-wrapper"></div>
	<div class="footer-wrapper">
		<div class="sea-sprite" id="bubbles"></div>
		<div class="sea-sprite" id="oyster"></div>
		<div class="sea-sprite" id="plants-1-sm"></div>
		<div class="sea-sprite" id="plants-2-sm"></div>
		<div class="sea-sprite" id="starfish"></div>
		<div class="sea-sprite" id="starfish-2"></div>
		<div class="sea-sprite" id="plants-1-lg"></div>
		<div class="sea-sprite" id="octopus"></div>
		<div class="sea-sprite" id="hill-1"></div>
		<div class="sea-sprite" id="hill-2"></div>
		<div class="sea-sprite" id="snail"></div>
		<div class="reeds-sprite" id="reeds-1-lg"></div>
		<div class="reeds-sprite" id="reeds-2-lg"></div>
		<div class="reeds-sprite" id="reeds-1-sm"></div>
		<div class="reeds-sprite" id="reeds-2-sm"></div>
		<div class="reeds-sprite" id="reeds-3-sm"></div>
		<div class="reeds-sprite" id="reeds-4-sm"></div>
		<div class="reeds-sprite" id="reeds-5-sm"></div>
	</div>
	<div id="ocean-floor-background"></div>
	<div id="ocean-floor-background-2">
		<div class="footer-sidebars-wrapper">
			<?php if ( is_active_sidebar( 'footer-sidebar-1' ) || is_active_sidebar( 'footer-sidebar-2' ) || is_active_sidebar( 'footer-sidebar-3' ) ) : ?>
				<div class="footer-sidebars">
					<?php get_sidebar( 'footer-1' ); ?>
					<?php get_sidebar( 'footer-2' ); ?>
					<?php get_sidebar( 'footer-3' ); ?>
				</div>
			<?php endif; ?>
			<footer id="colophon" class="site-footer" role="contentinfo">
				<div class="site-info">
					<?php do_action( 'somethingfishy_credits' ); ?>
					<a href="http://wordpress.org/" title="<?php esc_attr_e( 'A Semantic Personal Publishing Platform', 'something-fishy' ); ?>" rel="generator"><?php printf( __( 'Proudly powered by %s', 'something-fishy' ), 'WordPress' ); ?></a>
					<span class="sep"> | </span>
					<?php printf( __( 'Theme: %1$s by %2$s.', 'something-fishy' ), 'Something Fishy', '<a href="http://carolinemoore.net/" rel="designer">Caroline Moore</a>' ); ?>
<!-- 1z1b.com Baidu tongji analytics --><script type="text/javascript">
var _bdhmProtocol = (("https:" == document.location.protocol) ? " https://" : " http://");
document.write(unescape("%3Cscript src='" + _bdhmProtocol + "hm.baidu.com/h.js%3Ff0afb33c6a89f515d3d8faacd84e7a58' type='text/javascript'%3E%3C/script%3E"));
</script>

				</div><!-- .site-info -->
			</footer><!-- .site-footer .site-footer -->
		</div>
	</div>

</div><!-- #page .hfeed .site -->

<?php wp_footer(); ?>

</body>
</html>