<?php
	include("_header.php");
	include("addUserValidation.php");
?>

<?php
	if(checkAuth(true) != "") {
?>

<body>
	<h1>
		Creating your Profile
	</h1>
	
	<?=$error?>
	
	<form method="post">
		<fieldset>
			<legend> Personal information:</legend>
			
			First name:<br>
			<input type="text" pattern = "[A-Za-z]+" title = "Only enter letters" name="firstname"><br>
			Last name:<br>
			<input type="text" pattern = "[a-zA-Z]+" title = "Only enter letters" name="lastname"><br>
			Phone &#40;optional&#41;:<br>
			<input type="text" pattern = "[0-9]{10,11}" title = "Enter 10 or 11 digits" name="phone"><br><br>
			Gender:<br>
				<input type="radio" name="gender" value="male"> Male<br>
				<input type="radio" name="gender" value="female"> Female<br><br>
			Major:<br>
			<input type="text" pattern = "[a-zA-Z ]+" title = "Only enter letters and spaces" name="major"><br>
			Age:<br>
			<input type="text" pattern = "[0-9]{1,3}" title = "Enter 1-3 digits" name="age"><br>
			Year in school (as a number):<br>
			<input type="text" pattern = "[0-9]+" title = "Only enter digits" name="schYear"><br>
			Relationship Status:<br>
				<input type="radio" name="relations" value="single"> Single<br>
				<input type="radio" name="relations" value="dating"> In a Relationship<br>
				<input type="radio" name="relations" value="prefNotTo"> Prefer not to say<br>
				<br>
			Description/Bio:<br>
			<textarea name="bio" pattern = "[a-zA-Z0-9!? ]{0,300}" title = "Enter at most 300 characters including: letters, numbers, spaces, !, or ?" rows="6" cols="35"></textarea> 
                        <br>ONID Username:<br>
                        <input type="text" pattern = "[a-z0-9]+" title = "Only enter lowercase letters and digits" name="ONID"><br><br>
		</fieldset>
		<fieldset>
			<legend> Connect through Social:</legend>
			<a href="http://www.facebook.com">
				<img src="http://www.inovaeducation.com/sites/all/themes/inovaeducation/images/facebookIcon.png">
			</a>
			
		</fieldset>
	<br>
	<input type="submit" name = "submit" value="Submit">
	</form>
	
	<?php
		// If the post was submitted and $error is still blank (an error was not detected)
		if (isset($_POST['submit']) and $error == '') {
			// Include the 'addUser' code
			include 'addUser.php';
			echo '<meta http-equiv="refresh" content="0; url=dashboard.php" />';
		}
	?>
	
</body>

<?php } ?>


