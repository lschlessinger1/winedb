<?php
include ('../../get_db.php');
	$q = strtolower($_GET["term"]);
    $return = array();
    $query = mysql_query("SELECT name FROM wines WHERE name LIKE '%$q%'") or die(mysql_error());
    while ($row = mysql_fetch_array($query)) {
    	array_push($return,array('label'=>$row['name'],'value'=>$row['name']));
	}
	echo(json_encode($return));
	//What happens if there is more than one wine with the same name, but different column value? for example, same name w/ diff. year.
	// need to add more info than just name, maybe the id, but don't display it.
?>