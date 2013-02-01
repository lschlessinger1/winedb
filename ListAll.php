<!DOCTYPE html>
<?php
/*
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
		<script type="text/javascript" src ="hide.js"></script>
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js" type="text/javascript" charset="utf-8"></script>
		<script src="application.js" type="text/javascript" charset="utf-8"></script>
	</head>
		<body>
			<div id="header">
			<p id="title">Wine Database</p>	
			<script type="text/javascript" src ="jquery.js"></script>
			<script type="text/javascript" src ="init.js"></script>
				<div id="navBar">
					<a href="wine_db_prototype.php" class ="navBarButton">Home</a><!-- table of all wines, with crud functions-->
					<a href="#" class ="navBarButton">Buy more stickers</a><!-- this can be an alert and an email-->
					<a href="#" class ="navBarButton">Heatmap of wine locations</a>
						<label for="search">Search</label>
						<input id= "wineName" type="wineSearch"></input>
				</div>
			</div>	
			<div id="content">
				<table cellpadding="1" cellspacing="1" id="resultTable">
				  <thead>
					<tr>
					  <th>First Name</th>
					  <th>Last Name</th>
					  <th>City</th>
					  <th>State</th>
					</tr>
				  </thead>
				  <tbody>
					<tr>
						<td>Mannix</td>
						<td>Bolton</td>
						<td>Merizo</td>
						<td>Michigan</td>
					</tr>
					<tr>
						<td>Suki</td>
						<td>King</td>
						<td>Fairmont</td>
						<td>Oklahoma</td>
					</tr>
					<tr>
						<td>Shelby</td>
						<td>English</td>
						<td>Durham</td>
						<td>Arkansas</td>
					</tr>
					<tr>
						<td>Portia</td>
						<td>Burns</td>
						<td>Princeton</td>
						<td>Rhode Island</td>
					</tr>
					<tr>
						<td>Dacey</td>
						<td>Young</td>
						<td>Covina</td>
						<td>South Carolina</td>
					</tr>
					<tr>
						<td>Clark</td>
						<td>Reyes</td>
						<td>Grand Rapids</td>
						<td>New Jersey</td>
					</tr>
					<tr>
						<td>Maris</td>
						<td>Decker</td>
						<td>Sierra Madre</td>
						<td>Georgia</td>
					</tr>
					<tr>
						<td>Yuli</td>
						<td>Blackwell</td>
						<td>Clearwater</td>
						<td>Illinois</td>
					</tr>
					<tr>
						<td>Carly</td>
						<td>Burks</td>
						<td>Beaumont</td>
						<td>Massachusetts</td>
					</tr>
					<tr>
						<td>Chloe</td>
						<td>Christian</td>
						<td>Gadsden</td>
						<td>Virginia</td>
					</tr>
					<tr>
						<td>Trevor</td>
						<td>Carrillo</td>
						<td>West Bend</td>
						<td>Connecticut</td>
					</tr>
					<tr>
						<td>Azalia</td>
						<td>Gallegos</td>
						<td>Plainfield</td>
						<td>Michigan</td>
					</tr>
					<tr>
						<td>Jamal</td>
						<td>Blair</td>
						<td>Centennial</td>
						<td>Indiana</td>
					</tr>
					<tr>
						<td>Sacha</td>
						<td>Evans</td>
						<td>Grand Island</td>
						<td>Alabama</td>
					</tr>
					<tr>
						<td>Cain</td>
						<td>Chapman</td>
						<td>Ontario</td>
						<td>Georgia</td>
					</tr>
					<tr>
						<td>Sigourney</td>
						<td>Hendrix</td>
						<td>Riverside</td>
						<td>Florida</td>
					</tr>
					<tr>
						<td>Nigel</td>
						<td>Boyle</td>
						<td>Lake Forest</td>
						<td>North Carolina</td>
					</tr>
				  </tbody>
				</table>
			</div>
			<div id="footer">
				&copy <span id ="year"></span> Louis Schlessinger
			</div>
		</body>
</html>