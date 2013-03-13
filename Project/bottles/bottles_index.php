<!DOCTYPE html>
<?php
include ('../../get_db.php');
$wines = mysql_query('SELECT * FROM wines') or die("Could not perform query... ".mysql_error());
$locations = mysql_query('SELECT * FROM locations ORDER BY room') or die("Could not perform query... ".mysql_error());
$bottles = mysql_query('SELECT bottles.id, bottles.is_open, bottles.wine_id, bottles.location_id, wines.name, wines.vintage, wines.region, wines.country, wines.wine_maker_or_vineyard, wines.supplier, wines.price, wines.lower_life_expectancy, wines.upper_life_expectancy, wines.color, wines.grape_type, wines.percent_alcohol, wines.notes, locations.room, locations.container_number
FROM bottles
LEFT JOIN wines
ON bottles.wine_id=wines.id 
LEFT JOIN locations 
ON bottles.location_id=locations.id ORDER BY wines.name 
') or die("Could not perform query... ".mysql_error());
?>
<html>
	<head>
		<title>Wine Database</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="description" content="BottleIndex" />
		<link type="text/css" rel="stylesheet" href="bottles_style.css"/> 		
		<script type="text/javascript" src="../javascript/jquery.js"></script>
		<script type="text/javascript" src="../javascript/init.js"></script>
		<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
		<script src="http://code.jquery.com/ui/1.10.1/jquery-ui.js"></script>
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js"></script>
		<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.min.js"></script>
		<script>
			$(function() {
				$( "#wineId" ).autocomplete({
					source: "autocomplete.php",
					minLength: 1 
				});
			});
		</script>
    	</head>
		<body>
			<div id="wrapper">
				<?php
				$result = mysql_query("SELECT * FROM bottles", $connection);
				$num_rows = mysql_num_rows($result);
				include('../../bottles_header.php');
				print ('<a href="bottles_index.php?page=newWine" class="bottleAnchor">Input a new wine and bottle(s)</a> <br />');
				print ('<a href="bottles_index.php?page=updateQuantity" class="bottleAnchor">Update quanity of a wine</a>');
				switch ($_GET['page']) {
					case 'home':
						break;
					case 'newWine':
						include('../../new_bottle.php');
						break;
					case 'updateQuantity':
						include('bottles_new_update_quantity.php');
						break;
					default:
					break;
				}
				if ($num_rows > 0) {
					print ("<table cellpadding='1' cellspacing='1' id='resultTable'>");
					print ("<thead>");
					print ("<tr>");
					print('<th>Name</th>
						  <th>Vintage</th>
						  <th>Region</th>
						  <th>Country</th>
						  <th>Wine Maker/Vineyard</th>
						  <th>Supplier</th>
						  <th>Price</th> <!---per bottle--->
						  <th>Lower Life Expectancy</th> 
						  <th>Upper Life Expectancy</th>
						  <th>Color</th>
						  <th>Grape Type</th>
						  <th>Percent Alcohol</th>
						  <th>Is Open?</th>
						  <th>Location in House</th>
						  <th>Notes</th>
						  '); //<th>Quantity</th>
					print ("<th>Edit</th>");
					print ("<th>Delete</th>");
					print ("</tr>");
					print ("</thead>");
					print ("<tbody>");
					while ($row = mysql_fetch_array($bottles)) {
						print ("<tr>");
						print ("<td>");
						print ("<a href='bottles_show.php?id=".$row['id']."' class='showNameAnchor'>");
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
						 if($row['is_open'] == 0){
							print("Closed");
						 } else {
							print("Open!");
						 }
						print ("</td>");
						print ("<td >");
						print ($row['room']);
						print(' ');
						print($row['container_number']);
						print ("</td>");
						print ("<td >");
						print ($row['notes']);
						print ("</td>");
						print ("<td >");
						print ("</td>");
						print ("<td>");
						print ("<a href='bottles_edit.php?id=".$row['id']."' class='editButton'>");
						print ("EDIT");
						print ("</a>");
						print ("</td>");
						print ("<td>");
						print ("<a href='bottles_delete.php?id=".$row['id']."' class='deleteButton'>");
						print ("DELETE");
						print ("</a>");
						print ("</td>");
						print ("</tr>");
						}
						print ("</tbody>");
						print ("</table>"); 
				} else {
					echo "Table is Empty";
				}
			?>
			</div>
		</body>
				<?php include('../../footer.php'); ?>
				<?php mysql_close($connection); ?>
			</div>
		</body>
</html>