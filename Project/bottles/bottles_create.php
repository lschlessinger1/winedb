<?php
include ('../../get_db.php');
$is_open = $_POST['new_is_open'];
$wine_id = $_POST['new_wine_id'];
$location_id = $_POST['new_location_id'];
$name = $_POST['new_name'];
$vintage = $_POST['new_vintage'];
$region = $_POST['new_region'];
$country = $_POST['new_country'];
$wine_maker_or_vineyard = $_POST['new_wine_maker_or_vineyard'];
$supplier = $_POST['new_supplier'];
$price = $_POST['new_price'];
$lower_life_expectancy = $_POST['new_lower_life_expectancy'];
$upper_life_expectancy = $_POST['new_upper_life_expectancy'];
$color = $_POST['new_color'];
$grape_type = $_POST['new_grape_type'];
$percent_alcohol = $_POST['new_percent_alcohol'];
$notes = $_POST['new_notes'];
mysql_query("INSERT INTO wines (name, vintage, region, country, wine_maker_or_vineyard, supplier, price, lower_life_expectancy, upper_life_expectancy, color, grape_type, percent_alcohol, notes) 
VALUES ('".$name."', '".$vintage."', '".$region."', '".$country."','".$wine_maker_or_vineyard."', '".$supplier."', '".$price."', '".$lower_life_expectancy."', '".$upper_life_expectancy."', '".$color."', '".$grape_type."', '".$percent_alcohol."', '".$notes."')") 
or die ("Could not perform query... ".mysql_error());
$wines = mysql_query('SELECT * FROM wines')
while ($row = mysql_fetch_array($wines)) {
	echo $row['id'];
}
//mysql_query("INSERT INTO bottles (is_open, wine_id, location_id) VALUES ('".$is_open."', '".$wine_id."', '".$location_id."')") or die ("Could not perform query... ".mysql_error());
mysql_close($connection);
//header("Location:bottles_index.php?page=home");
//wine_id of bottles is always 0??? ---> $wine_id is never specified nor is 'new_wine_id'
//how can i get the wine_id of the wine I just created then insert it into bottles?
//two possible situations: create bottle(s) that are already in db and create bottle(s) and wine that are not in the database, if this is the case, then onyl one type of win cane be made.
exit;
?>