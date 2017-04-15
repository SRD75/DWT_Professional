<?php
/**
 * The template part for displaying a message that posts cannot be found.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package dwt_professional
 */

?>
<article class="post no-results not-found" id="post-0">

	<header class="page-header">

		<h1 class="page-title"><?php _e( 'Nothing Found', 'dwt_professional' ); ?></h1>

	</header><!-- .page-header -->

	<div class="page-content">

		<?php if ( is_home() && current_user_can( 'publish_posts' ) ) : ?>

			<p><?php printf( __( 'Ready to publish your first post? <a href="%1$s">Get started here</a>.',
			'dwt_professional' ), esc_url( admin_url( 'post-new.php' ) ) ); ?></p>

		<?php elseif ( is_search() ) : ?>

			<p><?php _e( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.',
			'dwt_professional' ); ?></p>
			<?php get_search_form(); ?>

		<?php else : ?>

			<p><?php _e( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.',
			'dwt_professional' ); ?></p>

			<?php get_search_form(); ?>

		<?php endif; ?>

	</div><!-- .page-content -->

</article><!-- .no-results -->
