<?php
	include("_header.php");
	include("addHouseValidation.php");
?>

<html>
<head>
	<title>Offer Housing</title>

</head>
<body>
	<div>
		<h1>Offer Housing</h1>
		<p>This form will create your housing ad. Please fill it out to the best of your ability so the best people can be matched.</p>
		<br>
		<?=$error?>
		<br><br>
		<form method="post" class="inform">
			<label>Reason for posting the ad:<br></label>
				<input type="radio" name="reason" value="permanent"> Permanently Vacating <br>
				<input type="radio" name="reason" value="sublet"> Subletting <br>
				<input type="radio" name="reason" value="roomAvailable"> Spare Room <br>
			<label><br>Property type:<br></label>
				<input type="radio" name="housingType" value="house"> House <br>
				<input type="radio" name="housingType" value="apartment"> Apartment <br>
				<input type="radio" name="housingType" value="duplex"> Duplex <br>
			<label><br>Number of rooms available:</label><br>
				<input type="text" pattern = "[0-9]{1,2}" title = "Enter 1 or 2 digits" name="roomAmount"><br><br>
			<label>Address:</label><br>
				<input type="text" pattern = "[a-zA-Z0-9 ]+" title = "Only enter letters, numbers, or spaces" name="address"><br><br>
			<label>Rent cost per month:</label><br>
				<input type="text" pattern = "[0-9]{1,5}" title = "Enter 1-5 digits" name="costMonth"><br><br>
			<label>Utility cost per month:</label><br>
				<input type="text" pattern = "[0-9]{1,5}" title = "Enter 1-5 digits" name="costUtil"><br><br>
			<label>Available move in date (DD-MM-YYYYs):</label><br>
				<input type="text" pattern = "[0-9]{2}-[0-9]{2}-[0-9]{4}" title = "Format: DD-MM-YYYY" name="availableDate"><br><br>
			<label>Length of lease:</label><br>
				<input type="text" pattern = "[0-9]{1,3}" title = "Enter 1-3 digits (months)" name="leaseLength"><br><br>
			<label>Property rules:</label><br>
				<textarea name="rules" pattern = "[a-zA-Z0-9!? ]{1,300}" title = "Enter at most 300 characters including: letters, numbers, spaces, !, or ?" rows="10" cols="30"></textarea>
				<br>
				<br>
			<input type="submit" name = "submit" value = "Submit">
		</form>
	
	</div>

	<?php
		// If the post was submitted and $error is still blank (an error was not detected)
		if (isset($_POST['submit']) and $error == '') {
			// Include the 'addHouse' code
			include 'addHouse.php';
			echo '<meta http-equiv="refresh" content="0; url=dashboard.php" />';
		}
	?>

</body>

</html>