<?php
include ('../../get_db.php');
$is_open = $_POST['new_is_open'];
$wine_id = $_POST['new_wine_id'];
$location_id = $_POST['new_location_id'];
mysql_query("INSERT INTO bottles (is_open, wine_id, location_id) VALUES ('".$is_open."', '".$wine_id."', '".$location_id."')") or die ("Could not perform query... ".mysql_error());
mysql_close($connection);
header("Location:bottles_index.php");
//two possible situations: create bottle(s) that are already in db and create bottle(s) and wine that are not in the database, if this is the case, then onyl one type of win cane be made.
exit;
?>