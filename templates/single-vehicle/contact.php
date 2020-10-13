<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
} // Exit if accessed directly

?>
<div class="wpcm-contact">
	<h3>Fale com o vendedor</h3>
	<div class="wpcm-location">
		<ul class="wpcm-location-buttons">
			<li class="wpcm-custom-buttom" ><a href="javascript:wpcm_modal_contact_open();"><i class="fab fa-whatsapp"></i> WhatsApp</a></li>
			<li class="wpcm-custom-buttom" ><a target="_black" href="mailto:<?php echo $email; ?>" ><i class="fas fa-envelope"></i> E-mail</a></li>
			<li class="wpcm-custom-buttom" ><a target="_black" href="<?php echo $location; ?>" ><i class="fas fa-map-marker-alt"></i> Localização</a></li>
		</ul>		 
	</div>
</div>
<!--Contact Modal-->
<div id="id01" class="modal">
	<div class="modal-content">
		<span onclick="wpcm_modal_contact_close();" class="close">&times;</span>
		<div class="wpcm-modal-header">
			<h2><?php _e('Ligue-nos', 'wp-car-manager') ?></h2>
		</div>
		<div class="w3-container">
			<?php if( ! empty($phone_number) ):?> 
			<div class="wpcm-rtk-modal-control">
				<div class="wpcm-contact-telefones">
					<?php _e( '<span><strong>Vendedor 1: </strong>' . $phone_number . '</span>', 'wp-car-manager' ); ?>
				</div>
				<div class="wpcm-contact-buttons">
					<a class="wpcm-buttom-ligar" href="tel:<?php echo $phone_number; ?>"><i class="fas fa-phone"></i> LIGAR</a>
					<a class="wpcm-buttom-whats" href="tel:<?php echo $whatsapp; ?>"><i class="fab fa-whatsapp"></i> WhatsApp</a>							
				</div>
			</div>
			<?php endif; if( ! empty($phone_number2)):?>
			<div class="wpcm-rtk-modal-control">
				<div class="wpcm-contact-telefones">
					<?php _e( '<span><strong>Vendedor 2: </strong>' . $phone_number2 . '</span>', 'wp-car-manager' ); ?>
				</div>
				<div class="wpcm-contact-buttons">
					<a class="wpcm-buttom-ligar" href="tel:<?php echo $phone_number2; ?>"><i class="fas fa-phone"></i> LIGAR</a>
					<a class="wpcm-buttom-whats" href="tel:<?php echo $whatsapp; ?>"><i class="fab fa-whatsapp"></i> WhatsApp</a>							
				</div>
			</div>
			<?php endif; if( ! empty($phone_number3)):?>
			<div class="wpcm-rtk-modal-control">
				<div class="wpcm-contact-telefones">
					<?php _e( '<span><strong>Vendedor 3: </strong>' . $phone_number3 . '</span>', 'wp-car-manager' ); ?>
				</div>
				<div class="wpcm-contact-buttons">
					<a class="wpcm-buttom-ligar" href="tel:<?php echo $phone_number3; ?>"><i class="fas fa-phone"></i> LIGAR</a>
					<a class="wpcm-buttom-whats" href="tel:<?php echo $whatsapp; ?>"><i class="fab fa-whatsapp"></i> WhatsApp</a>							
				</div>
			</div>
			<?php endif; ?>
		</div>
	</div>
</div>
<!--Script teste (Remover)-->
<script>
	function wpcm_modal_contact_open() {
		document.getElementById('id01').style.display='block';
	}
	function wpcm_modal_contact_close() {
		document.getElementById('id01').style.display='none'
	}
</script>
