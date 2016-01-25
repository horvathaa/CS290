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
			Onid Email:<br>
			<input type="text" name="onidemail"><br>
			Phone optional:<br>
			<input type="text" name="phone"><br><br>
			Gender:<br>
				<input type="radio" name="gender" value="male" checked> Male<br>
				<input type="radio" name="gender" value="female"> Female<br><br>
			Photo optional:<br>
			<input type="text" name="photo"><br>
			Major:<br>
			<input type="text" name="major"><br>
			Year in school:<br>
			<input type="text" name="schYear"><br>
			Description/Bio:<br>
			<input type="text" name="descrip"><br><br>
		</fieldset>
		<fieldset>
			<legend> Connect through Social:</legend>
			<img src="https://www.facebookbrand.com/img/fb-art.jpg">
			<img src="http://www.adweek.com/socialtimes/files/2012/06/twitter-bird-2012.png">
			
		</fieldset>
	<br>
	<input type="submit" value="Submit">
	</form>
	
</body>




