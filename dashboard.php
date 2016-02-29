<?php include("_header.php"); ?>
<?php
	if(checkAuth(true) != "") {
?>
<style>

.leftcol {
    width: 33%;
    height: auto;
    float:left;
 }
 .section {
    width: 55%;
    float:left;
    padding:10px; 
}


</style>

<body bgcolor="#F7A810">

<h1 style="float: center;">Welcome to Your Hom-E Dashboard</h1>


<div class="leftcol">
    <div id="data" >
	<h1>Housing data</h1>

		<?php
				ini_set('display_errors', 'On');
				$servername = "oniddb.cws.oregonstate.edu";
				$username = "horvatha-db";
				$password = "4xunHq7hNuAmTgFb";
				$dbName = "horvatha-db";
				$conn = new mysqli($servername, $username, $password, $dbName);
						 
						 # dont understand this part
						if ($result = $conn->query("firstname, lastname, phone, gender, photo, major, age, schYear, relations, bio")) {
							while($obj = $result->fetch_object()){ 
							#display photo first
									echo .htmlspecialchars($obj->photo).;
									echo "<br>"
							#display information
									echo .htmlspecialchars($obj->firstname).; 
									echo .htmlspecialchars($obj->lastname).; 
									echo .htmlspecialchars($obj->phone).; 
									echo .htmlspecialchars($obj->gender).; 
									echo .htmlspecialchars($obj->major).; 
									echo .htmlspecialchars($obj->age).; 
									echo .htmlspecialchars($obj->schYear).; 
									echo .htmlspecialchars($obj->relations).; 
									echo "<br>"
									echo .htmlspecialchars($obj->bio).
									echo "<br>"
							} 

						$result->close();
						}


		?>
		
</data>
</div>


<div class="section">
	<h1><a href="results.php">Find Housing</a></h1>
	<br>
	
	<h1><a href="offerHousing.php">Post House</a></h1>
	<br>
	
	
	<p>London is the capital city of England. It is the most populous city in the United Kingdom,
	with a metropolitan area of over 13 million inhabitants.</p>
	<p>Standing on the River Thames, London has been a major settlement for two millennia,
	its history going back to its founding by the Romans, who named it Londinium.</p>
</div>



</body>

<?php } ?>