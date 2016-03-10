<?php session_start(); 
      include("_header.php"); ?>
<?php
	if(checkAuth(true) != "") {
?>
<style>

.leftcol {
    width: 33%;
    height: auto;
    float:left;
 }
 .sectiona {
    width: 45%;
    float:left;
    padding:10px; 
}
.sectionb{
	width: 45%;
	float: right;
	padding: 10px;
}


</style>

<body bgcolor="#F7A810">

<h1 style="float: center;">Welcome to Your Hom-E Dashboard</h1>


<div class="sectiona">
	<?php
	            ini_set('display_errors', 'On');
				$servername = "oniddb.cws.oregonstate.edu";
				$username = "horvatha-db";
				$password = "4xunHq7hNuAmTgFb";
				$dbName = "horvatha-db";
				$ONID = $_SESSION["onidid"];
				$conn = new mysqli($servername, $username, $password, $dbName);
						 if ($result = $conn->query("SELECT firstName, lastName, phone, Gender, major, age, schYear, relationshipStatus, bio FROM User_T WHERE ONID='$ONID'")) { #NEED TO CHANGE USER ID TO MATCH WITH SOMEONE WHO IS LOGGED IN
							while($obj = $result->fetch_object()){  
							#display information
									echo "<h3>Name: ".htmlspecialchars($obj->firstName)." ".htmlspecialchars($obj->lastName)."</h3>"; 
									echo "<h3>Phone: ".htmlspecialchars($obj->phone)."</h3>"; 
									echo "<h3>Gender: ".htmlspecialchars($obj->Gender)."</h3>"; 
									echo "<h3>Major: ".htmlspecialchars($obj->major)."</h3>"; 
									echo "<h3>Age: ".htmlspecialchars($obj->age)."</h3>"; 
									echo "<h3>Year in School: ".htmlspecialchars($obj->schYear)."</h3>"; 
									echo "<h3>Relationship Status: ".htmlspecialchars($obj->relationshipStatus)."</h3>"; 
									echo "<br>";
									echo "<h3>Bio: ".htmlspecialchars($obj->bio)."</h3>";
									echo "<br>";
							} 

						$result->close();
						 }
			                   

		?>
</div>
<div class="sectionb">
	<p>You have successfully logged in. In the future you will be able to change your profile and post yourself as a roommate. You will also have your favorite houses and roommates appear here. For now though, check out Post House and Find House up above.</p>
</div>



</body>

<?php } ?>
