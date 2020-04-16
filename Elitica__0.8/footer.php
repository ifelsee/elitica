<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Elitica
 */

?>

<?php wp_footer(); ?>
</div>
</div>
</div>
</div>

<div class="foo ter">
	<?php echo esc_attr( get_option( 'instagram_url ' ) );?>
	<div class="footer-content">
		<?php if (is_active_sidebar('custom-side-bar-footer')) : ?>
			<?php dynamic_sidebar('custom-side-bar-footer'); ?>
		<?php endif; ?>
		<hr>
			
	</div>

</div>

<script type="text/javascript">
		jQuery(function () {
			jQuery('#dg-container').gallery();
		});
		
	</script>

			
</body>

</html>