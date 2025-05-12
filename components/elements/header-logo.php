<?php
	$custom_logo_url = get_theme_mod( 'mytheme_custom_logo' );
	if ( $custom_logo_url ) : ?>
		<div class="header-logo">
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>">
				<img src="<?php echo esc_url( $custom_logo_url ); ?>" 
					 alt="<?php echo esc_attr( get_bloginfo( 'name' ) . ' ' . get_bloginfo( 'description' ) ); ?>"
 				/>
			</a>
		</div>
	<?php endif; ?>
