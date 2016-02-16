<?php

	$servername = "onnidd.cws.oregonstate.edu";
	$username = "horvatha-db";
	$password = "4xunHq7hNuAmTgFb";
	$dbName = "horvatha-db";
	$finalDB = new mysqli($servername, $username, $password, $dbName);
	
	// if($finalDB->connect_error){
		// echo "<div>Piess Error:	" . $finalDB->connect_erno . " " .$finalDB->connect_error."<div>";
	// }

    //read the json file contents
    // $jsondata = file_get_contents(data);
    
    //convert json object to php associative array
    // $data = json_decode($jsondata, true);
    
    // $reason = $data['Reason'];
    // $housingType = $data['HousingType'];
    // $roomAmount = $data['roomAmount'];
    // $address = $data['address'];
    // $rent = $data['rent'];
    // $utilCost = $data['utilCost'];
    // $availDate = $data['availDate'];
    // $leaseLength = $data['leaseLength'];
    // $rules = $data['rules'];
    // $userID = $data['userID'];
    
	$query = "INSERT INTO House_T(Reason, Housing Type, roomAmount, Address, rent, untilCost, availDate, leaseLength, rules, userID) Values(?,?,?,?,?,?,?,?,?,?)";
	
	$statement = $finalDB->prepare($query);
	
	$reason = $_REQUEST['reason'];
    $housingType = $_REQUEST['housingType'];
    $roomAmount = $_REQUEST['roomAmount'];
    $address = $_REQUEST['address'];
    $rent = $_REQUEST['costMonth'];
    $utilCost = $_REQUEST['costUtil'];
    $availDate = $_REQUEST['availableDate'];
    $leaseLength = $_REQUEST['leaseLength'];
    $rules = $_REQUEST['rules'];
    $userID = $_REQUEST['userID'];
	
	$statement->bind_param('ssisddsssi', $reason, $housingType, $roomAmount, $address, $rent, $utilCost, $availDate, $leaseLength, $rules, $userID);
	$statement->execute();
	
?>