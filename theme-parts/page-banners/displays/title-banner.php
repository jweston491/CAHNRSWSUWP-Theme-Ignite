<div class="ignite-title-banner">
	<div class="ignite-banner-background unbound recto verso" style="background-image:url(<?php echo esc_url( $img ); ?>)">
	</div>
	<div class="ignite-banner-content" style="min-height:<?php echo esc_attr( $height ); ?>;">
		<div class="ignite-banner-content-inner">
			<div class="ignite-banner-content-text">
				<span class="ignite-banner-title" style="<?php echo esc_attr( $style ); ?>";><?php echo esc_html( $title ); ?></span>
				<?php if ( ! empty( $subtitle ) ) : ?><span class="ignite-banner-subtitle" style="<?php echo esc_attr( $style ); ?>"><?php echo esc_html( $subtitle ); ?></span><?php endif; ?>
				<span class="ignite-banner-caption" style="<?php echo esc_attr( $style ); ?>"><?php echo esc_html( $caption ); ?></span>
			</div>
		</div>
	</div>
</div>