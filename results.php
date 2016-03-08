<?php include("_header.php"); ?>
<html>
<head>
	<title>Results</title>
	<style type="text/css">
      html, body { height: 100%; margin: 0; padding: 0; }
	  #map {height: 50%; width: 50%}
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
		  /*var marker = new google.maps.Marker({
			position: {lat: 44.5636695, lng: -123.2690657},
			map: map
		  });*/
		} 
		/* function geocodeAddress(geocoder, resultsMap, address) {
			//need to get from db
			geocoder.geocode({'address':address}, function(results, status) {
			if (status === google.maps.GeocoderStatus.OK) {
			  resultsMap.setCenter(results[0].geometry.location);
			  var marker = new google.maps.Marker({
				map: resultsMap,
				position: results[0].geometry.location
			  });
			} else {
			  alert('Geocode was not successful for the following reason: ' + status);
			}
			});
		}; */
		var req = new XMLHttpRequest();
		req.onload = function(){
			var addresses = JSON.parse(req.responseText);// <?php echo json_encode($array) ?>;
			console.log(addresses);
			var i = 0;
			for(i=0; i<addresses.length; i++){
				//geocodeAddress(geocoder, resultMap, addresses[i]);
				function geocodeAddress(geocoder, resultsMap) {
					//need to get from db
					geocoder.geocode({'address':addresses[i]}, function(results, status) {
					if (status === google.maps.GeocoderStatus.OK) {
					  resultsMap.setCenter(results[0].geometry.location);
					  var marker = new google.maps.Marker({
						map: resultsMap,
						position: results[0].geometry.location
					  });
					} else {
					  alert('Geocode was not successful for the following reason: ' + status);
					}
					});
				};
			}	
		};
			
		req.open("get", "serverSideResults.php", true);
		req.send();
    </script>
    <script async defer
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAkSZC-s7UaaBYVPmvMC_F7CPuHzZ7SQIU&callback=initMap">
    </script>
	
<div id="searchData" >
	<h1>Housing data</h1>

		<?php
				ini_set('display_errors', 'On');
				$servername = "oniddb.cws.oregonstate.edu";
				$username = "horvatha-db";
				$password = "4xunHq7hNuAmTgFb";
				$dbName = "horvatha-db";
				$conn = new mysqli($servername, $username, $password, $dbName);
				if ($result = $conn->query("select Reason,HousingType,roomAmount,Address,Rent from House_T")) {
					while($obj = $result->fetch_object()){ 
						
							echo "<p>".htmlspecialchars($obj->Reason)." ".htmlspecialchars($obj->HousingType)."</p>";
							echo "<p>".htmlspecialchars($obj->Address)."</p>";
							echo "<p>".htmlspecialchars($obj->roomAmount)." rooms</p>";
							echo "<p>$".htmlspecialchars($obj->Rent)." / month</p>";
							echo "<hr>";
					} 

					$result->close();
				}
				echo "</table>"; 


		?>
</data>



<?php include '_footer.php' ?>

</body>
</html>
