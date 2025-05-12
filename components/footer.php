<footer class="footer">
	<div class="footer-container">
		<p class="footer-text">
			&copy; <?php echo date('Y'); ?>
			<a href="<?php echo home_url(); ?>" class="footer-blog-info-name"><?php bloginfo('description'); ?></a>
				<i class="fa-solid fa-compass"></i>
			<a href="<?php echo CREATOR_LINK; ?>" target="_blank" rel="noopener noreferrer" class="footer-creator"><?php echo CREATOR_NAME; ?></a>
		</p>
	</div>
	<?php wp_footer(); ?>
</footer>
</body>
</html>

