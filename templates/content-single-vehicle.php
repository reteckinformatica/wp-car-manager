<?php
/*Update by Reteck*/

if ( ! defined( 'ABSPATH' ) ) {
	exit;
} // Exit if accessed directly

?>
<div class="wpcm-vehicle" itemscope itemtype="https://schema.org/Vehicle">
	<!--Vehicle galeria-->
	<div class="wpcm-wrap-galeria">
		<?php
			do_action( 'wpcm_before_vehicle_summary', $vehicle ); // Galeria de Imagens
		?>
	</div>
	<div class="wpcm-container">
		<div class="wpcm-wrapper">
			<div class="wpcm-row">
				<!--SECTION-->
				<div class="wpcm-rtk-col-8">					
					<!--Vehicle Title-->
					<div class="wpcm-rtk-header wpcm-rtk-box">
						<h2><?php echo  $vehicle->get_title(); ?></h2>
						<span><i>R$ </i><?php echo number_format($vehicle->get_price(), 2, ',', '.') ; ?></span>		 
					</div>
					<!--Detalhes do Vehiculo-->
					<div class="wpcm-rtk-detalhes-vehicle wpcm-rtk-box">
						<?php do_action( 'wpcm_vehicle_content', $vehicle ); ?>
					</div>
					<!--Itens of Vehicle-->
					<div class="wpcm-rtk-itens-vehicle wpcm-rtk-box">
						<?php do_action( 'wpcm_vehicle_content_features', $vehicle ); ?>
					</div>						
					<!--Decrição do Veículo-->
					<div class="wpcm-rtk-decription wpcm-rtk-box">
						<?php do_action('wpcm_vehicle_content_content', $vehicle); ?>
					</div>									
				</div>
				<!--SIDEBAR-->
				<div class="wpcm-rtk-col-4">
					<!--Vehicle contact-->
					<div class="wpcm-rtk-box">
						<?php do_action( 'wpcm_vehicle_summary_contact', $vehicle );?>
					</div>			
				</div>
			</div>
			<!--meta tag for ?-->
			<meta itemprop="url" content="<?php the_permalink(); ?>"/>
		</div>
	</div>
</div>