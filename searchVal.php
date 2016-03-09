<?php
	$errors = '';
	
	if(isset($_POST['submit'])){
		
		if(preg_match("/[0-9]/{2,4}", $_POST['low'])){
			$low=$_POST['low'];
		}
		else if (!preg_match("/[0-9]/{2,4}", $_POST['low'])){
			$error = "Invalid lower bound";
		}
		else if(preg_match("/[0-9]/{3,4}", $_POST['max'])){
			$max=$_POST['max'];
		}
		else if(!preg_match("/[0-9]/{3,4}", $_POST['max'])){
			$error = "Invalid upper bound";
		}
		else if(preg_match("/[0-9]{3,4}/", $_POST['roomAmount'])){
			$roomAmount=$_POST['roomAmount'];
		}
		else if(!preg_match("/[0-9]{3,4}/", $_POST['roomAmount'])){
			$error = "Invalid room number";
		}
		
		else if(preg_match("/[0-9]{2,4}/", $_POST['costUtil'])){
			$costUtil=$_POST['costUtil'];
		}
		else if(!preg_match("/[0-9]{2,4}/", $_POST['costUtil'])){
			$error = "Invalid Untility option";
		}
		$house=$_POST['housingType'];
		$reason=$_POST['reason'];
		
	};


?>