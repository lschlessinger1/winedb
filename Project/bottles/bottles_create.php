<?php
include ('../../get_db.php');
$is_open = $_POST['new_is_open'];
$wine_id = $_POST['new_wine_id'];
$location_id = $_POST['new_location_id'];
mysql_query("INSERT INTO locations (is_open, wine_id, location_id) VALUES ('".$is_open."', '".$wine_id."', '".$location_id."')") or die ("Could not perform query... ".mysql_error());
mysql_close($connection);
header("Location:bottles_index.php");
exit;
?>