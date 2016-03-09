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
#loginButton{
	float: left;
	width: 45%;
	border-width: 10px;
	border-style: solid;
	text-indent: 60px;
}
#signUp{
	float: right;
	width: 45%;
	border-width: 10px 10px 10px 10px;
	border-style: solid;
	padding: 0px 0px 15px 0px;
	text-indent: 180px;
	font-size: 20px;
}
</style>
<!--colors?
darker teal #6AC6AF
tealish#BADFC0
greyish teal#A7BFB1
-->

<!--<body background="">
-->
<?php session_start();
      include("_header.php"); ?>
<?php
	//if(checkAuth(true) != "") {
?>

<body bgcolor="#F7A810">
<h1 style="float: center;">Welcome to Hom-E</h1>


<div id="logIn" style="float: center;">
	<div id="loginButton" >
	<form method="post" action="set_session.php">
	    Log In with ONID username: <input type="text" name="ONID">
	   <a style="color: black;" href="dashboard.php"><input type="submit"></a>
	</form>
	</div>
	<div id="signUp">
		<a style="color: black;" a href="profileCreation.php">Sign Up Using OSU Account</a>
	</div>
</div>



</body>

