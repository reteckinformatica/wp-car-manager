<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
} // Exit if accessed directly

global $vehicle;
?>
<div class="wpcm-content-block">
	<h2><?php _e( 'Vehicle Description', 'wp-car-manager' ); ?></h2>
	<?php the_content(); ?>
</div>
