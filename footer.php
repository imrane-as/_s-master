<?php
/**
 * The template for displaying the footer.
 *
 * @package _s
 */
?>

	<footer id="colophon" class="site-footer">
		<div class="footer-brand">
			<a class="brand-mark small" href="<?php echo esc_url( home_url( '/' ) ); ?>">
				<span>C</span>
			</a>

			<div>
				<strong>CentUn Studios</strong>
				<p>Démonstration WordPress déployée avec Coolify.</p>
			</div>
		</div>

		<div class="footer-meta">
			<span>© <?php echo esc_html( gmdate( 'Y' ) ); ?> CentUn Studios</span>
			<span>GitHub · Docker · Coolify · WordPress</span>
		</div>
	</footer>
</div>

<?php wp_footer(); ?>
</body>
</html>
