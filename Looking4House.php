<html>
<head> </head>
<body>

<form action="lookingform.php" method="POST">

		<center>
		
		<h1 style="color:blue">Searching for Housing Application</h1>
		
		<div align = "center">
		
			<div style = "display: inline-block; text-align: left">
			
				<b><p style="font-size: 18px" > Type ofhousing  </p></b>
				<input type="checkbox" name="mychk[]" value="1"> House <input type="checkbox" name="mychk[]" value="2"> Apartment <input type="check" name="mychk[]" value="3">Duplex<br>
				
				<br><b>Price Range: <input type="number" name="price"></b><br>
				
				<br><b>My Bed Time: <input type="text" name="bedtime"></b><br>  
				
				<b><p style="font-size: 18px" > Pet(s): </p></b>
				<input type="radio" name="pettype" value="1" style="vertical-align: middle"> Yes
				<input type="radio" name="pettype" value="2" style="vertical-align: middle"> No
				<input type="radio" name="pettype" value="3" style="vertical-align: middle"> Prefer not to answer <br>
				 <!--  Type of pet: <input type="text" name="pet"> -->
				
				<br><b>My Transportation: <input type="text" name="transport"></b><br>
				
				
				<br><input type="submit" value = "Submit" >
			</div>
			
			
			<!-- <label style="font-size:20">Bed Time <br><textarea name="mytextarea" rows ="1" cols ="10"></textarea><br> -->
			
			
		</div>
		
		</center>
</form>

</form>

</body>
</html>
