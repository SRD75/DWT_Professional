<?php
/**
 * Doig Professional enqueue scripts
 *
 * @package dwt_professional
 */

if ( ! function_exists( 'dwt_professional_scripts' ) ) {
	/**
	 * Load theme's JavaScript sources.
	 */
	function enqueue_dwt_professional_scripts() {
		// Get the theme data
		$the_theme = wp_get_theme();
		wp_enqueue_style( 'dwt_professional-styles', get_stylesheet_directory_uri() . '/css/theme.css', array(), $the_theme->get( 'Version' ) );
		wp_enqueue_style( 'dwt-styles', get_stylesheet_directory_uri() . '/style.css', array(), $the_theme->get( 'Version' ) );
		wp_enqueue_script( 'jquery' );
		wp_enqueue_script( 'dwt_professional-scripts', get_template_directory_uri() . '/js/theme.min.js', array(), $the_theme->get( 'Version' ), true );
		if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
			wp_enqueue_script( 'comment-reply' );
		}
	}
} // endif function_exists( 'dwt_professional_scripts' ).

add_action( 'wp_enqueue_scripts', 'enqueue_dwt_professional_scripts' );

/**
 *Loading slider script conditionally
 */

if ( is_active_sidebar( 'hero' ) ) :
	add_action( 'wp_enqueue_scripts', 'dwt_professional_slider' );

	if ( ! function_exists( 'dwt_professional_slider' ) ) {
		/**
		 * Setup slider.
		 */
		function dwt_professional_slider() {
			if ( is_front_page() ) {
				$data = array(
					'timeout' => intval( get_theme_mod( 'dwt_professional_theme_slider_time_setting', 5000 ) ),
					'items'   => intval( get_theme_mod( 'dwt_professional_theme_slider_count_setting', 1 ) ),
				);

				wp_enqueue_script( 'Doig Professional-slider-script',
				get_stylesheet_directory_uri() . '/js/slider_settings.js', array() );
				wp_localize_script( 'Doig Professional-slider-script', 'dwt_professional_slider_variables', $data );
			}
		}
	}
endif;

