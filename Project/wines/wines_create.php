<?php
include ('../../get_db.php');
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
mysql_close($connection);
header("Location:wines_index.php");
exit;
?>