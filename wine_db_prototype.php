<!DOCTYPE html>
<?php
/*$server = "localhost"; #temporary
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
$result = mysql_query('SELECT * FROM wines WHERE id = '.$_GET['id']) or die("Could not perform query... ".mysql_error());
mysql_close($connection);

*/
?>
<html>
	<head>
		<title>Wine Database</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="description" content="Home" />
		<link type="text/css" rel="stylesheet" href="wine_db_style.css"/> 		
		<script type="text/javascript" src="hide.js">
		</script>
	</head>
		<body>
			<div id="wrapper">
				<div id="header">
				<p id="title">Wine Database</p>	
					<script type="text/javascript" src ="jquery.js"></script>
					<script type="text/javascript" src ="init.js"></script>
					<div id="navBar">
						<a href="ListAll.php" class ="navBarButton">List all wines</a><!-- table of all wines, with crud functions-->
						<a href="#" class ="navBarButton">Buy more stickers</a><!-- this can be an alert and an email-->
						<a href="#" class ="navBarButton">Heatmap of wine locations</a>
					<!--	<input id= "wineName" type="wineSearch"></input>	-->
					</div>
				</div>	
				<div id="content">
				
				</div>
				<div id="footer">
					&copy <span id ="year"></span> Louis Schlessinger
				</div>
			</div>
		</body>
</html>