<?php
/*Update by Reteck*/

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

			<div class="wpcm-summary wpcm-rtk-section">
				<div class="wpcm-rtk-header"> 
					<h1>
						<?php echo  $vehicle->get_title(); ?> 						
					</h1>
				</div>
				<div class="wpcm-rtk-detalhes">						
					<?php
					/**
					* wpcm_vehicle_summary hook
					*
					* @hooked wpcm_template_single_data
					*/
					do_action( 'wpcm_vehicle_content', $vehicle );
					?>
				</div>
			</div>
			<div class="wpcm-summary wpcm-rtk-sidebar">
				<?php 
				/**
				 * wpcm_vehicle_summary hook
				 *
				 * @hooked wpcm_template_single_contact - 30
				 */
				do_action( 'wpcm_vehicle_summary_contact', $vehicle );
				?>
			</div>

			<?php
			/**
			 * wpcm_after_vehicle_summary hook
			 */
			//do_action( 'wpcm_after_vehicle_summary', $vehicle );
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
			do_action('wpcm_vehicle_content_content', $vehicle);
			?>
		</div>

		<meta itemprop="url" content="<?php the_permalink(); ?>"/>
	</div>
	</div>
<?php do_action( 'wpcm_after_single_vehicle', $vehicle ); ?>