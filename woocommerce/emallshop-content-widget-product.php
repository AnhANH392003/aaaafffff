<?php global $product; ?>
<li>
	<div class="product-image">
		<a href="<?php echo esc_url( get_permalink( $product->id ) ); ?>" title="<?php echo esc_attr( $product->get_title() ); ?>">
			<?php echo $product->get_image(); ?>
		</a>
	</div>
	<div class="product-details">
		<a href="<?php echo esc_url( get_permalink( $product->id ) ); ?>" title="<?php echo esc_attr( $product->get_title() ); ?>">
			<span class="product-title"><?php echo $product->get_title(); ?></span>
		</a>
		<?php echo $product->get_rating_html(); ?>
		<span class="product-price">
		<?php echo $product->get_price_html(); ?>
		</span>
	</div>
</li>