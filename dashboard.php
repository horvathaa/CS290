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

</div>


<div class="section">
	<h1><a href="results.php">Find Housing</a></h1>
	<br>
	
	<h1><a href="offerHousing.php">Post House</a></h1>
	<br>
	<?php
				ini_set('display_errors', 'On');
				$servername = "oniddb.cws.oregonstate.edu";
				$username = "horvatha-db";
				$password = "4xunHq7hNuAmTgFb";
				$dbName = "horvatha-db";
				$conn = new mysqli($servername, $username, $password, $dbName);
						 
						 # dont understand this part
						 if ($result = $conn->query("SELECT firstName, lastName, phone, Gender, major, age, schYear, relationshipStatus, bio FROM User_T WHERE UserID=1483")) { #NEED TO CHANGE USER ID TO MATCH WITH SOMEONE WHO IS LOGGED IN
							while($obj = $result->fetch_object()){  
							#display photo first
									#echo .htmlspecialchars($obj->photo).;
									#echo "<br>";
							#display information
									echo "<p>".htmlspecialchars($obj->firstName)."</p>"; 
									echo "<p>".htmlspecialchars($obj->lastName)."</p>"; 
									echo "<p>".htmlspecialchars($obj->phone)."</p>"; 
									echo "<p>".htmlspecialchars($obj->Gender)."</p>"; 
									echo "<p>".htmlspecialchars($obj->major)."</p>"; 
									echo "<p>".htmlspecialchars($obj->age)."</p>"; 
									echo "<p>".htmlspecialchars($obj->schYear)."</p>"; 
									echo "<p>".htmlspecialchars($obj->relationshipStatus)."</p>"; 
									echo "<br>";
									echo "<p>".htmlspecialchars($obj->bio)."</p>";
									echo "<br>";
							} 

						$result->close();
						} 


		?>
	</data>
	<p>London is the capital city of England. It is the most populous city in the United Kingdom,
	with a metropolitan area of over 13 million inhabitants.</p>
	<p>Standing on the River Thames, London has been a major settlement for two millennia,
	its history going back to its founding by the Romans, who named it Londinium.</p>
</div>



</body>

<?php } ?>