
ini_set('display_errors', 'On');
$servername = "oniddb.cws.oregonstate.edu";
$username = "horvatha-db";
$password = "4xunHq7hNuAmTgFb";
$dbName = "horvatha-db";
$conn = new mysqli($servername, $username, $password, $dbName);
$array = array();
if ($result = $conn->query("select Address from House_T")) {
	while($obj = $result->fetch_object()){ 
			$array[] = $obj->Address;
	}
}
$array[] = "something";	
	echo json_encode($array);
$result->close();




