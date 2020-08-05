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
			<button name="btn_submit_msg" class="wpcm-button" type="submit">ENVIAR MENSAGEM</button>
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
			
		?>
		<script type="text/javascript">
			window.self.location.replace("<?php echo 'https://wa.me/' . esc_attr( $phone_number ) . '?text=' . $rtk_send_msg; ?>");
		</script>
	<?php } ?>	
</div>