<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit;
} // Exit if accessed directly

?>
<!--Update by Reteck-->
<div class="slider-imagens-vehicles">
  <?php do_action( 'wpcm_vehicle_thumbnails', $vehicle ); ?>
</div>	
<!--Show Slider Imagens Vehicle-->
<script type="text/javascript"> 
  $('.slider-imagens-vehicles').slick({
  centerMode: true,
  arrows: true,
  prevArrow: '<div class="wpcm-rtk-left slick-prev-next"><i class="fa fa-angle-left"></i></div>',
  nextArrow: '<div class="wpcm-rtk-right slick-prev-next"><i class="fa fa-angle-right"></i></div>',
  centerPadding: '0px',
  slidesToShow: 3,
  responsive: [
    {
      breakpoint: 960,
      settings: {
        arrows: true,        
        centerMode: false,
        centerPadding: '40px',
        slidesToShow: 2
      }
    },
    {
      breakpoint: 768,
      settings: {
        arrows: true,
        centerMode: false,
        centerPadding: '40px',
        slidesToShow: 1
      }
    }
  ]
});
</script>