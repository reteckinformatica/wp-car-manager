<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
} // Exit if accessed directly

?>
<div class="wpcm-contact">
	<h3>Fale com o vendedor</h3>
	<div class="wpcm-rtk-wrap-form">
		<form>
			<input class="wpcm-rtk-form-control" type="text" placeholder="Nome"/>
			<input class="wpcm-rtk-form-control" type="text" placeholder="E-mail"/>
			<input class="wpcm-rtk-form-control" type="text" placeholder="Telefone"/>
			<textarea class="wpcm-rtk-form-control" placeholder="Mensagem"></textarea>
			<input class="button" type="submit" value="ENVIAR MENSAGEM"/>
		</form>
	</div>	
	<div class="wpcm-rtk-whatsapp">
		<?php
		/*
		if ( '' !== $phone_number && apply_filters( 'wpcm_contact_phone_link', true ) ) :
			?>
			<a target="_blank" href="https://wa.me/<?php echo esc_attr( $phone_number ); ?>?text=Ol%C3%A1%2C%20gostaria%20de%20receber%20mais%20informa%C3%A7%C3%B5es%20sobre%20o%20seguinte%20ve%C3%ADculo%20<?php the_permalink(); ?>"
			class="wpcm-button wpcm-contact-button"><?php _e( '✆ Fale com o vendedor', 'wp-car-manager' ); ?></a>
		<?php endif; */?>
	
	</div>
</div>