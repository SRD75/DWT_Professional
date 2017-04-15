<?php
/**
 * Doig Professional Theme Customizer
 *
 * @package dwt_professional
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
if ( ! function_exists( 'dwt_professional_customize_register' ) ) {
	/**
	 * Register basic customizer support.
	 *
	 * @param object $wp_customize Customizer reference.
	 */
	function dwt_professional_customize_register( $wp_customize ) {
		$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
		$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
		$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';
	}
}
add_action( 'customize_register', 'dwt_professional_customize_register' );

if ( ! function_exists( 'dwt_professional_theme_customize_register' ) ) {
	/**
	 * Register individual settings through customizer's API.
	 *
	 * @param WP_Customize_Manager $wp_customize Customizer reference.
	 */
	function dwt_professional_theme_customize_register( $wp_customize ) {
		
		// Front Page Cover Image
		$wp_customize->add_section( 'dwt_professional_front_cover_section', array(
			'title'       => __( 'Front Cover', 'dwt_professional' ),
			'capability'  => 'edit_theme_options',
			'priority'    => 90,
		));
		$wp_customize->add_setting( 'dwt_professional_front_cover_image', array(
			'default'           => '',
			'type'              => 'theme_mod',
			'capability'        => 'edit_theme_options',
		));
		$wp_customize->add_setting( 'dwt_professional_front_cover_bgcolor', array(
			'default'           => '#0098CA',
			'type'              => 'theme_mod',
			'capability'        => 'edit_theme_options',
		));
		$wp_customize->add_setting( 'dwt_professional_front_cover_textcolor', array(
			'default'           => '#000',
			'type'              => 'theme_mod',
			'capability'        => 'edit_theme_options',
		));
		$wp_customize->add_setting( 'dwt_professional_front_cover_textshadowcolor', array(
			'default'           => '#000',
			'type'              => 'theme_mod',
			'capability'        => 'edit_theme_options',
		));	

		$wp_customize->add_control(
			new WP_Customize_Image_Control(
				$wp_customize,
				'front_cover_image', array(
					'label'       => __( 'Front Cover Background Image', 'dwt_professional' ),
					'description' => __( 'Add a background image to the Front Cover widget area', 'dwt_professional' ),
					'section'     => 'dwt_professional_front_cover_section',
					'settings'    => 'dwt_professional_front_cover_image',
					'mime_type'   => 'image',
					'priority'    => '10',
				)
			));
		$wp_customize->add_control(
			new WP_Customize_Color_Control(
				$wp_customize,
				'front_cover_bgcolor', array(
					'label'       => __( 'Front Cover Background Color', 'dwt_professional' ),
					'description' => __( "Choose the background color for the Front Cover widget area", 'dwt_professional' ),
					'section'     => 'dwt_professional_front_cover_section',
					'settings'    => 'dwt_professional_front_cover_bgcolor',
					'priority'    => '10',
				)
			));
		$wp_customize->add_control(
			new WP_Customize_Color_Control(
				$wp_customize,
				'front_cover_textcolor', array(
					'label'       => __( 'Front Cover Text Color', 'dwt_professional' ),
					'description' => __( "Choose the text color for the Front Cover widget area", 'dwt_professional' ),
					'section'     => 'dwt_professional_front_cover_section',
					'settings'    => 'dwt_professional_front_cover_textcolor',
					'priority'    => '10',
				)
			));
		$wp_customize->add_control(
			new WP_Customize_Color_Control(
				$wp_customize,
				'front_cover_textshadowcolor', array(
					'label'       => __( 'Front Cover Text Shadow Color', 'dwt_professional' ),
					'description' => __( "Choose the color for shadow behind the text in the Front Cover widget area", 'dwt_professional' ),
					'section'     => 'dwt_professional_front_cover_section',
					'settings'    => 'dwt_professional_front_cover_textshadowcolor',
					'priority'    => '10',
				)
			));
		
		// Colors
		$wp_customize->add_setting( 'dwt_professional_header_bgcolor', array(
			'default'           => '#0098ca',
			'type'              => 'color',
			'capability'        => 'edit_theme_options',
		));	
		$wp_customize->add_setting( 'dwt_professional_hero_bgcolor', array(
			'default'           => '#ECEEEF',
			'type'              => 'color',
			'capability'        => 'edit_theme_options',
		));
		$wp_customize->add_setting( 'dwt_professional_hero_textcolor', array(
			'default'           => '#000',
			'type'              => 'color',
			'capability'        => 'edit_theme_options',
		));
		$wp_customize->add_setting( 'dwt_professional_footerfull_bgcolor', array(
			'default'           => '#ECEEEF',
			'type'              => 'color',
			'capability'        => 'edit_theme_options',
		));
		$wp_customize->add_setting( 'dwt_professional_footerfull_textcolor', array(
			'default'           => '#000',
			'type'              => 'color',
			'capability'        => 'edit_theme_options',
		));	
		$wp_customize->add_control( 
			new WP_Customize_Color_Control( 
			$wp_customize, 
			'header_bgcolor', 
			array(
				'label'      => __( 'Header Background Color', 'dwt_professional' ),
				'section'    => 'colors',
				'settings'   => 'dwt_professional_header_bgcolor',
			) ) 
		);
		$wp_customize->add_control( 
			new WP_Customize_Color_Control( 
			$wp_customize, 
			'hero_bgcolor', 
			array(
				'label'      => __( 'Hero Background Color', 'dwt_professional' ),
				'section'    => 'colors',
				'settings'   => 'dwt_professional_hero_bgcolor',
			) ) 
		);
		$wp_customize->add_control( 
			new WP_Customize_Color_Control( 
			$wp_customize, 
			'hero_textcolor', 
			array(
				'label'      => __( 'Hero Text Color', 'dwt_professional' ),
				'section'    => 'colors',
				'settings'   => 'dwt_professional_hero_textcolor',
			) ) 
		);
		$wp_customize->add_control( 
			new WP_Customize_Color_Control( 
			$wp_customize, 
			'footerfull_bgcolor', 
			array(
				'label'      => __( 'Footer Widget Background Color', 'dwt_professional' ),
				'section'    => 'colors',
				'settings'   => 'dwt_professional_footerfull_bgcolor',
			) ) 
		);
		$wp_customize->add_control( 
			new WP_Customize_Color_Control( 
			$wp_customize, 
			'footerfull_textcolor', 
			array(
				'label'      => __( 'Footer Widget Text Color', 'dwt_professional' ),
				'section'    => 'colors',
				'settings'   => 'dwt_professional_footerfull_textcolor',
			) ) 
		);	
		
		// Social Media Links.
		$wp_customize->add_section( 'dwt_professional_social_media', array(
			'title'       => __( 'Social Media', 'dwt_professional' ),
			'capability'  => 'edit_theme_options',
			'priority'    => 150,
		) );
		$wp_customize->add_setting( 'dwt_professional_social_facebook', array(
			'default'           => '',
			'type'              => 'theme_mod',
			'capability'        => 'edit_theme_options',
		) );
		$wp_customize->add_setting( 'dwt_professional_social_linkedin', array(
			'default'           => '',
			'type'              => 'theme_mod',
			'capability'        => 'edit_theme_options',
		) );
		$wp_customize->add_setting( 'dwt_professional_social_google', array(
			'default'           => '',
			'type'              => 'theme_mod',
			'capability'        => 'edit_theme_options',
		) );
		$wp_customize->add_setting( 'dwt_professional_social_twitter', array(
			'default'           => '',
			'type'              => 'theme_mod',
			'capability'        => 'edit_theme_options',
		) );
		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'social_facebook', array(
					'label'       => __( 'Facebook Link', 'dwt_professional' ),
					'section'     => 'dwt_professional_social_media',
					'settings'    => 'dwt_professional_social_facebook',
					'type'        => 'text',
					'priority'    => '10',
				)
			) );
		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'social_linkedin', array(
					'label'       => __( 'LinkedIn Link', 'dwt_professional' ),
					'section'     => 'dwt_professional_social_media',
					'settings'    => 'dwt_professional_social_linkedin',
					'type'        => 'text',
					'priority'    => '10',
				)
			) );
		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'social_google', array(
					'label'       => __( 'Google+ Link', 'dwt_professional' ),
					'section'     => 'dwt_professional_social_media',
					'settings'    => 'dwt_professional_social_google',
					'type'        => 'text',
					'priority'    => '10',
				)
			) );
		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'social_twitter', array(
					'label'       => __( 'Twitter Link', 'dwt_professional' ),
					'section'     => 'dwt_professional_social_media',
					'settings'    => 'dwt_professional_social_twitter',
					'type'        => 'text',
					'priority'    => '10',
				)
			) );	
		
		// Theme footer settings.
		$wp_customize->add_section( 'dwt_professional_theme_footer_options', array(
			'title'       => __( 'Theme Footer', 'dwt_professional' ),
			'capability'  => 'edit_theme_options',
			'priority'    => 170,
		) );			
		$wp_customize->add_setting( 'dwt_professional_footer_text', array(
			'default'           => '',
			'type'              => 'theme_mod',
			'capability'        => 'edit_theme_options',
		) );
		$wp_customize->add_setting( 'dwt_professional_footer_social', array(
			'default'           => 'false',
			'type'              => 'theme_mod',
			'capability'        => 'edit_theme_options',
		) );		
		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'footer_text', array(
					'label'       => __( 'Copyright Information', 'dwt_professional' ),
					'description' => __( "Add custom copyright information to the footer", 'dwt_professional' ),
					'section'     => 'dwt_professional_theme_footer_options',
					'settings'    => 'dwt_professional_footer_text',
					'type'        => 'text',
					'priority'    => '10',
				)
			) );
		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'footer_social', array(
					'label'       => __( 'Footer Social Icons', 'dwt_professional' ),
					'description' => __( "Display Social Media Links in Footer?", 'dwt_professional' ),
					'section'     => 'dwt_professional_theme_footer_options',
					'settings'    => 'dwt_professional_footer_social',
					'type'        => 'checkbox',
					'priority'    => '11',
				)
			) );					

		// Theme layout settings.
		$wp_customize->add_section( 'dwt_professional_theme_layout_options', array(
			'title'       => __( 'Theme Layout Settings', 'dwt_professional' ),
			'capability'  => 'edit_theme_options',
			'description' => __( 'Container width and sidebar defaults', 'dwt_professional' ),
			'priority'    => 160,
		) );

		$wp_customize->add_setting( 'dwt_professional_container_type', array(
			'default'           => 'container',
			'type'              => 'theme_mod',
			'sanitize_callback' => 'esc_textarea',
			'capability'        => 'edit_theme_options',
		) );

		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'container_type', array(
					'label'       => __( 'Container Width', 'dwt_professional' ),
					'description' => __( "Choose between Bootstrap's container and container-fluid", 'dwt_professional' ),
					'section'     => 'dwt_professional_theme_layout_options',
					'settings'    => 'dwt_professional_container_type',
					'type'        => 'select',
					'choices'     => array(
						'container'       => __( 'Fixed width container', 'dwt_professional' ),
						'container-fluid' => __( 'Full width container', 'dwt_professional' ),
					),
					'priority'    => '10',
				)
			) );

		$wp_customize->add_setting( 'dwt_professional_sidebar_position', array(
			'default'           => 'right',
			'type'              => 'theme_mod',
			'sanitize_callback' => 'esc_textarea',
			'capability'        => 'edit_theme_options',
		) );

		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'dwt_professional_sidebar_position', array(
					'label'       => __( 'Sidebar Positioning', 'dwt_professional' ),
					'description' => __( "Set sidebar's position. Can either be: right, left, both or none",
					'dwt_professional' ),
					'section'     => 'dwt_professional_theme_layout_options',
					'settings'    => 'dwt_professional_sidebar_position',
					'type'        => 'select',
					'choices'     => array(
						'right' => __( 'Right sidebar', 'dwt_professional' ),
						'left'  => __( 'Left sidebar', 'dwt_professional' ),
						'both'  => __( 'Left & Right sidebars', 'dwt_professional' ),
						'none'  => __( 'No sidebar', 'dwt_professional' ),
					),
					'priority'    => '20',
				)
			) );

		// How to display posts index page (home.php).
		$wp_customize->add_setting( 'dwt_professional_posts_index_style', array(
			'default'           => 'default',
			'type'              => 'theme_mod',
			'sanitize_callback' => 'esc_textarea',
			'capability'        => 'edit_theme_options',
		) );

		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'dwt_professional_posts_index_style', array(
					'label'       => __( 'Posts Index Style', 'dwt_professional' ),
					'description' => __( 'Choose how to display latest posts', 'dwt_professional' ),
					'section'     => 'dwt_professional_theme_layout_options',
					'settings'    => 'dwt_professional_posts_index_style',
					'type'        => 'select',
					'choices'     => array(
						'default' => __( 'Default', 'dwt_professional' ),
						'masonry' => __( 'Masonry', 'dwt_professional' ),
						'grid'    => __( 'Grid', 'dwt_professional' ),
					),
					'priority'    => '30',
				)
			) );

		// Columns setup for grid posts.
		/**
		 * Function and callback to check when grid is enabled.
		 *
		 * @return bool
		 */
		function is_grid_enabled() {
			return 'grid' == get_theme_mod( 'dwt_professional_posts_index_style' );
		}

		// How many columns to use each grid post.
		$wp_customize->add_setting( 'dwt_professional_grid_post_columns', array(
			'default'    => '6',
			'type'       => 'theme_mod',
			'capability' => 'edit_theme_options',
			'transport'  => 'refresh',
			'sanitize_callback' => 'absint',
		) );

		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'dwt_professional_grid_post_columns', array(
					'label'       => __( 'Grid Post Columns', 'dwt_professional' ),
					'description' => __( 'Choose how many columns to use', 'dwt_professional' ),
					'section'     => 'dwt_professional_theme_layout_options',
					'settings'    => 'dwt_professional_grid_post_columns',
					'type'        => 'select',
					'choices' => array(
					'6' => '2',
					'4' => '3',
					'3' => '4',
					'2' => '6',
					'12' => '1',
					),
					'default'     => 2,
					'priority'    => '30',
					'transport'   => 'refresh',
				)
			) );
			
		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'dwt_professional_header_color', array(
					'label'       => __( 'Header Color', 'dwt_professional' ),
					'description' => __( 'Choose the color behind the logo and navigation', 'dwt_professional' ),
					'section'     => 'colors',
					'settings'    => 'dwt_professional_header_color',
					'type'        => 'picker',
					'default'     => '#0098ca',
					'priority'    => '30',
					'transport'   => 'refresh',
				)
			) );			

		// hook to auto-hide/show depending the dwt_professional_posts_index_style option.
		$wp_customize->get_control( 'dwt_professional_grid_post_columns' )->active_callback = 'is_grid_enabled';

	}
} // endif function_exists( 'dwt_professional_theme_customize_register' ).
add_action( 'customize_register', 'dwt_professional_theme_customize_register' );


/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
if ( ! function_exists( 'dwt_professional_customize_preview_js' ) ) {
	/**
	 * Setup JS integration for live previewing.
	 */
	function dwt_professional_customize_preview_js() {
		wp_enqueue_script( 'dwt_professional_customizer', get_template_directory_uri() . '/js/customizer.js',
			array( 'customize-preview' ), '20130508', true );
	}
}
add_action( 'customize_preview_init', 'dwt_professional_customize_preview_js' );
