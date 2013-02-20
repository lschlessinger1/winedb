<?php
include ('../../get_db.php');
$room = $_POST['room'];
$container_number = $_POST['container_number'];
$notes = $_POST['notes'];
$id = $_GET['id'];

mysql_query('UPDATE locations SET room="'.$room.'", container_number="'.$container_number.'", notes="'.$notes.'"WHERE id = '.$id) or die("Could not perform query... ".mysql_error());

mysql_close($connection);
header('Location: locations_index.php');
exit;
?>