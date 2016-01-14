<?php
/**
 * The Sidebar containing the main widget areas.
 *
 * @package Something-Fishy
 * @since Something Fishy1.0
 */
?>


			<?php do_action( 'before_sidebar' ); ?>
			<?php if ( ! dynamic_sidebar( 'sidebar-1' ) ) : ?>

				<aside id="search" class="widget widget_search">
					<?php get_search_form(); ?>
				</aside>

				<aside id="archives" class="widget">
					<h1 class="widget-title"><?php _e( 'Archives', 'something-fishy' ); ?></h1>
					<ul>
						<?php wp_get_archives( array( 'type' => 'monthly' ) ); ?>
					</ul>
				</aside>

				<aside id="meta" class="widget">
					<h1 class="widget-title"><?php _e( 'Meta', 'something-fishy' ); ?></h1>
					<ul>
						<?php wp_register(); ?>
						<li><?php wp_loginout(); ?></li>
						<?php wp_meta(); ?>
					</ul>
				</aside>
			<?php endif; // end sidebar widget area ?>

<aside id="weixin" class="widget">
<img src="http://www.1z1b.com/wp-content/themes/1z1b/img/weixin.jpg" title="一周一博微信二维码" width="160" height="160"/>
</aside>
<script type="text/javascript">
var _bdhmProtocol = (("https:" == document.location.protocol) ? " https://" : " http://");
document.write(unescape("%3Cscript src='" + _bdhmProtocol + "hm.baidu.com/h.js%3Ff0afb33c6a89f515d3d8faacd84e7a58' type='text/javascript'%3E%3C/script%3E"));
</script>

		</div><!-- #secondary .widget-area -->

<a href="#zb_body"><div id="goToTop" ></div></a>