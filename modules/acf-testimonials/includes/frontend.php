<?php

$testimonials_class = 'fl-testimonials-wrap ' . $settings->layout;

if ( '' == $settings->heading && 'compact' == $settings->layout ) {
	$testimonials_class .= ' fl-testimonials-no-heading';
}

$testimonials = get_field($settings->testi_repeater_field);

?>
<div class="<?php echo $testimonials_class; ?>">

	<?php if ( ( 'wide' != $settings->layout ) && ! empty( $settings->heading ) ) : ?>
		<h3 class="fl-testimonials-heading"><?php echo $settings->heading; ?></h3>
	<?php endif; ?>
	<?php if ( is_array($testimonials) && count($testimonials) > 0 ): ?>
		<div class="fl-testimonials">
			<?php

			foreach ($testimonials as $testimony) :

				$name = $testimony[ $settings->testi_person_name ];
				$title = $testimony[ $settings->testi_person_title ];
				$quote = $testimony[ $settings->testi_quote ];

				$has_image =  $settings->testi_has_image;
				$image = null;
				//1 == true | 0 == false
				if( $has_image == '1' ){
					$image = $testimony[ $settings->testi_image ];
				}
				
				?>

			<div class="fl-testimonial">

			<?php if($has_image): ?>
				<div><img src="<?php echo $image; ?>" alt="<?php echo $name; ?>"/></div>
			<?php endif; ?>

				<blockquote>
					<?php echo $quote; ?>
			</blockquote>					
				<p>—<?php echo "$name, $title";?></p>

			</div>

			<?php endforeach; ?>
		</div>
		<?php if ( ( 'compact' == $settings->layout && $settings->arrows ) || ( 'wide' == $settings->layout && $settings->dots ) ) : ?>
		<div class="fl-slider-prev" role="button" aria-pressed="false" aria-label="<?php echo esc_attr( __( 'Previous', 'fl-builder' ) ); ?>"></div>
		<div class="fl-slider-next" role="button" aria-pressed="false" aria-label="<?php echo esc_attr( __( 'Next', 'fl-builder' ) ); ?>"></div>
		<?php endif; ?>
	<?php endif; ?>
</div>
<?php
