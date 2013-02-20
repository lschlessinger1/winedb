<?php
include ('../../get_db.php');
$room = $_POST['new_room'];
$container_number = $_POST['new_container_number'];
$notes = $_POST['new_notes'];
mysql_query("INSERT INTO locations (room, container_number, notes) VALUES ('".$room."', '".$container_number."', '".$notes."')") or die ("Could not perform query... ".mysql_error());
mysql_close($connection);
header("Location:locations_index.php");
exit;
?>