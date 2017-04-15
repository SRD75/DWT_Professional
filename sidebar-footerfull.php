<?php
/**
 * Sidebar setup for footer full.
 *
 * @package dwt_professional
 */

?>

<?php if ( is_active_sidebar( 'footerfull' ) ) : ?>

	<!-- ******************* The Footer Full-width Widget Area ******************* -->

	<div class="wrapper" id="wrapper-footer-full">
		<div class="container">
        
			<?php dynamic_sidebar( 'footerfull' ); ?>
            
        </div>
	</div><!-- #wrapper-footer-full -->

<?php endif; ?>
