<!DOCTYPE html>
<?php
include ('../../get_db.php');
$wines = mysql_query('SELECT * FROM wines') or die("Could not perform query... ".mysql_error());
$bottles = mysql_query('SELECT * FROM bottles') or die("Could not perform query... ".mysql_error());
$locations = mysql_query('SELECT * FROM locations') or die("Could not perform query... ".mysql_error());
?>
<html>
	<head>
		<title>Wine Index</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="description" content="Home" />
		<link type="text/css" rel="stylesheet" href="wines_style.css"/> 		
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js" type="text/javascript" charset="utf-8"></script>
		<script src="../javascript/zebra_rows.js" type="text/javascript" charset="utf-8"></script>
		<script type="text/javascript" src ="../javascript/jquery.js"></script>
		<script type="text/javascript" src ="../javascript/init.js"></script>
	</head>
		<body>
			<?php include('../../wines_header.php'); ?>
			<div id="content">
			<?php include('../../new_wine.php'); ?>
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
				print ("<a href='https://www.google.com/search?q=".$row['wine_maker_or_vineyard']."'>");
				print ($row['wine_maker_or_vineyard']);
				print ("</a>");
				print ("</td>");
				print ("<td >");
				print ($row['supplier']);
				print ("</td>");
				print ("<td >");
				print ("$");
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
				print ("%");
				print ("</td>");
				print ("<td >");
				print ($row['notes']);
				print ("</td>");
				print ("<td >");
				print ('quantity');//= how many bottles with this wine_id
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
			<?php include('../../footer.php'); ?>
		</body>
		<?php mysql_close($connection); ?>
</html>