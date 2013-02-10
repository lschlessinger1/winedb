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
$room = $_POST['room'];
$container_number = $_POST['container_number'];
$notes = $_POST['notes'];
$id = $_GET['id'];

mysql_query('UPDATE locations SET room="'.$room.'", container_number="'.$container_number.'", notes="'.$notes.'"WHERE id = '.$id) or die("Could not perform query... ".mysql_error());

mysql_close($connection);
header('Location: locations_index.php');
exit;
?>