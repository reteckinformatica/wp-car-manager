<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit;
} // Exit if accessed directly

?>
<!--Update by Reteck-->
<div class="wpcm-rtk-wrap-images wpcm-rom">
	<div class="center">
		<?php do_action( 'wpcm_vehicle_thumbnails', $vehicle ); ?>
	</div>	
</div>

<script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

<script type="text/javascript"> 
  $('.center').slick({
  centerMode: true,
  arrows: true,
  prevArrow: '<div class="slick-prev-1"><i class="fa fa-angle-left" aria-hidden="true"></i></div>',
  nextArrow: '<div class="slick-next-1"><i class="fa fa-angle-right" aria-hidden="true"></i></div>',
  centerPadding: '60px',
  slidesToShow: 3,
  responsive: [
    {
      breakpoint: 768,
      settings: {
        arrows: true,
        centerMode: false,
        centerPadding: '40px',
        slidesToShow: 2
      }
    },
    {
      breakpoint: 480,
      settings: {
        arrows: false,
        centerMode: false,
        centerPadding: '40px',
        slidesToShow: 1
      }
    }
  ]
});
</script>