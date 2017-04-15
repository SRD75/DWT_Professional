<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package dwt_professional
 */

$container = get_theme_mod( 'dwt_professional_container_type' );
$header_bgcolor = get_theme_mod( 'dwt_professional_header_bgcolor');
$hero_bgcolor = get_theme_mod( 'dwt_professional_hero_bgcolor' );
$hero_textcolor = get_theme_mod( 'dwt_professional_hero_textcolor' );
$front_cover_image = esc_url(get_theme_mod( 'dwt_professional_front_cover_image' ));
$front_cover_bgcolor = get_theme_mod( 'dwt_professional_front_cover_bgcolor' );
$front_cover_textcolor = get_theme_mod( 'dwt_professional_front_cover_textcolor' );
$front_cover_textshadowcolor = get_theme_mod( 'dwt_professional_front_cover_textshadowcolor' );
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-title" content="<?php bloginfo( 'name' ); ?> - <?php bloginfo( 'description' ); ?>">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php wp_head(); ?>
    <style>
		<?php if($header_bgcolor != '') { ?>
		#wrapper-navbar {
		    background-color: <?php echo $header_bgcolor; ?>;
		}
		<?php } ?>
		#wrapper-front-cover {
			<?php if($front_cover_bgcolor != '') { ?>
			background-color: <?php echo $front_cover_bgcolor; ?>;
			<?php } ?>
			<?php if($front_cover_image != '') { ?>
			background: url('<?php echo $front_cover_image; ?>') no-repeat center center;;
			-webkit-background-size: cover;
			-moz-background-size: cover;
			-o-background-size: cover;
			background-size: cover;
			<?php } ?>
			<?php if($front_cover_textcolor != '') { ?>
			color: <?php echo $front_cover_textcolor; ?>;
			<?php } ?>
			<?php if($front_cover_textshadowcolor != '') { ?>
			text-shadow: 1px 1px 2px <?php echo $front_cover_textshadowcolor; ?>;
			<?php } ?>
			text-align: center;
		}
		#wrapper-static-hero {
			<?php if($hero_bgcolor != '') { ?>
		    background-color: <?php echo $hero_bgcolor; ?>;
			<?php } ?>
			<?php if($hero_textcolor != '') { ?>
			color: <?php echo $hero_textcolor; ?>;
			<?php } ?>
		}
		
	</style>
</head>

<body <?php body_class(); ?>>

<div class="hfeed site" id="page">

	<!-- ******************* The Navbar Area ******************* -->
	<div class="wrapper-fluid wrapper-navbar" id="wrapper-navbar">

		<a class="skip-link screen-reader-text sr-only" href="#content"><?php _e( 'Skip to content',
		'dwt_professional' ); ?></a>

		<nav class="navbar navbar-toggleable-md">

			<div class="<?php echo esc_html( $container ); ?>">

				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    				<span class="navbar-toggler-icon"></span>
 				 </button>

					<!-- Your site title as branding in the menu -->
					<?php if ( ! has_custom_logo() ) { ?>
					<a class="navbar-brand" rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>"
					   title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>">
						<?php bloginfo( 'name' ); ?>
					</a>
					
					<?php } else {
						the_custom_logo();
					} ?><!-- end custom logo -->

				<!-- The WordPress Menu goes here -->
				<?php wp_nav_menu(
					array(
						'theme_location'  => 'primary',
						'container_class' => 'collapse navbar-collapse',
						'container_id'    => 'navbarNavDropdown',
						'menu_class'      => 'navbar-nav',
						'fallback_cb'     => '',
						'menu_id'         => 'main-menu',
						'walker'          => new WP_Bootstrap_Navwalker(),
					)
				); ?>

			</div><!-- .container -->

		</nav><!-- .site-navigation -->

	</div><!-- .wrapper-navbar end -->
