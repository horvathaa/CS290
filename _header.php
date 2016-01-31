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

