<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package 1z1b
 * @since 1z1b 1.0
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<title><?php
	/*
	 * Print the <title> tag based on what is being viewed.
	 */
	global $page, $paged;

	wp_title( '|', true, 'right' );

	// Add the blog name.
	bloginfo( 'name' );

	// Add the blog description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		echo " | $site_description";

	// Add a page number if necessary:
	if ( $paged >= 2 || $page >= 2 )
		echo ' | ' . sprintf( __( 'Page %s', 'something-fishy' ), max( $paged, $page ) );

	?></title>
<meta name="Keywords" content="一周一博,一周一博客,一周一博_记录生活_总结收获_分享成长"/>
<meta name="Description" content="一周一博，每周写一篇自己的博客，记录你的生活、学习和工作思想，不管内容是什么都将是我们成长轨迹的一部分。"/>
<link rel="shortcut icon" type="image/x-icon" href="http://www.1z1b.com/favicon.ico" />
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->

<script src="http://tjs.sjs.sinajs.cn/open/api/js/wb.js" type="text/javascript" charset="utf-8"></script>


<script id="jquery_182" type="text/javascript" class="library" src="http://sandbox.runjs.cn/js/sandbox/jquery/jquery-1.8.2.min.js"></script>

	<script>
		$(function(){
			
			var resize = function(){
	     		var sb = $("#zb_sidebar");
				var asides = $(".zb_sidebar aside");
				var zb = $(".zb_postList");
				var width = $(window).width();
				if(width<=630){
					sb.show();
					asides.hide();
					zb.css("margin-left",0);
					sb.css("height","auto");
				}else{
					if(sb.is(":visible")){
						sb.show();
						sb.css("left",0);
						zb.css("margin-left",340);
					}else{
						sb.hide();
						zb.css("margin-left",60);
					}
					asides.show();
					if(zb.height()>=sb.height())
						sb.css("height",zb.height()+22);
					else
						sb.css("height","auto");
				}
			};
			
			
			$(".zb_nav").css("width",($(".nav_button").outerWidth(true)+$(".nav_prev").outerWidth(true)+$(".nav_next").outerWidth(true)+10));
			if($(".nav_next").width())
				$(".nav_prev").css("margin-right",25);
			else
				$(".nav_prev").css("margin-right",0);
			
			
			resize();
		
			$(window).resize(function(){
				resize();
			});
		
			$(".nav_button").click(function(){
	     		var sb = $("#zb_sidebar");
	     		var zb = $(".zb_postList");
				var width = $(window).width();
				var asides = $(".zb_sidebar aside");
				if(width<=630){
					var sb = $("#zb_sidebar");
					if(asides.eq(0).is(":visible")){
						sb.show();
						asides.hide();
					}else{
						sb.show();
						asides.show();
					}
				}else{
					if(sb.is(":visible")){
						sb.animate({
							left:-270
						},500,function(){
							sb.hide();
						});
						zb.animate({
							'margin-left':60
						},500);
					}else{
						sb.show();
						sb.animate({
							opacity:1,
							left:0
						},500);
						zb.animate({
							'margin-left':340
						},500);
					}
				}
	     	});
		});
	</script>
<?php wp_head(); ?>

</head>

<body <?php body_class(); ?> id="zb_body">
	<div class="zb_sidebar" id="zb_sidebar">
			<h1 class="zb_logo">
				<a href="<?php echo home_url( '/' ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
				
			</h1>
			<h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>
			

	