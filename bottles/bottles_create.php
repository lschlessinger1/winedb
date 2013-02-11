<?php
$server = "localhost";
$username = "lschlessinger"; 
$password = "louis";

$connection = mysql_connect($server, $username, $password);
	if(!$connection){
		die("Oh no! Could not connect to the server! ".mysql_error());
	}
$db = mysql_select_db("wine_db", $db);
	if (!$db){
		die("Yikes! Could not select that database! ".mysql_error());
	}
$is_open = $_POST['new_is_open'];
$wine_id = $_POST['new_wine_id'];
$location_id = $_POST['new_location_id'];
mysql_query("INSERT INTO locations (is_open, wine_id, location_id) VALUES ('".$is_open."', '".$wine_id."', '".$location_id."')") or die ("Could not perform query... ".mysql_error());
var_dump($_POST);
exit;
mysql_close($connection);
?>