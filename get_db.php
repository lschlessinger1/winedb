<?php
	$server = "localhost";
	$username = "lschlessinger";
	$password = "louis";
	$connection = mysql_connect($server, $username, $password) or die(mysql_error());
	$db = mysql_select_db("wine_db", $connection) or die(mysql_error());
?>