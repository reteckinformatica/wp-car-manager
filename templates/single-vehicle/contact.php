<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
} // Exit if accessed directly

?>
<div class="wpcm-contact">
	<h3>Fale com o vendedor</h3>
	<?php if( ! empty($phone_number) || ! empty($phone_number2) || ! empty($phone_number3)):?>
	<div class="wpcm-contact-buttons wpcm-contact-col-3 wpcm-ligue-nos">
		<a href="javascript:wpcm_modal_contact_open();"><i class="fas fa-phone"></i> <?php _e( ' Ligue-nos', 'wp-car-manager' ); ?> </a>
	</div>
	<?php endif; if( ! empty($email)):?>
	<div class="wpcm-contact-buttons wpcm-contact-col-3 wpcm-email">
		<a target="_black" href="mailto:<?php echo $email; ?>" ><i class="fas fa-envelope"></i> <?php _e( 'E-mail', 'wp-car-manager' ); ?> </a>
	</div>
	<?php endif; if( ! empty($location)): ?>
	<div class="wpcm-contact-buttons wpcm-contact-col-3 wpcm-location">
		<a target="_black" href="<?php echo $location; ?>" ><i class="fas fa-map-marker-alt"></i> <?php _e( 'Localização', 'wp-car-manager' ) ?> </a>
	</div>
	<?php endif; if( ! empty($whatsapp)): ?>
		<div class="wpcm-contact-buttons wpcm-contact-col-1 wpcm-whatsapp">
			<a href="javascript:wpcm_modal_whats_open();"><i class="fab fa-whatsapp"></i> WhatsApp</a>
		</div>
	<?php endif; ?>
</div>


<!--Contact Modal WhatsApp-->
<div id="wpcm-modal-whats" class="modal">
	<div class="wpcm-modal-whats-content">
		<span onclick="wpcm_modal_whats_close();" class="close">&times;</span>
		<div class="wpcm-modal-header">
			<h2><?php _e('Fale conosco', 'wp-car-manager') ?></h2>
		</div>
		<div class="wpcm-modal-whats-container">
			<form method="post" action="">
				<div class="wpcm-form-control">
					<label>O que você deseja?</label>
				</div>
				<div class="wpcm-form-control">				
					<select id="selecionar" name="wpcm-contact-type">
						<option>Selecione a resposta</option>
						<option data-section="Comprar" value="Comprar" >Comprar</option>
						<option data-section="Trocar" value="Trocar" >Trocar</option>
					</select>
				</div>										
				<div class="wpcm-form-control">
					<input type="text" name="wpcm_name_cliente" placeholder="Seu nome completo" required>
				</div>			
				<div class="wpcm-form-control">
					<select name="wpcm_payment_method"> 
						<option>Forma de pagamento</option>
						<option value="À Vista">À Vista</option>
						<option value="Preciso Financiar">Preciso Financiar</option>
					</select>
				</div>								
				<div data-name="Trocar" class="wpcm-form-control wpcm-hide">
					<label><?php _e('Preencha abaixo as informações do veículo que quer dar na troca:','wp-car-manager'); ?></label>
				</div>			
				<div data-name="Trocar" class="wpcm-form-control wpcm-hide">
					<input type="text" name="wpcm-marca" placeholder="Marca">
				</div>
				<div data-name="Trocar" class="wpcm-form-control wpcm-hide"> 
					<input type="text" name="wpcm-modelo" placeholder="Modelo">
				</div>
				<div data-name="Trocar" class="wpcm-form-control wpcm-hide"> 
					<input type="text" name="wpcm-versao" placeholder="Versão">
				</div>
				<div data-name="Trocar" class="wpcm-form-control wpcm-hide"> 
					<input type="text" name="wpcm-ano" placeholder="Ano">
				</div>
				<div data-name="Trocar" class="wpcm-form-control wpcm-hide"> 
					<input type="text" name="wpcm-km-atual" placeholder="KM Atual">
				</div>								
				<div class="wpcm-form-control">
					<button type="submit" name="wpcm-send-mgs">Enviar mensagem</button>	
				</div>
			</form>
		</div>
	</div>
</div>

<?php
      
	if(isset($_POST['wpcm-send-mgs'])){
		if(isset($_POST['wpcm-contact-type']) && $_POST['wpcm-contact-type'] == 'Comprar'){		
			$nome         = $_POST['wpcm_name_cliente'];
			$payment	  = $_POST['wpcm_payment_method'];

			$textzap = "Olá, sou " . $nome . ". | Vi seu anúncio no site " . get_site_url() . ". | Gostaria de comprar o veículo " . get_permalink() . ". | Forma de pagamento: " . $payment;
			$rtk_send_msg = str_replace(' ', '%20', str_replace('|','%0A', $textzap));
		}

		if(isset($_POST['wpcm-contact-type']) && $_POST['wpcm-contact-type'] ==  'Trocar'){
			$nome         = $_POST['wpcm_name_cliente'];
			$payment	  = $_POST['wpcm_payment_method'];
			$marca = $_POST['wpcm-marca'];
			$modelo = $_POST['wpcm-modelo'];
			$versao = $_POST['wpcm-versao'];
			$ano = $_POST['wpcm-ano'];
			$km_atual = $_POST['wpcm-km-atual'];
			

			$textzap = "Olá, sou " . $nome . ". | Vi seu anúncio no site " . get_site_url() . ". | Gostaria de trocar meu veículo | " . $marca . "|" . $modelo . "|" . $versao . "|" . $ano . "|" .$km_atual ." rodados, pelo seu " . get_permalink() . ". | Forma de pagamento: " . $payment;
			$rtk_send_msg = str_replace(' ', '%20', str_replace('|','%0A', $textzap));
		}

		$url =  "https://api.whatsapp.com/send?1=pt_BR&phone=$whatsapp&text=$rtk_send_msg";

	?>
		<script>	window.self.location.replace("<?php echo $url; ?>"); </script>
	<?php
	}

?>










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
					<?php _e( '<span><strong>Telefone 1: </strong>' . $phone_number . '</span>', 'wp-car-manager' ); ?>
				</div>
				<div class="wpcm-buttom-ligar">
					<a href="tel:<?php echo $phone_number; ?>"><i class="fas fa-phone"></i> LIGAR</a>
				</div>
			</div>
			<?php endif; if( ! empty($phone_number2)):?>
			<div class="wpcm-rtk-modal-control">
				<div class="wpcm-contact-telefones">
					<?php _e( '<span><strong>Telefone 2: </strong>' . $phone_number2 . '</span>', 'wp-car-manager' ); ?>
				</div>
				<div class="wpcm-buttom-ligar">
					<a href="tel:<?php echo $phone_number2; ?>"><i class="fas fa-phone"></i> LIGAR</a>			
				</div>
			</div>
			<?php endif; if( ! empty($phone_number3)):?>
			<div class="wpcm-rtk-modal-control">
				<div class="wpcm-contact-telefones">
					<?php _e( '<span><strong>Telefone 3: </strong>' . $phone_number3 . '</span>', 'wp-car-manager' ); ?>
				</div>
				<div class="wpcm-buttom-ligar">
					<a href="tel:<?php echo $phone_number3; ?>"><i class="fas fa-phone"></i> LIGAR</a>
				</div>
			</div>
			<?php endif; ?>
		</div>
	</div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>


<!--Script teste (Remover)-->
<script>

	function wpcm_modal_contact_open() {
		document.getElementById('id01').style.display='block';
	}
	function wpcm_modal_contact_close() {
		document.getElementById('id01').style.display='none'
	}

	function wpcm_modal_whats_open() {
		document.getElementById('wpcm-modal-whats').style.display='block';
	}
	function wpcm_modal_whats_close() {
		document.getElementById('wpcm-modal-whats').style.display='none'
	}


	$("#selecionar").change(function() {
    var $this, secao, atual, campos;
  
    campos = $("div[data-name]");
    
    campos.addClass("wpcm-hide");

    if (this.value !== "") {
        secao = $('option[data-section][value="' + this.value + '"]', this).attr("data-section");
      
        atual = campos.filter("[data-name=" + secao + "]");
      
        if (atual.length !== 0) {
            atual.removeClass("wpcm-hide");
        }
    }
});

</script>
