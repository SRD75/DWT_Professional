<?php
/**
 * Declaring widgets
 *
 * @package dwt_professional
 */

if ( ! function_exists( 'dwt_professional_widgets_init' ) ) {
	/**
	 * Initializes themes widgets.
	 */
	function dwt_professional_widgets_init() {
		register_sidebar( array(
			'name'          => __( 'Right Sidebar', 'dwt_professional' ),
			'id'            => 'right-sidebar',
			'description'   => 'Right sidebar widget area',
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget'  => '</aside>',
			'before_title'  => '<h3 class="widget-title">',
			'after_title'   => '</h3>',
		) );

		register_sidebar( array(
			'name'          => __( 'Left Sidebar', 'dwt_professional' ),
			'id'            => 'left-sidebar',
			'description'   => 'Left sidebar widget area',
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget'  => '</aside>',
			'before_title'  => '<h3 class="widget-title">',
			'after_title'   => '</h3>',
		) );
		
		register_sidebar( array(
			'name'          => __( 'Front Cover', 'dwt_professional' ),
			'id'            => 'front-cover',
			'description'   => 'Place a full width/height cover section on the front page. Add a background image in the Cusomizer',
			'before_widget' => '<div id="wrapper-front-cover">',
			'after_widget'  => '</div>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		) );		

		register_sidebar( array(
			'name'          => __( 'Hero Slider', 'dwt_professional' ),
			'id'            => 'hero',
			'description'   => 'Hero slider area. Place two or more widgets here and they will slide!',
			'before_widget' => '<div class="item">',
			'after_widget'  => '</div>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		) );

		register_sidebar( array(
			'name'          => __( 'Hero Static', 'dwt_professional' ),
			'id'            => 'statichero',
			'description'   => 'Static Hero widget. no slider functionallity',
			'before_widget' => '',
			'after_widget'  => '',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		) );

		register_sidebar( array(
			'name'          => __( 'Footer Full', 'dwt_professional' ),
			'id'            => 'footerfull',
			'description'   => 'Widget area below main content and above footer',
			'before_widget' => '',
			'after_widget'  => '',
			'before_title'  => '',
			'after_title'   => '',
		) );

	}
} // endif function_exists( 'dwt_professional_widgets_init' ).
add_action( 'widgets_init', 'dwt_professional_widgets_init' );

// Enable shortcodes in text widgets
add_filter('widget_text','do_shortcode');