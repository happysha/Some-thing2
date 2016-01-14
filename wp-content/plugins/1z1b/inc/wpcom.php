<?php
/**
 * WordPress.com-specific functions and definitions
 *
 * @package Something-Fishy
 * @since Something Fishy 1.0
 */

global $themecolors;

/**
 * Set a default theme color array for WP.com.
 *
 * @global array $themecolors
 * @since Something Fishy 1.0
 */
$themecolors = array(
	'bg' => 'f2f7f7',
	'border' => 'cccccc',
	'text' => '333333',
	'link' => '39aca0',
	'url' => '39aca0',
);

/*
 * De-queue Google fonts if custom fonts are being used instead
 */

function somethingfishy_dequeue_fonts() {
	if ( class_exists( 'TypekitData' ) ) {
		if ( TypekitData::get( 'upgraded' ) ) {
			$customfonts = TypekitData::get( 'families' );
				if ( ! $customfonts )
					return;

				$site_title = $customfonts['site-title'];
				$headings = $customfonts['headings'];
				$body_text = $customfonts['body-text'];

				if ( $site_title['id'] && $headings['id'] && $body_text['id'] ) {
					wp_dequeue_style( 'underthesea-portlligatsans' );
					wp_dequeue_style( 'underthesea-oswald' );
					wp_dequeue_style( 'underthesea-pacifico' );
				}
		}
	}
}

add_action( 'wp_enqueue_scripts', 'somethingfishy_dequeue_fonts' );
