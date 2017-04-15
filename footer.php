<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package dwt_professional
 */

$the_theme = wp_get_theme();
$container = get_theme_mod( 'dwt_professional_container_type' );
$footer_text = get_theme_mod( 'dwt_professional_footer_text' );
$show_social = get_theme_mod( 'dwt_professional_footer_social' );
if ($show_social == true) {
  $footer_facebook = get_theme_mod( 'dwt_professional_social_facebook' );
  $footer_linkedin = get_theme_mod( 'dwt_professional_social_linkedin' );
  $footer_google = get_theme_mod( 'dwt_professional_social_google' );
  $footer_twitter = get_theme_mod( 'dwt_professional_social_twitter' );
}
?>

<?php get_sidebar( 'footerfull' ); ?>

<div class="wrapper" id="wrapper-footer">

	<div class="<?php echo esc_html( $container ); ?>">

		<div class="row">

			<div class="col-md-12">

				<footer class="site-footer" id="colophon">
                
                	
                	<div class="copyright">
                    	<?php if($footer_text != '') { ?>	
                        	<div class="col-xs-6">
	    	                	<p>&copy; <?php echo $footer_text; ?></p>
                            </div>
	                    <?php } ?>
                        <?php if($show_social == true) { ?>
                        	<div class="col-xs-6 last">
                            	<?php if($footer_facebook != '') { ?>
                                	<a href="<?php echo $footer_facebook; ?>" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/icon_facebook.png" alt="Follow on Facebook" title="Follow on Facebook" class="icon-facebook" /></a>
                                <?php } ?>
                                <?php if($footer_linkedin != '') { ?>
                                	<a href="<?php echo $footer_linkedin; ?>" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/icon_linkedin.png" alt="Follow on Facebook" title="Follow on Facebook" class="icon-linkedin" /></a>
                                <?php } ?>
                                <?php if($footer_google != '') { ?>
                                	<a href="<?php echo $footer_google; ?>" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/icon_google.png" alt="Follow on Facebook" title="Follow on Facebook" class="icon-google" /></a>
                                <?php } ?>
                                <?php if($footer_twitter != '') { ?>
                                	<a href="<?php echo $footer_twitter; ?>" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/icon_twitter.png" alt="Follow on Facebook" title="Follow on Facebook" class="icon-twitter" /></a>
                                <?php } ?>
                            </div>
                        <?php } ?>
                    </div>


					<div class="site-info">
						<?php printf( __( 'Theme by %1$s.', 'dwt_professional' ), 
						'<a href="https://doig.website.technology/" rel="nofollow">Doig Website Technology</a>' ); ?>
					</div><!-- .site-info -->

				</footer><!-- #colophon -->

			</div><!--col end -->

		</div><!-- row end -->

	</div><!-- container end -->

</div><!-- wrapper end -->

</div><!-- #page -->

<?php wp_footer(); ?>

</body>

</html>
