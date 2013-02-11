<!DOCTYPE html>
<?php
$server = "localhost"; #temporary
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
$wines = mysql_query('SELECT * FROM wines') or die("Could not perform query... ".mysql_error());
$locations = mysql_query('SELECT * FROM locations') or die("Could not perform query... ".mysql_error());
?>
<html>
	<head>
		<title>Wine Database</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="description" content="Home" />
		<link type="text/css" rel="stylesheet" href="home_style.css"/> 		
		</script>
	</head>
		<body>
			<div id="wrapper">
				<div id="header">
				<p id="title">Wine Database</p>	
					<script type="text/javascript" src ="javascript/jquery.js"></script>
					<script type="text/javascript" src ="javascript/init.js"></script>
					<div id="navBar">
						<a href="wines/wines_index.php" class ="navBarButton">Wines</a>
						<a href="bottles/bottles_index.php" class ="navBarButton">Bottles</a><!-- table of all wines, with crud functions-->
						<a href="locations/locations_index.php" class ="navBarButton">Locations</a> <!--make drop downs for these-->
						<a href="#" class ="navBarButton">Buy more stickers</a><!-- this can be an alert and an email-->
						<a href="#" class ="navBarButton">Heatmap of wine locations</a>
					</div>
				</div>	
				<div id="content">
					<center><p><label for="wineSearch">Search for a wine: </label><input id= "wineSearch"></input></p></center>
				</div>
				<div id="footer">
					&copy <span id ="year"></span> Louis Schlessinger
				</div>
			</div>
		</body>
</html>