<?php
$server = "localhost";
$username = "lschlessinger"; 
$password = "louis";
$connection = mysql_connect($server, $username, $password);
	if($connection == false){
		die("Oh no! Could not connect to the server! ".mysql_error());
	}
$db = mysql_select_db("wine_db", $connection);
	if ($db == false) {
		die("Yikes! Could not select that database! ".mysql_error());
	}
$room = $_POST['new_room'];
$container_number = $_POST['new_container_number'];
$notes = $_POST['new_notes'];
mysql_query("INSERT INTO locations (room, container_number, notes) VALUES ('".$room."', '".$container_number."', '".$notes."')") or die ("Could not perform query... ".mysql_error());
mysql_close($connection);
header("Location:locations_index.php");
exit;
?>