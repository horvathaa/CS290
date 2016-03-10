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
	float: right;
	
	width: 45%;
	height: 30%;
	-moz-border-radius: 25px;
	-webkit-border-radius: 25px;
	-webkit-box-shadow: 0 8px 0 #303030;
	-moz-box-shadow: 0 8px 0 #303030;
	box-shadow: 0 8px 0 #303030;
	border: 2px solid #303030;
	background: #909090;
	text-shadow: 0 2px 2px rgba(255, 255, 255, 0.2);
	border: 2px solid rgba(33, 68, 72, 0.59);
	padding: 0px 0px 15px 0px;
	text-align: center;
	font: bold 3.2em/100px "Helvetica Neue", Arial, Helvetica, Geneva, sans-serif;
	font-size: 20px;
}
#signUp{
	float: left;
	width: 45%;
	height: 30%;
	-moz-border-radius: 25px;
	-webkit-border-radius: 25px;
	-webkit-box-shadow: 0 8px 0 #303030;
	-moz-box-shadow: 0 8px 0 #303030;
	box-shadow: 0 8px 0 #303030;
	border: 2px solid #303030;
	background: #909090;
	text-shadow: 0 2px 2px rgba(255, 255, 255, 0.2);
	border: 2px solid rgba(33, 68, 72, 0.59);
	padding: 0px 0px 15px 0px;
	text-align: center;
	font: bold 3.2em/100px "Helvetica Neue", Arial, Helvetica, Geneva, sans-serif;
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
	<p>Hom-E helps students at Oregon State University find housing in the Corvallis community. All users of Hom-E must attend OSU which adds security to transactions which Craigslist can not offer. In the future, Hom-E will also be able to help with roommate matching. To get started please select one of the following options:</p>
	<div id="signUp">
		<a style="color: #202020;" a href="profileCreation.php">Sign Up Using OSU Account</a>
	</div>
	<div id="loginButton" >
	<form style="color: #202020;" method="post" action="set_session.php">
	    <label>Log In with ONID Username</label>
		<input type="text" placeholder="Enter ONID username" name="ONID">
			<a style="color: #202020;" a href="dashboard.php">
				<input type="submit">
			</a>
	</form>
	</div>
</div>



</body>

