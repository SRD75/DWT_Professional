<?php
/**
 * Static hero sidebar setup.
 *
 * @package dwt_professional
 */

?>
<?php if ( is_active_sidebar( 'statichero' ) ) : ?>

	<!-- ******************* The Hero Widget Area ******************* -->

	<div class="wrapper" id="wrapper-static-hero">
		<div class="container">

			<?php dynamic_sidebar( 'statichero' ); ?>

		</div>
	</div><!-- #wrapper-static-hero -->

<?php endif; ?>
