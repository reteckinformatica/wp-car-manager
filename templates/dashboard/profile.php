<ul class="wpcm-dashboard-profile-fields">
    <li id="wpcm-dashboard-profile-field-email">
        <label>
            <span class="wpcm-dashboard-profile-label">E-mail</span><!--Update by Reteck-->
            <span class="wpcm-dashboard-profile-value" data-key="email"></span>
        </label>
    </li>
    <li id="wpcm-dashboard-profile-field-location">
        <label>
            <span class="wpcm-dashboard-profile-label">Localização da loja (URL)</span><!--Update by Reteck-->
            <span class="wpcm-dashboard-profile-value" data-key="location"></span>
        </label>
    </li>
    <li id="wpcm-dashboard-profile-field-whatsapp">
        <label>
            <span class="wpcm-dashboard-profile-label">WhatsApp</span><!--Update by Reteck-->
            <span class="wpcm-dashboard-profile-value" data-key="whatsapp"></span>
        </label>
    </li>          
    <li id="wpcm-dashboard-profile-field-phone">
        <label>
            <span class="wpcm-dashboard-profile-label">Telefone</span><!--Update by Reteck-->
            <span class="wpcm-dashboard-profile-value" data-key="phone"></span>
        </label>
    </li>
    <li id="wpcm-dashboard-profile-field-phone2">
        <label>
            <span class="wpcm-dashboard-profile-label">Telefone 2</span><!--Update by Reteck-->
            <span class="wpcm-dashboard-profile-value" data-key="phone2"></span>
        </label>
    </li>
    <li id="wpcm-dashboard-profile-field-phone3">
        <label>
            <span class="wpcm-dashboard-profile-label">Telefone 3</span><!--Update by Reteck-->
            <span class="wpcm-dashboard-profile-value" data-key="phone3"></span>
        </label>
    </li>          
</ul>
<div class="wpcm-dashboard-plan">
    <h2><?php _e( 'Plano','wp-car-manager' ) ?></h2>
    <?php 
        //variables
        $wpcm_vehicles  = count_user_posts(get_current_user_id(),'wpcm_vehicle');
        $maxposts       = get_user_meta(get_current_user_id(), 'userMeta_max_posts', true);
        $max_photos     = get_user_meta(get_current_user_id(), 'userMeta_max_photos_upload', true);
        
    ?>
    <ul class="wpcm-listing-plan">
        <li>Maximo de fotos: <?php echo $max_photos; ?></li>
        <li>Maximo de anúncios: <?php echo $maxposts; ?></li>
    </ul>
</div>