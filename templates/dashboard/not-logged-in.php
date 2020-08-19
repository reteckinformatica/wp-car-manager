<!--Upadate by Reteck-->
<div class="wpcm-wrap-page">
    <div class="wpcm-not-logged-in">
        <p><?php _e( 'Please sign in to view your car listings', 'wp-car-manager');?></p>
        <a href="<?php echo apply_filters( 'wpcm_submit_car_form_account_login_url', wp_login_url( get_permalink() ) ); ?>">FAZER LOGIN</a>
    </div>
</div>