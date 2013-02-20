<?php
include ('../../get_db.php');
$id = $_GET['id'];
$name = $_POST['name'];
$vintage = $_POST['vintage'];
$region = $_POST['region'];
$country = $_POST['country'];
$wine_maker_or_vineyard = $_POST['wine_maker_or_vineyard'];
$supplier = $_POST['supplier'];
$price = $_POST['price'];
$lower_life_expectancy = $_POST['lower_life_expectancy'];
$upper_life_expectancy = $_POST['upper_life_expectancy'];
$color = $_POST['color'];
$grape_type = $_POST['grape_type'];
$percent_alcohol = $_POST['percent_alcohol'];
$notes = $_POST['notes'];
mysql_query('UPDATE wines SET name="'.$name.'", vintage="'.$vintage.'", region="'.$region.'", wine_maker_or_vineyard="'.$wine_maker_or_vineyard.'", supplier="'.$supplier.'", price="'.$price.'",lower_life_expectancy="'.$lower_life_expectancy.'", upper_life_expectancy="'.$upper_life_expectancy.'", color="'.$color.'", grape_type="'.$grape_type.'", percent_alcohol="'.$percent_alcohol.'", notes="'.$notes.'"WHERE id = '.$id) or die("Could not perform query... ".mysql_error());
mysql_close($connection);
header("Location:wines_index.php");
exit;
?>