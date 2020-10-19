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
    <h4><?php _e( 'WhatsApp','wpcm-car-manager' ); ?></h4>
    <!--WhatsApp 01-->
    <li id="wpcm-dashboard-profile-field-whatsapp-name">
        <label>
            <span class="wpcm-dashboard-profile-label">Nome vendedor 01</span><!--Update by Reteck-->
            <span class="wpcm-dashboard-profile-value" data-key="whatsapp_name"></span>
        </label>
    </li>
    <li id="wpcm-dashboard-profile-field-whatsapp-01">
        <label>
            <span class="wpcm-dashboard-profile-label">WhatsApp vendedor 01</span><!--Update by Reteck-->
            <span class="wpcm-dashboard-profile-value" data-key="whatsapp_01"></span>
        </label>
    </li>
    <!--Vendedor 02-->    
    <li id="wpcm-dashboard-profile-field-whatsapp-name-02">
        <label>
            <span class="wpcm-dashboard-profile-label">Nome vendedor 02</span><!--Update by Reteck-->
            <span class="wpcm-dashboard-profile-value" data-key="whatsapp_name_02"></span>
        </label>
    </li>              
    <li id="wpcm-dashboard-profile-field-whatsapp-02">
        <label>
            <span class="wpcm-dashboard-profile-label">WhatsApp vendedor 02</span><!--Update by Reteck-->
            <span class="wpcm-dashboard-profile-value" data-key="whatsapp_02"></span>
        </label>
    </li>
    <!--Vendedor 03-->
    <li id="wpcm-dashboard-profile-field-whatsapp-name-03">
        <label>
            <span class="wpcm-dashboard-profile-label">Nome vendedor 03</span><!--Update by Reteck-->
            <span class="wpcm-dashboard-profile-value" data-key="whatsapp_name_03"></span>
        </label>
    </li>
    <li id="wpcm-dashboard-profile-field-whatsapp-03">
        <label>
            <span class="wpcm-dashboard-profile-label">WhatsApp vendedor 03</span><!--Update by Reteck-->
            <span class="wpcm-dashboard-profile-value" data-key="whatsapp_03"></span>
        </label>
    </li>
    <h4><?php _e( 'Telefones','wpcm-car-manager' ); ?></h4>
    <!--Phone 01-->
    <li id="wpcm-dashboard-profile-field-phone-name">
        <label>
            <span class="wpcm-dashboard-profile-label">Nome vendedor 01</span><!--Update by Reteck-->
            <span class="wpcm-dashboard-profile-value" data-key="phone_name"></span>
        </label>
    </li>    
    <li id="wpcm-dashboard-profile-field-phone">
        <label>
            <span class="wpcm-dashboard-profile-label">Telefone vendedor 01</span><!--Update by Reteck-->
            <span class="wpcm-dashboard-profile-value" data-key="phone"></span>
        </label>
    </li>
    <!--Phone 02-->
    <li id="wpcm-dashboard-profile-field-phone-name-02">
        <label>
            <span class="wpcm-dashboard-profile-label">Nome vendedor 02</span><!--Update by Reteck-->
            <span class="wpcm-dashboard-profile-value" data-key="phone_name_02"></span>
        </label>
    </li>    
    <li id="wpcm-dashboard-profile-field-phone-02">
        <label>
            <span class="wpcm-dashboard-profile-label">Telefone vendedor 02</span><!--Update by Reteck-->
            <span class="wpcm-dashboard-profile-value" data-key="phone_02"></span>
        </label>
    </li>
</ul>
<div class="wpcm-dashboard-plan">
    <h4><?php _e( 'Plano','wp-car-manager' ) ?></h4>
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