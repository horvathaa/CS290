<style>
#header {
    background-color:#6AC6AF;
    color:white;
    text-align:center;
    padding:5px;
}
#nav {
    line-height:30px;
    background-color:#eeeeee;
    height:600px;
    width:100px;
    float:left;
    padding:5px; 
}
#section {
    width:950px;
	height:600px;
    float:left;
    padding:10px; 
}
#footer {
    background-color:#6AC6AF;
    color:white;
    clear:both;
    text-align:center;
    padding:5px; 
}
</style>
<!--colors?
darker teal #6AC6AF
tealish#BADFC0
greyish teal#A7BFB1
-->

<!--<body background="">
-->


<body bgcolor="#b3b3b3">
	<h1>
		Creating your Profile
	</h1>
	<form action="action_page.php">
		<fieldset>
			<legend> Personal information:</legend>
			
			First name:<br>
			<input type="text" name="firstname"><br>
			Last name:<br>
			<input type="text" name="lastname"><br>
			Phone &#40;optional&#41;:<br>
			<input type="text" name="phone"><br><br>
			Gender:<br>
				<input type="radio" name="gender" value="male"> Male<br>
				<input type="radio" name="gender" value="female"> Female<br><br>
			Photo &#40;optional&#41;:<br>
			<input type="file" name="photo"><br>
			Major:<br>
			<input type="text" name="major"><br>
			Age:<br>
			<input type="text" name="age"><br>
			Year in school:<br>
			<input type="text" name="schYear"><br>
			Relationship Status:<br>
				<input type="radio" name="relations" value="single"> Single<br>
				<input type="radio" name="relations" value="dating"> In a Relationship<br>
				<input type="radio" name="relations" value="prefNotTo"> Prefer not to say<br>
				<img src="http://www.bizfilings.com/images/QuestionMrk.gif" title="Living conditions can change when you have a partner! Let your potential roommates know!"><br><br>
			Description/Bio:<br>
			<textarea rows="6" cols="35">
			</textarea> <br><br>
		</fieldset>
		<fieldset>
			<legend> Connect through Social:</legend>
			<a href="http://www.facebook.com">
				<img src="http://www.inovaeducation.com/sites/all/themes/inovaeducation/images/facebookIcon.png">
			</a>
			
		</fieldset>
	<br>
	<input type="submit" value="Submit">
	</form>
	
</body>




