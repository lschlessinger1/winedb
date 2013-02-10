<?php
$server = "localhost";
$username = "lschlessinger";
$password = "louis";

$connection = mysql_connect($server, $username, $password);
if ($connection == false) {
	die("Oh no! Could not connect to the server! ".mysql_error());
}
$db = mysql_select_db("wine_db", $connection);
if ($db == false) {
	die("Yikes! Could not select that database! ".mysql_error());
}
$id = $_GET['id'];
$delete_location = 'DELETE FROM locations WHERE id = '.$id;
mysql_query($delete_location) or die("Deletion error ".mysql_error()); // deletes that location

$delete_bottles = 'DELETE FROM bottles WHERE location_id = '.$id;
mysql_query($delete_bottles) or die("Deletion error ".mysql_error()); // deletes the bottles from the location

mysql_close($connection);
header("Location:locations_index.php");
exit;
?>