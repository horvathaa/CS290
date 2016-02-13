<?php
	session_start();
  
	function checkAuth($redirect){
	   if(isset($_SESSION["onidid"]) && $_SESSION["onidid"] != ""){
		   return $_SESSION["onidid"];
	   }

	   $pageUrl = 'http';

	   if(isset($_SERVER["HTTPS"]) && $_SERVER["HTTPS"] == "on"){
		$pageUrl .= "s";
	   }

	   if($_SERVER["SERVER_PORT"] != "80"){
		$pageUrl .= $_SERVER["SERVER_NAME"].":".$_SERVER["SERVER_PORT"].$_SERVER["SCRIPT_NAME"];
	   }
	   else{
		$pageUrl .= $_SERVER["SERVER_NAME"].$_SERVER["SCRIPT_NAME"]; 
	   }

	   $ticket = isset($_REQUEST["ticket"]) ? $_REQUEST["ticket"] : "";

	   if($ticket!= ""){
		$url = "https://login.oregonstate.edu/cas/serviceValidate?ticket=".$ticket."&service=".$pageUrl;
		$html = file_get_contents($url);
		$pattern = '/\\<cas\\:user\\>([a-zA-Z0-9]+)\\<\\/cas\\:user\\>/';
		preg_match($pattern, $html, $matches);
		if($matches && count($matches) > 1){
			$onidid = $matches[1];
			$_SESSION["onidid"] = $onidid;
			return $onidid;
		}
	   }

	   else if($redirect){
		   $url = "https://login.oregonstate.edu/cas/login?service=".$pageUrl;
		   echo "<script>location.replace('" . $url . "');</script>";

	   }

		   return "";
}

	

?>

<html lang = "en">
<head>
	<meta charset = "utf-8">
	<meta name = "viewport" content = "width = device-width, initial-scale = 1">
	<title> Hom-E </title>
	<link href = "css/style.css" rel = "stylesheet">
	<link href = "images/logo.ico" rel = "shortcut icon">
</head>

<body>
<div id = "wrapper">
	<!-- TOPBAR ==================================================================================-->
	<div id = "topbar">
		<a href = "about.php"><img src = "images/logo.png"></a>
	</div>
	<!-- MAIN NAV ================================================================================-->
	<nav>
		<ul>
			<li><a href = "index.php"> Home </a></li>
			<li><a href = "fileName.php"> link 1 </a></li>
			<li><a href = "fileName.php"> link 2 </a></li>
			<li><a href = "profile.php"> Profile </a></li>
		</ul>
	</nav>
	
	<div class = "clearfix"></div>
	<hr>
	
</html>
