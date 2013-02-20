<?php
include ('../../get_db.php');
$id = $_GET['id'];

$delete_bottle = 'DELETE FROM bottles WHERE id = '.$id;
mysql_query($delete_bottle) or die("Deletion error ".mysql_error()); 

mysql_close($connection);
header("Location:bottles_index.php");
exit;
?>