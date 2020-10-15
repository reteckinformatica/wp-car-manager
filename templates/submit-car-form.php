<?php
/**
 * Car Submission Form
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

//variables
$wpcm_vehicles  = count_user_posts(get_current_user_id(),'wpcm_vehicle');
$maxposts       = get_user_meta(get_current_user_id(), 'userMeta_max_posts', true);

if($wpcm_vehicles < $maxposts || $can_edit_listing): 

?>
<!--Update by reteck-->
<div class="wpcm-wrap-page">
	<form action="<?php echo esc_url( $action ); ?>" method="post" id="wpcm-car-form" class="wpcm-car-form"
		data-vehicle="<?php echo $vehicle->get_id(); ?>" xmlns="http://www.w3.org/1999/html">

		<?php if ( apply_filters( 'wpcm_submit_car_form_show_signin', true ) ) : ?>

			<?php do_action( 'wpcm_submit_car_form_login', $vehicle ); ?>

		<?php endif; ?>

		<?php if ( ( $can_post_listing && 0 == $vehicle->get_id() ) || $can_edit_listing ) : ?>

			<?php do_action( 'wpcm_submit_car_form_fields_start' ); ?>

			<?php do_action( 'wpcm_submit_car_form_fields', $vehicle ); ?>

			<?php do_action( 'wpcm_submit_car_form_fields_end' ); ?>

			<p>
				<a name="submit_car" class="button wpcm-button" id="wpcm-submit">
					<span class="wpcm-val"><?php esc_attr_e( $submit_button_text ); ?></span>
					<span class="wpcm-spinner"><i></i></span>
				</a>
				<input style="position: absolute; left: -9999px"/><!-- Fallback submit -->
			</p>

			<?php else : ?>

				<?php do_action( 'wpcm_submit_car_form_disabled', $vehicle ); ?>
		
		<?php endif; ?>
	</form>
</div>
<?php  else :?>
	<div class="wpcm-wrap-page">
		<h2><?php _e( 'Limite máximo de anúncios atingido!','wp-car-manager' ) ?></h2>
		<p class="wpcm-notice-erro"> <?php _e( 'Você atingiu o limite máximo de anúncios permitido em seu plano atual. Se precisar inserir uma quantidade maior de anúncios, entre em contato com nosso suporte para que possamos fazer um upgrade do seu plano.', 'wp-car-manager' ); ?> </p>
		<a href="/meus-carros/" class="wpcm-button">Voltar</a>
	</div>
<?php endif; ?>