<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
} // Exit if accessed directly

?>
<div class="wpcm-contact">

	<?php
	if ( '' != $email && apply_filters( 'wpcm_contact_email_link', true ) ) :
		?>
		<a href="mailto:<?php echo antispambot( $email ); ?>?subject=<?php the_title(); ?>"
		   class="wpcm-button wpcm-contact-button"><?php _e( 'Ver o local do veículo', 'wp-car-manager' ); ?></a>
	<?php endif; ?>
	
	<?php
	if ( '' !== $phone_number && apply_filters( 'wpcm_contact_phone_link', true ) ) :
		?>
		<a target="_blank" href="https://wa.me/<?php echo esc_attr( $phone_number ); ?>?text=Ol%C3%A1%2C%20gostaria%20de%20receber%20mais%20informa%C3%A7%C3%B5es%20sobre%20o%20seguinte%20ve%C3%ADculo%20que%20encontrei%20no%20site%20queroacelerar%20<?php the_permalink(); ?>"
		   class="wpcm-button wpcm-contact-button"><?php _e( '✆ Fale com o vendedor no whatsapp', 'wp-car-manager' ); ?></a>
	<?php endif; ?>

</div>