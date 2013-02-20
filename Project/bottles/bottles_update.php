<?php
include ('../../get_db.php');
$is_open = $_POST['is_open'];
$wine_id = $_POST['wine_id'];
$location_id = $_POST['location_id'];
$id = $_GET['id'];

mysql_query('UPDATE bottles SET is_open="'.$is_open.'", wine_id="'.$wine_id.'", location_id="'.$location_id.'"WHERE id = '.$id) or die("Could not perform query... ".mysql_error());

mysql_close($connection);
header('Location: bottles_index.php');
exit;
?>