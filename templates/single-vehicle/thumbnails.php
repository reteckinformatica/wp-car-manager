<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
} // Exit if accessed directly

// get attachment ID's
$attachment_ids = $vehicle->get_gallery_attachment_ids();

if ( $attachment_ids ) {
	$loop    = 0;
		foreach ( $attachment_ids as $attachment_id ) {

			// get image link
			$image_link = wp_get_attachment_url( $attachment_id );

			// no link, no image
			if ( ! $image_link ) {
				continue;
			}		
			// get image caption
			$image_caption = esc_attr( get_post_field( 'post_excerpt', $attachment_id ) );

			// get image html
			$image = Never5\WPCarManager\Helper\Images::get_image_html( $attachment_id, apply_filters( 'wpcm_single_vehicle_small_thumbnail_size', 'wpcm_vehicle_thumbnail' ) );

			?>
				<div><?php echo $image; ?></div>
			<?php

			$loop ++;
		}
}
?>