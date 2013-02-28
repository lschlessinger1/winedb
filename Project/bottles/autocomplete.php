<?
include ('../../get_db.php');
    $q = strtolower($_GET["term"]);
	$return = array();
    $query = mysql_query("SELECT name FROM wines WHERE name LIKE '%$q%'");
    while ($row = mysql_fetch_array($query)) {
		array_push($return,array('label'=>$row['name'],'value'=>$row['name']));
	}
	echo(json_encode($return));
	mysql_close($connection);
?>