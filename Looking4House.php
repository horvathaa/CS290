<!DOCTYPEhtml>
<?php include("_header.php"); ?>
<html>
<body>

<form action="results.php?go" method="POST">

		<center>
		
		<h1 style="color:blue">Searching for Housing Application</h1>
		
		<div align = "center">
		
			<div style = "display: inline-block; text-align: left; ">
			
			<section style = "border: 20px double #000000; padding: 10px;">
				<b><p style="font-size: 18px" > Type of terms  </p></b>
					<input type="radio" name="reason" value="permanent"> Permanently Vacating <br>
					<input type="radio" name="reason" value="sublet"> Subletting <br>
					<input type="radio" name="reason" value="roomAvailable"> Spare Room <br>
					<br>
				<b><p style="font-size: 18px" > Type of housing  </p></b>
					<input type="radio" name="housingType" value="house"> House <br>
					<input type="radio" name="housingType" value="apartment"> Apartment <br>
					<input type="radio" name="housingType" value="duplex"> Duplex <br>
				
			</section><br>
				
				<section style = "border:20px double #000000; padding: 10px;"><br>
				<b>Price Range:</b><br><br> 
							Min : <input type="text" name="low"> Max : <input type="text" name="max"> <br><br>
				<b>Number of Rooms ?</b><br><br>
							<input type="text" name="roomAmount"><br><br>
				<b>Untility cost per month?<b><br><br>
							<input type="text" name="costUtil"><br><br>
							
						<input type="submit" name="submit" value = "Submit" >
					
				</section>
			</div>					
			
		</div>
		
		</center>
</form>
<?php


/* validation*/
/*
if(isset($_POST['submit'])){
	if(isset($_GET['go'])){
		if(preg_match("/[0-9]/{2,4}", $_POST['low'])){
			$low=$_POST['low'];
		}
		if(preg_match("/[0-9]/{3,4}", $_POST['max'])){
			$max=$_POST['max'];
		}
		if(preg_match("/[0-9]{3,4}/", $_POST['roomAmount'])){
			$roomAmount=$_POST['roomAmount'];
		}
		if(preg_match("/[0-9]{2,4}/", $_POST['costUtil'])){
			$costUtil=$_POST['costUtil'];
		}
		$house=$_POST['housingType'];
		$reason=$_POST['reason'];
		
	}
	
*/
	
	/*database access and pull stuff*/
	/*
	ini_set('display_errors', 'On');
				$servername = "oniddb.cws.oregonstate.edu";
				$username = "horvatha-db";
				$password = "4xunHq7hNuAmTgFb";
				$dbName = "horvatha-db";
				$conn = new mysqli($servername, $username, $password, $dbName);
	if ($result = $conn->query("select Reason,HousingType,roomAmount,Rent from House_T WHERE Reason LIKE '%".$reason."%' WHERE HousingType LIKE '%".$HousingType."%' WHERE roomAmount LIKE '%".$roomAmount."%' WHERE Rent LIKE '%".$low."%' OR Rent LIKE '%".$max."%'")){
		while($obj = $result->fetch_object()){
			echo "<p>".htmlspecialchars($obj->Reason)." ".htmlspecialchars($obj->HousingType)."</p>";
			echo "<p>".htmlspecialchars($obj->Address)."</p>";
			echo "<p>".htmlspecialchars($obj->roomAmount)." rooms</p>";
			echo "<p>$".htmlspecialchars($obj->Rent)." / month</p>";
			echo "<hr>";
			
		}
		
		$result->close();
	}
}
	
*/

/*else{
	echo "<p>Please enter something to search</p>";
	}
	*/
?>

</body>

</html>
