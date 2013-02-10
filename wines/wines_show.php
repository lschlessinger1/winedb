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
?>
<html>
	<head>
		<title>Wine Index</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="description" content="Home" />
		<link type="text/css" rel="stylesheet" href="wines_style.css"/> 		
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js" type="text/javascript" charset="utf-8"></script>
		<script src="../javascript/zebra_rows.js" type="text/javascript" charset="utf-8"></script>
	</head>
		<body>
			<div id="header">
			<p id="title">Wine Database</p>	
			<script type="text/javascript" src ="../javascript/jquery.js"></script>
			<script type="text/javascript" src ="../javascript/init.js"></script>
				<div id="navBar">
					<a href="../wine_db_home.php" class ="navBarButton">Home</a><!-- table of all wines, with crud functions-->
					<a href="#" class ="navBarButton">Buy more stickers</a><!-- this can be an alert and an email-->
					<a href="#" class ="navBarButton">Heatmap of wine locations</a>
						<label for="search">Search</label>
						<input id="wineName" type="wineSearch"></input><!--make this a drop down menu to say search by "_____" and then an input type text -->
				</div>
			</div>	
			<div id="content">
			<?php
			print ("<table cellpadding='1' cellspacing='1' id='resultTable'>");
			print ("<thead>");
			print ("<tr>");
			print('<th>Name</th>
				  <th>Vintage</th>
				  <th>Region</th>
				  <th>Country</th>
				  <th>Wine Maker/Vineyard</th>
				  <th>Supplier</th>
				  <th>Price</th>
				  <th>Lower Life Expectancy</th>
				   - 
				  <th>Upper Life Expectancy</th>
				  <th>Color</th>
				  <th>Grape Type</th>
				  <th>Percent Alcohol</th>
				  <th>Notes</th>
				  <th>Location</th>
				  <th>Quantity</th> ');
			print ("<th>Edit</th>");
			print ("<th>Delete</th>");
			print ("</tr>");
			print ("</thead>");
			print ("<tbody>");
			while ($row = mysql_fetch_array($wines)) {
				print ("<tr>");
				print ("<td>");
				print ("<a href='wines_show.php?id=".$row['id']."' class='showNameAnchor'>");
				print ($row['name']);
				print ("</a>");
				print ("</td>");
				print ("<td >");
				print ($row['vintage']);
				print ("</td>");
				print ("<td >");
				print ($row['region']);
				print ("</td>");
				print ("<td >");
				print ($row['country']);
				print ("</td>");
				print ("<td >");
				print ($row['wine_maker_or_vineyard']);
				print ("</td>");
				print ("<td >");
				print ($row['supplier']);
				print ("</td>");
				print ("<td >");
				print ($row['price']);
				print ("</td>");
				print ("<td >");
				print ($row['upper_life_expectancy']);
				print ("</td>");
				print ("<td >");
				print ($row['lower_life_expectancy']);
				print ("</td>");
				print ("<td >");
				print ($row['color']);
				print ("</td>");
				print ("<td >");
				print ($row['grape_type']);
				print ("</td>");
				print ("<td >");
				print ($row['percent_alcohol']);
				print ("</td>");
				print ("<td >");
				print ($row['notes']);
				print ("</td>");
				print ("<td>");
				print ("<a href='wines_edit.php?id=".$row['id']."' class='editButton'>");
				print ("EDIT");
				print ("</a>");
				print ("</td>");
				print ("<td>");
				print ("<a href='wines_delete.php?id=".$row['id']."' class='deleteButton'>");
				print ("DELETE");
				print ("</a>");
				print ("</td>");
				print ("</tr>");
				}
				print ("</tbody>");
				print ("</table>");
				?>
			</div>
			<div id="footer">
				&copy <span id ="year"></span> Louis Schlessinger
			</div>
		</body>
		<?php mysql_close($connection); ?>
</html>