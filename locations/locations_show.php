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

$result = mysql_query('SELECT * FROM locations WHERE id = '.$_GET['id']) or die("Could not perform query... ".mysql_error());

?>
<html>
	<head>
		<title>Show Location</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="description" content="Home" />
		<link type="text/css" rel="stylesheet" href="locations_style.css"/> 		
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
	print ("<th>Room</th>");
	print ("<th>Container Number</th>");
	print ("<th>Notes</th>");
	print ("<th>Edit</th>");
	print ("<th>Delete</th>");
	print ("</tr>");
	print ("</thead>");
	print ("<tbody>");
	while ($row = mysql_fetch_array($result)) {
		print ("<tr>");
		print ("<td>");
		print ("<a href='locations_show.php?id=".$row['id']."' class='showNameAnchor'>");
		print ($row['room']);
		print ("</a>");
		print ("</td>");
		print ("<td >");
		print ($row['container_number']);
		print ("</td>");
		print ("<td>");
		print ($row['notes']);
		print ("</td>");
		print ("<td>");
		print ("<a href='locations_edit.php?id=".$row['id']."' class='editButton'>");
		print ("EDIT");
		print ("</a>");
		print ("</td>");
		print ("<td>");
		print ("<a href='locations_delete.php?id=".$row['id']."' class='deleteButton'>");
		print ("DELETE");
		print ("</a>");
		print ("</td>");
		print ("</tr>");
		}
		print ("</tbody>");
		print ("</table>");
		mysql_close($connection);
		?>
			</div>
			<div id="footer">
				&copy <span id ="year"></span> Louis Schlessinger
			</div>
		</body>
</html>