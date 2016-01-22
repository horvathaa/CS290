<html>
<head> </head>
<body>

<form action="lookingform.php" method="POST">

		<center>
		
		<h1 style="color:blue">Housing Application</h1>
		
		<div align = "center">
		
			<div style = "display: inline-block; text-align: left">
			
				<b><p style="font-size: 18px" > You are looking for a ... </p></b>
				<input type="checkbox" name="mychk[]" value="1"> House <input type="checkbox" name="mychk[]" value="2"> Apartment<br>
				
				<br><b>Price: <input type="number" name="price"></b><br>
				
				<b><p style="font-size: 18px" > Relationship Status: </p></b>
				<input type="radio" name="status" value="1" style="vertical-align: middle"> Single
				<input type="radio" name="status" value="2" style="vertical-align: middle"> In a relationship
				<input type="radio" name="status" value="3" style="vertical-align: middle"> Prefer not to answer <br>
				
				<br><b>Bed Time: <input type="text" name="bedtime"></b><br>  
				
				<b><p style="font-size: 18px" > Pet(s): </p></b>
				<input type="radio" name="pettype" value="1" style="vertical-align: middle"> Yes
				<input type="radio" name="pettype" value="2" style="vertical-align: middle"> No
				<input type="radio" name="pettype" value="3" style="vertical-align: middle"> Prefer not to answer <br>
				 <!--  Type of pet: <input type="text" name="pet"> -->
				
				<br><b>Transportation: <input type="text" name="transport"></b><br>
				
				
				<br><input type="submit" value = "Submit" >
			</div>
			
			
			<!-- <label style="font-size:20">Bed Time <br><textarea name="mytextarea" rows ="1" cols ="10"></textarea><br> -->
			
			
		</div>
		
		</center>
</form>

</form>

</body>
</html>