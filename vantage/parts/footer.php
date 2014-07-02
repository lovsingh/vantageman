<?php
/**
 * Part Name: Default Footer
 */
?>
<footer id="colophon" class="site-footer" role="contentinfo">

	<div id="footer-widgets" class="full-container">
		<?php dynamic_sidebar( 'sidebar-footer' ) ?>
	</div><!-- #footer-widgets -->

	
		<div id="site-info">
			<?php echo wp_kses_post($site_info_text) ?>
		</div><!-- .site-info -->
	<?php endif; ?>

	<?php echo apply_filters( 'vantage_footer_attribution', '<div id="theme-attribution">' . sprintf( __('A <a href="%s">SiteOrigin</a> Theme', 'vantage'), 'http://siteorigin.com') . '</div>' ) ?>

</footer><!-- #colophon .site-footer -->
