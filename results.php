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
	
<div id="data" >
	<h1>Housing data</h1>

		<?php
				ini_set('display_errors', 'On');
				$servername = "oniddb.cws.oregonstate.edu";
				$username = "horvatha-db";
				$password = "4xunHq7hNuAmTgFb";
				$dbName = "horvatha-db";
				$conn = new mysqli($servername, $username, $password, $dbName);

				echo "<table class='housing'><tr><th>Reason<th>HousingType<th>RoomAmount<th>Address<th>Rent<th>Until.Cost<th>AvailDate<th>LeaseLenght<th>Rules</tr>";
						if ($result = $conn->query("select Reason,HousingType,roomAmount,Address,Rent,untilCost,availDate,leaseLength,rules from House_T")) {
							while($obj = $result->fetch_object()){ 
									echo "<tr>";
									echo "<td>".htmlspecialchars($obj->Reason)."</td>"; 
									echo "<td>".htmlspecialchars($obj->HousingType)."</td>"; 
									echo "<td>".htmlspecialchars($obj->roomAmount)."</td>"; 
									echo "<td>".htmlspecialchars($obj->Address)."</td>"; 
									echo "<td>".htmlspecialchars($obj->Rent)."</td>"; 
									echo "<td>".htmlspecialchars($obj->untilCost)."</td>"; 
									echo "<td>".htmlspecialchars($obj->availDate)."</td>"; 
									echo "<td>".htmlspecialchars($obj->leaseLength)."</td>"; 
									echo "<td>".htmlspecialchars($obj->rules)."</td>"; 
									echo "</tr>";
							} 

						$result->close();
						}
				echo "</table>"; 


		?>
</data>



<?php include '_footer.php' ?>

</body>
</html>
