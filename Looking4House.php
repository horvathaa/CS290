<!DOCTYPEhtml>
<?php include("_header.php"); ?>
<html>
<head> 
	<!-- set block to show content -->
		<script>
		//element.style.display = "block"; // to show
		//element.style.display = "none"; // to hide 
			function showDiv( id ) {
			document.all.textBox01.style.display = 'block';
			document.all.textBox02.style.display = 'block';
			document.all.textBox01.value = '';
			document.all.textBox02.value = '';
			document.all[ id ].style.display = 'block';
			document.all[ id ].focus();
			}
        </script>
		
		<script>
		//element.style.display = "block"; // to show
		//element.style.display = "none"; // to hide 
			function hideDiv( id ) {
			document.all.textBox01.style.display = 'none';
			//document.all.textBox02.style.display = 'block';
			document.all.textBox01.value = '';
			document.all.textBox02.value = '';
			document.all[ id ].style.display = 'block';
			document.all[ id ].focus();
			}
        </script>
		
</head>
<body>

<form action="lookingform.php" method="POST">

		<center>
		
		<h1 style="color:blue">Searching for Housing Application</h1>
		
		<div align = "center">
		
			<div style = "display: inline-block; text-align: left; ">
			
			<section style = "border: 20px double #000000; padding: 10px;">
				<b><p style="font-size: 18px" > Type of housing  </p></b>
				<input type="checkbox" name="mychk[]" value="1"> House <input type="checkbox" name="mychk[]" value="2"> Apartment <input type="checkbox" name="mychk[]" value="3"> Duplex<br>
				
			</section><br>
				
				<section style = "border: 100px double #000000; padding: 10px;">	
					<br><b>Price Range: 
										<select name="price">
											<option value = "1">$1,000 to $1,500</option>
											<option value = "2">$1,500 to $2,000</option>
											<option value = "3">$2,000 to $2,500</option>
											<option value = "4">$2,500 to $3,000</option>
										</select><br>
					
					<br><b>My Bed Time: <input type="text" name="bedtime"></b><br>  
					
					<b><p style="font-size: 18px" > Pet(s): </p></b>
					<b><center><p style="font-size: 10px; font-style: italic;" > If yes, what kind of pets do you have ? </p></center></b>
					
					<input type="radio" name="pettype" value="1" style="vertical-align: middle" onClick="showDiv( 'textBox01' );" > Yes 
					<input type="radio" name="pettype" value="2" style="vertical-align: middle" onClick="hideDiv( 'textBox01' );" > No
					<input type="radio" name="pettype" value="3" style="vertical-align: middle " onClick="hideDiv( 'textBox01' );" > Prefer not to answer <br>
					<br><input type=text name=textBox01 size=30 style="display:none"> 
						
					<!--  Type of pet: <input type="text" name="pet"> -->
					
					<br><b>My Transportation: 
					
										<select name="transport">
											<option value = "1">Car</option>
											<option value = "2">Moter Bike</option>
											<option value = "3">Bicycle</option>
											<option value = "4">None</option>
										</select><br>
					
					
					<br><input type="submit" value = "Submit" >
					
				</section>
			</div>
			
			
			<!-- <label style="font-size:20">Bed Time <br><textarea name="mytextarea" rows ="1" cols ="10"></textarea><br> -->
			
			
		</div>
		
		</center>
</form>

</form>

</body>
</html>
