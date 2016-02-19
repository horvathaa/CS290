<?php include("_header.php"); ?>
<html>
<head>
	<title>Results</title>
	<style type="text/css">
      html, body { height: 100%; margin: 0; padding: 0; }
      #map { height: 50%; width: 50%; }
    </style>

</head>
<body>

	<div id="map"></div>
	<script type="text/javascript">

		var map;
		function initMap() {
		  map = new google.maps.Map(document.getElementById('map'), {
			center: {lat: 44.5647222, lng: -123.2608333},
			zoom: 13,
			 styles: [{
			  featureType: 'poi',
			  stylers: [{ visibility: 'off' }]  // Turn off points of interest.
			}, {
			  featureType: 'transit.station',
			  stylers: [{ visibility: 'off' }]  // Turn off bus stations, train stations, etc.
			}],
			disableDoubleClickZoom: true
		  });
		  var marker = new google.maps.Marker({
			position: {lat: 44.5636695, lng: -123.2690657},
			map: map,
			title: 'Hello World!'
		  });
		}

    </script>
    <script async defer
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAkSZC-s7UaaBYVPmvMC_F7CPuHzZ7SQIU&callback=initMap">
    </script>

</body>
</html>
