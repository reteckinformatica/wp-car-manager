<h2><?php _e( 'Images', 'wp-car-manager' ); ?></h2>
<fieldset class="wpcm-fieldset-images">

	<?php

	//
	$attachment_ids = $vehicle->get_gallery_attachment_ids();
	$max_photos = get_user_meta( get_current_user_id(), 'userMeta_max_photos_upload', true);

	// is edit
	$is_edit = false;

	// check if we're editing
	if ( ! empty( $_GET['wpcm_edit'] ) && ! empty( $_GET['wpcm_vehicle_id'] ) ) {
		$is_edit = true;
	}

	// if editing
	if ( $is_edit == true ){
		if( count($attachment_ids) > 0){
			if( count($attachment_ids) == $max_photos ){
				$max_photos_upload = 0;
			}else{
				$max_photos_upload = $max_photos - count($attachment_ids) -1;
			}
		}else{
			$max_photos_upload = $max_photos;
		}
	}else{
		$max_photos_upload = $max_photos;
	}

	// attachments
	$attachment_ids = array();

	// get featured image - destaque
	$featured_id = get_post_thumbnail_id( $vehicle->get_id() );

	// add id to $attachment_ids if not empty
	if ( ! empty( $featured_id ) ) {
		$attachment_ids[] = $featured_id;

		// get other images, these can only exist if there's a featured image
		$attachment_ids = array_merge( $attachment_ids, $vehicle->get_gallery_attachment_ids() );
	}

	if ( count( $attachment_ids ) > 0 ):
		?>
		<div class="wpcm-form-images-current">
			<h3><?php _e( 'Current Images', 'wp-car-manager' ); ?></h3>
			<div class="wpcm-wrapper wpcm-wrap-images">
				<div class="wpcm-row">
					<ul>
						<?php foreach ( $attachment_ids as $attachment_id ) : ?>
							<li class="wpcm-col-4 wpcm-images-org">
								<?php echo Never5\WPCarManager\Helper\Images::get_image_html( $attachment_id, apply_filters( 'wpcm_single_vehicle_small_thumbnail_size', 'wpcm_vehicle_thumbnail' ) ); ?>
								<a href="javascript:;" class="button wpcm-delete-image" data-id="<?php echo $attachment_id; ?>"><?php _e( 'Delete', 'wp-car-manager' ); ?></a>
							</li>
						<?php endforeach; ?>
					</ul>
				</div>
			</div>
		</div>
	<?php endif; ?>

	<div class="wpcm-form-image-upload" id="wpcm-car-submission-images">
		<h3><?php _e( 'Upload New Images' , 'wp-car-manager' ); ?></h3>
		<strong><?php _e( 'Click here to upload your images', 'wp-car-manager' ); _e(' | Você pode enviar até: ' . get_user_meta( get_current_user_id(), 'userMeta_max_photos_upload', true) . ' de imagens', 'wp-car-manager'); ?></strong><br/>
		<span><?php _e( 'You can upload multiple images at the same time, the first image will be your thumbnail.', 'wp-car-manager' ); ?></span><br/>
		<span id="max_photos_upload" hidden><?php echo $max_photos_upload; ?></span>		
	</div>

</fieldset>