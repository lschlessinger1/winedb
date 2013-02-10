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
$delete_wine = 'DELETE FROM wines WHERE id = '.$id;
mysql_query($delete_wine) or die("Deletion error ".mysql_error()); // deletes that wine type

$delete_bottles = 'DELETE FROM bottles WHERE wine_id = '.$id;
mysql_query($delete_bottles) or die("Deletion error ".mysql_error()); // deletes the bottles of the wine type

mysql_close($connection);
header("Location:wines_index.php");
exit;
?>