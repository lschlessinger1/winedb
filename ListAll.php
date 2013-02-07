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
					  <th>Name</th>
					  <th>Vintage</th>
					  <th>Region</th>
					  <th>Country</th>
					  <th>Wine Maker/Vineyard</th>
					  <th>Supplier</th>
					  <th>Price</th>
					  <th>Life Expectancy</th>
					  <th>Color</th>
					  <th>Grape Type</th>
					  <th>Percent Alcohol</th>
					  <th>Notes</th>
					  <th>Location</th>
					  <th>Quantity</th>
					</tr>
				  </thead>
				  <tbody>
					<tr>
						<td>Name</td>
						<td>Vintage</td>
						<td>Region</td>
						<td>Country</td>
						<td>Wine Maker/Vineyard</td>
						<td>Supplier</td>
						<td>Price</td>
						<td>Life Expectancy</td>
						<td>Color</td>
						<td>Grape Type</td>
						<td>Percent Alcohol</td>
						<td>Notes</td>
						<td>Location</td>
						<td>Quantity</td>
					</tr>
					<tr>
						<td>Name</td>
						<td>Vintage</td>
						<td>Region</td>
						<td>Country</td>
						<td>Wine Maker/Vineyard</td>
						<td>Supplier</td>
						<td>Price</td>
						<td>Life Expectancy</td>
						<td>Color</td>
						<td>Grape Type</td>
						<td>Percent Alcohol</td>
						<td>Notes</td>
						<td>Location</td>
						<td>Quantity</td>
					</tr>
					<tr>
						<td>Name</td>
						<td>Vintage</td>
						<td>Region</td>
						<td>Country</td>
						<td>Wine Maker/Vineyard</td>
						<td>Supplier</td>
						<td>Price</td>
						<td>Life Expectancy</td>
						<td>Color</td>
						<td>Grape Type</td>
						<td>Percent Alcohol</td>
						<td>Notes</td>
						<td>Location</td>
						<td>Quantity</td>
					</tr>
					<tr>
						<td>Name</td>
						<td>Vintage</td>
						<td>Region</td>
						<td>Country</td>
						<td>Wine Maker/Vineyard</td>
						<td>Supplier</td>
						<td>Price</td>
						<td>Life Expectancy</td>
						<td>Color</td>
						<td>Grape Type</td>
						<td>Percent Alcohol</td>
						<td>Notes</td>
						<td>Location</td>
						<td>Quantity</td>
					</tr>
					<tr>
						<td>Name</td>
						<td>Vintage</td>
						<td>Region</td>
						<td>Country</td>
						<td>Wine Maker/Vineyard</td>
						<td>Supplier</td>
						<td>Price</td>
						<td>Life Expectancy</td>
						<td>Color</td>
						<td>Grape Type</td>
						<td>Percent Alcohol</td>
						<td>Notes</td>
						<td>Location</td>
						<td>Quantity</td>
					</tr>
					<tr>
						<td>Name</td>
						<td>Vintage</td>
						<td>Region</td>
						<td>Country</td>
						<td>Wine Maker/Vineyard</td>
						<td>Supplier</td>
						<td>Price</td>
						<td>Life Expectancy</td>
						<td>Color</td>
						<td>Grape Type</td>
						<td>Percent Alcohol</td>
						<td>Notes</td>
						<td>Location</td>
						<td>Quantity</td>
					</tr>
					<tr>
						<td>Name</td>
						<td>Vintage</td>
						<td>Region</td>
						<td>Country</td>
						<td>Wine Maker/Vineyard</td>
						<td>Supplier</td>
						<td>Price</td>
						<td>Life Expectancy</td>
						<td>Color</td>
						<td>Grape Type</td>
						<td>Percent Alcohol</td>
						<td>Notes</td>
						<td>Location</td>
						<td>Quantity</td>
					</tr>
					<tr>
						<td>Name</td>
						<td>Vintage</td>
						<td>Region</td>
						<td>Country</td>
						<td>Wine Maker/Vineyard</td>
						<td>Supplier</td>
						<td>Price</td>
						<td>Life Expectancy</td>
						<td>Color</td>
						<td>Grape Type</td>
						<td>Percent Alcohol</td>
						<td>Notes</td>
						<td>Location</td>
						<td>Quantity</td>
					</tr>
					<tr>
						<td>Name</td>
						<td>Vintage</td>
						<td>Region</td>
						<td>Country</td>
						<td>Wine Maker/Vineyard</td>
						<td>Supplier</td>
						<td>Price</td>
						<td>Life Expectancy</td>
						<td>Color</td>
						<td>Grape Type</td>
						<td>Percent Alcohol</td>
						<td>Notes</td>
						<td>Location</td>
						<td>Quantity</td>
					</tr>
					<tr>
						<td>Name</td>
						<td>Vintage</td>
						<td>Region</td>
						<td>Country</td>
						<td>Wine Maker/Vineyard</td>
						<td>Supplier</td>
						<td>Price</td>
						<td>Life Expectancy</td>
						<td>Color</td>
						<td>Grape Type</td>
						<td>Percent Alcohol</td>
						<td>Notes</td>
						<td>Location</td>
						<td>Quantity</td>
					</tr>
					<tr>
						<td>Name</td>
						<td>Vintage</td>
						<td>Region</td>
						<td>Country</td>
						<td>Wine Maker/Vineyard</td>
						<td>Supplier</td>
						<td>Price</td>
						<td>Life Expectancy</td>
						<td>Color</td>
						<td>Grape Type</td>
						<td>Percent Alcohol</td>
						<td>Notes</td>
						<td>Location</td>
						<td>Quantity</td>
					</tr>
					<tr>
						<td>Name</td>
						<td>Vintage</td>
						<td>Region</td>
						<td>Country</td>
						<td>Wine Maker/Vineyard</td>
						<td>Supplier</td>
						<td>Price</td>
						<td>Life Expectancy</td>
						<td>Color</td>
						<td>Grape Type</td>
						<td>Percent Alcohol</td>
						<td>Notes</td>
						<td>Location</td>
						<td>Quantity</td>
					</tr>
					<tr>
						<td>Name</td>
						<td>Vintage</td>
						<td>Region</td>
						<td>Country</td>
						<td>Wine Maker/Vineyard</td>
						<td>Supplier</td>
						<td>Price</td>
						<td>Life Expectancy</td>
						<td>Color</td>
						<td>Grape Type</td>
						<td>Percent Alcohol</td>
						<td>Notes</td>
						<td>Location</td>
						<td>Quantity</td>
					</tr>
					<tr>
						<td>Name</td>
						<td>Vintage</td>
						<td>Region</td>
						<td>Country</td>
						<td>Wine Maker/Vineyard</td>
						<td>Supplier</td>
						<td>Price</td>
						<td>Life Expectancy</td>
						<td>Color</td>
						<td>Grape Type</td>
						<td>Percent Alcohol</td>
						<td>Notes</td>
						<td>Location</td>
						<td>Quantity</td>
					</tr>
					<tr>
						<td>Name</td>
						<td>Vintage</td>
						<td>Region</td>
						<td>Country</td>
						<td>Wine Maker/Vineyard</td>
						<td>Supplier</td>
						<td>Price</td>
						<td>Life Expectancy</td>
						<td>Color</td>
						<td>Grape Type</td>
						<td>Percent Alcohol</td>
						<td>Notes</td>
						<td>Location</td>
						<td>Quantity</td>
					</tr>
					<tr>
						<td>Name</td>
						<td>Vintage</td>
						<td>Region</td>
						<td>Country</td>
						<td>Wine Maker/Vineyard</td>
						<td>Supplier</td>
						<td>Price</td>
						<td>Life Expectancy</td>
						<td>Color</td>
						<td>Grape Type</td>
						<td>Percent Alcohol</td>
						<td>Notes</td>
						<td>Location</td>
						<td>Quantity</td>
					</tr>
					<tr>
						<td>Name</td>
						<td>Vintage</td>
						<td>Region</td>
						<td>Country</td>
						<td>Wine Maker/Vineyard</td>
						<td>Supplier</td>
						<td>Price</td>
						<td>Life Expectancy</td>
						<td>Color</td>
						<td>Grape Type</td>
						<td>Percent Alcohol</td>
						<td>Notes</td>
						<td>Location</td>
						<td>Quantity</td>
					</tr>
				  </tbody>
				</table>
			</div>
			<div id="footer">
				&copy <span id ="year"></span> Louis Schlessinger
			</div>
		</body>
</html>