<div class="uk-block uk-block-secondary uk-contrast uk-margin-large-top">
	<div class="uk-container">
		<?php
		do_action( 'basey_footer' );
		wp_footer();
		//do_action( 'basey_debug' );
		?>
		<div class="uk-width-1-1">
			<p class="uk-text-center bottom-txt uk-text-small zz-text-more-muted">
				Copyright <?php echo date(Y); ?> <?php bloginfo('name'); ?>
			</p>
		</div>
	</div>
</div>
	</body>
</html>
