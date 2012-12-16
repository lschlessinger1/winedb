<!DOCTYPE html>
<?php
$server = "localhost";
$username = "lschlessinger";
$password = "louis";

$connection = mysql_connect($server, $username, $password);
if ($connection == false) {
	die("Oh no! Could not connect to the server! ".mysql_error());
}

$db = mysql_select_db("wine_db", $connection);
if ($db == false) {
	die("Yikes! Could not select that database! ".mysql_error());
}

mysql_close($connection);

?>
<html>
	<head>
		<title>Wine Database</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="description" content="Home" />
		<link type="text/css" rel="stylesheet" href="wine_db_style.css"/> 
	</head>
		<body>
			<div id="header">
			<p id="title">Wine Database</p>	
			</div>	
			<div id="content"></div>
			<div id="footer">
				&copy 2012 Louis Schlessinger
			</div>
		</body>
</html>