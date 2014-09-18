<?php

?>

	</div>

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info">
			<?php do_action( 'stitch_credits' ); ?>
			<a href="http://wordpress.org/" title="<?php esc_attr_e( 'A Semantic Personal Publishing Platform', 'stitch' ); ?>" rel="generator"><?php printf( __( 'Proudly powered by %s', 'stitch' ), 'WordPress' ); ?></a>
			<span class="sep">  </span>
			<?php printf( __( 'Theme: %1$s by %2$s.', 'stitch' ), 'Stitch', '<a href="http://carolinemoore.net/" rel="designer">Caroline Moore</a>' ); ?>
		</div>
	</footer>
</div>

<?php wp_footer(); ?>

</body>
</html>