<?php
include ('../../get_db.php');
$quantity = $_POST['new_quantity'];
$is_open = $_POST['new_is_open'];
$name = $_POST['get_name'];
$wines = mysql_query('SELECT * FROM wines');
while($row = mysql_fetch_array($wines)){
	if($row["name"] == $name){
		$wine_id = $row["id"];
	}
}
$location_id = $_POST['new_location_id'];
if($wine_id){ //if it ever found a wine_id to match up the name
	for ($i=1; $i<=$quantity; $i++) {
		mysql_query("INSERT INTO bottles (is_open, wine_id, location_id) VALUES ('".$is_open."', '".$wine_id."', '".$location_id."')") or die ("Could not perform query... ".mysql_error());
	}
}
mysql_close($connection);
header("Location:bottles_index.php");
exit;
?>