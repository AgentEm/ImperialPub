<!DOCTYPE html>
<!--[if lt IE 7]> <html class="no-js ie6 oldie" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head> 
	<?php // Load Meta ?>
  <meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
  
  <title><?php  wp_title( '| ', true, 'right' );  ?></title>
  <?php // Load our CSS ?>
  <link rel="stylesheet" type="text/css"  href="<?php bloginfo( 'stylesheet_url' ); ?>" />
  <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_directory');?>/mq.css">
  
	<?php	if ( is_singular() && get_option( 'thread_comments' ) ) wp_enqueue_script( 'comment-reply' ); wp_head(); ?>

	<!--[if lt IE 9]> <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script> <![endif]-->

  <!-- Load jQuery and our own scripts file -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script>!window.jQuery && document.write('<script src="<?php bloginfo('template_directory');?>/js/jQuery.js"><\/script>')</script>
	<script src="<?php bloginfo('stylesheet_directory');?>/js/scripts.js"></script>
  <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory');?>/js/FlexSlider/flexslider.css" type="text/css">
  <script src="<?php bloginfo('stylesheet_directory');?>/js/FlexSlider/jquery.flexslider.js"></script>
  <!-- change the api key! --> <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB7iW34C8RU6mlSGN4dGcmwysYUtN34zPY&sensor=false"></script>
  <script type="text/javascript">
      google.maps.event.addDomListener(window, 'load', init);

      function init() {
          var myLatLng = new google.maps.LatLng(43.656245, -79.37882);
          var mapOptions = {
              zoom: 15,
              center: myLatLng,
              mapTypeControl: true,
              mapTypeControlOptions: {
                style: google.maps.MapTypeControlStyle.HORIZONTAL_BAR
              },
              scaleControl: true,
              zoomControl: true,
              zoomControlOptions: {
                style: google.maps.ZoomControlStyle.DEFAULT,
              },
              styles: [{stylers:[{saturation:-100},{gamma:1}]},{elementType:"labels.text.stroke",stylers:[{visibility:"on"}]},{featureType:"poi.business",elementType:"labels.text",stylers:[{visibility:"off"}]},{featureType:"poi.business",elementType:"labels.icon",stylers:[{visibility:"off"}]},{featureType:"poi.place_of_worship",elementType:"labels.text",stylers:[{visibility:"off"}]},{featureType:"poi.place_of_worship",elementType:"labels.icon",stylers:[{visibility:"off"}]},{featureType:"road",elementType:"geometry",stylers:[{visibility:"simplified"}]},{featureType:"water",stylers:[{visibility:"on"},{saturation:50},{gamma:0},{hue:"#50a5d1"}]},{featureType:"administrative.neighborhood",elementType:"labels.text.fill",stylers:[{color:"#333333"}]},{featureType:"road.local",elementType:"labels.text",stylers:[{weight:0.5},{color:"#333333"}]},{featureType:"transit.station",elementType:"labels.icon",stylers:[{gamma:1},{saturation:50}]}]
          };

          // Get the HTML DOM element that will contain your map
          var mapElement = document.getElementById('map');

          // Create the Google Map using our element and options defined above
          var map = new google.maps.Map(mapElement, mapOptions);
          
          //Adding an infobox on click of beer icon
          var contentString = '<div id="mapInfoContainer" style="width:200px; text-align:center; padding:1%">' + '<h3>The Imperial Pub</h3>' +
          '<p>54 Dundas Street East</p>' + '<p>Toronto, ON M5B 1C7</p>' + '416-977-4667' + '</div>'
          var infowindow = new google.maps.InfoWindow({
            content: contentString,
          });

          //creating marker at myLatLng
          var marker = new google.maps.Marker({
                position: myLatLng,
                map: map,
                title:"The Imperial Pub",
                icon:"<?php echo get_template_directory_uri(); ?>/images/beer.png",
                animation: google.maps.Animation.BOUNCE
            });

          google.maps.event.addListener(marker, "click", function(){
            infowindow.open(map,marker);
          });
      }

  </script>
  <link href="//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
  <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
  <link href='http://fonts.googleapis.com/css?family=Great+Vibes' rel='stylesheet' type='text/css'>
</head>


<body <?php body_class(); ?>>

<div class="header">
  <div class="innerWrapper">
  <img class="crown" src="<?php echo get_template_directory_uri(); ?>/images/crown.svg">
    <h1>
      <a href="<?php echo home_url( '/' ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
        <?php bloginfo( 'name' ); ?>
      </a>
    </h1>
    <?php wp_nav_menu( array( 'container' => false, 'menu' => 'header' ) ); ?>

  </div> <!-- /.innerWrapper -->
</div><!--/.header-->

