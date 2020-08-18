<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
} // Exit if accessed directly

?>
<div class="wpcm-contact">
	<h3>Fale com o vendedor</h3>
	<div class="wpcm-rtk-wrap-form">
		<form method="post" action="">
			<input name="cli_name" class="wpcm-rtk-form-control" type="text" placeholder="Nome"/>
			<input name="cli_email" class="wpcm-rtk-form-control" type="email" placeholder="E-mail"/>
			<input name="cli_phone" class="wpcm-rtk-form-control" type="text" placeholder="Telefone"/>
			<textarea name="cli_mesage" class="wpcm-rtk-form-control wpcm-rtk-textarea" placeholder="Mensagem"></textarea>
			<input id="btn_rtk" name="btn_submit_msg" class="wpcm-button" type="submit" value="ENVIAR MENSAGEM" />
		</form>
	</div>	
	<?php			
		if(isset($_POST['btn_submit_msg'])){ 
			$nome         = $_POST['cli_name'];
			$email        = $_POST['cli_email'];
			$cli_phone    = $_POST['cli_phone'];
			$msgtext      = $_POST['cli_mesage'];
			$rtk_origen   = " Esta mensagem foi envida de: " . get_site_url();
		
			$textzap = "Cliente: " . $nome . ", E-mail: " . $email  . ", Telefone: " . $cli_phone . ", Mensagem: " . $msgtext . "," . $rtk_origen;
			$rtk_send_msg = str_replace(' ', '%20', str_replace(',','%0A', $textzap));

			if ( '' !== $phone_number && apply_filters( 'wpcm_contact_phone_link', true ) ) :
			
				$phoneset= 	esc_attr( $phone_number ); 
		   
			endif; 

			$wpcm_url_add = "https://api.whatsapp.com/send?1=pt_BR&phone=$phoneset&text=$rtk_send_msg";
		
			?>
			<script type="text/javascript">
				var get_url_whats = "<?php echo $wpcm_url_add;?>";
				var win = window.open(get_url_whats, "_blank");
				if (win) {
					//Browser has allowed it to be opened
					win.focus();
				} else {
					//Browser has blocked it
					alert('Por favor libere popups para este site!');
				}
			</script>
			<?php
	 	} 
	 ?>	
</div>