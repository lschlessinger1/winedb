<?php
$server = "localhost";
$username = "lschlessinger"; 
$password = "louis";

$connection = mysql_connect($server, $username, $password);
	if(!$connection){
		die("Oh no! Could not connect to the server! ".mysql_error());
	}
$db = mysql_select_db("wine_db", $db);
	if (!$db){
		die("Yikes! Could not select that database! ".mysql_error());
	}
//$create_query = 'INSERT into wines ()  VALUES("'.'" )';
//$create_wine = mysql_query($create_query) or die("Could not perform query... ".mysql_error());
var_dump($_POST);
exit;
mysql_close($connection);
?>