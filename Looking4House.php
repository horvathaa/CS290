<!DOCTYPE html>
<html>
<head> </head>
<body>

<form action="lookingform.php" method="POST">

		<center>
		
		<h1 style="color:blue">Housing Application</h1>
		
		<div align = "center">
		
			<div style = "display: inline-block; text-align: left">
			
				<b><p style="font-size: 18px" > You are looking for a ... </p></b>
				<input type="checkbox" name="mychk[]" value="1"> House <input type="checkbox" name="mychk[]" value="2"> Apartment<br><br>
				<input type="radio" name="myradio" value="1" style="vertical-align: middle"> Option one
				<input type="radio" name="myradio" value="2" style="vertical-align: middle"> Option two
				<input type="radio" name="myradio" value="3" style="vertical-align: middle"> Option three<br>
				
				<br>Bed Time: <input type="text" name="Bed_Time"><br>  
				
			</div>
			
			
			<!-- <label style="font-size:20">Bed Time <br><textarea name="mytextarea" rows ="1" cols ="10"></textarea><br> -->
			<input type="submit" value = "Submit" >
			
		</div>
		
		</center>
</form>

</form>

</body>
</html>