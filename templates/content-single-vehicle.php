<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit;
} // Exit if accessed directly

/**
 * wpcm_before_single_vehicle hook
 */
do_action( 'wpcm_before_single_vehicle', $vehicle );
?>
	<div class="wpcm-vehicle wpcm-container" itemscope itemtype="https://schema.org/Vehicle">
	<div class="wpcm-wrapper">
		<div class="wpcm-vehicle-head wpcm-row">
			<?php
			/**
			 * wpcm_after_vehicle_summary hook
			 *
			 * @hooked wpcm_show_vehicle_images - 10
			 */
			do_action( 'wpcm_before_vehicle_summary', $vehicle );
			?>

			<div class="wpcm-summary wpcm-col-2">
				<?php
				/**
				 * wpcm_vehicle_summary hook
				 *
				 * @hooked wpcm_template_single_price - 10 removed by Reteck
				 * @hooked wpcm_template_single_summary_data - 20
				 * @hooked wpcm_template_single_contact - 30
				 */
				do_action( 'wpcm_vehicle_summary_price', $vehicle ); /*by Reteck */
				do_action( 'wpcm_vehicle_summary', $vehicle );
				?>
			</div>

			<?php
			/**
			 * wpcm_after_vehicle_summary hook
			 */
			do_action( 'wpcm_after_vehicle_summary', $vehicle );
			?>
		</div>

		<div class="wpcm-vehicle-content entry-content">
			<?php
			/**
			 * vehicle_single_vehicle_summary hook
			 *
			 * @hooked wpcm_template_single_data - 10
			 * @hooked wpcm_template_single_content - 20
			 * @hooked wpcm_template_single_features - 30
			 */
			do_action( 'wpcm_vehicle_content', $vehicle );
			?>
		</div>

		<meta itemprop="url" content="<?php the_permalink(); ?>"/>
	</div>
	</div>
<?php do_action( 'wpcm_after_single_vehicle', $vehicle ); ?>