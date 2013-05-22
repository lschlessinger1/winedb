<?php
include ('../../../get_db.php');
$q = trim($_GET["keyname"]);
if($q == ""){
	echo "Enter location you are searching for.";
	exit();
}
mysql_query("ALTER TABLE locations ADD FULLTEXT(room, notes)");
$query = "SELECT room, notes FROM locations WHERE MATCH(room, notes) AGAINST('".$q."%')";
$results = mysql_query($query);
if(mysql_num_rows($results) >= 1) {
	$output = "";
	while($row = mysql_fetch_array($results)) {
		$output .=  "Room: " . $row['room'] . "<br />";
		$output .=  "Container Number: " . $row['container_number'] . "<br />";
		$output .=  "Notes: " .  $row['notes'] . "<br />";
	}
	echo $output;
}
else
	echo "There was no matching record for the search query '" . $q . "'";
?>
