<?php
include ('get_db.php');
$q = trim($_GET["keyname"]);
if($q == ""){
	echo "Enter name you are searching for.";
	exit();
}
$query = "SELECT * FROM wines WHERE name LIKE '%$q%'";// how can i search for more than just name?

$results = mysql_query($query);
if(mysql_num_rows($results) >= 1) {
	$output = "";
	while($row = mysql_fetch_array($results)) {
		$output .=  "Name: " . $row['name'] . "<br />";
		$output .=   "Vintage: " . $row['vintage'] . "<br />";
		$output .=   "Region: " . $row['region'] . "<br />";
		$output .=  "Country: " .  $row['country'] . "<br />";
		$output .=   "Wine Maker/Vineyard: " . $row['wine_maker_or_vineyard'] . "<br />";
		$output .=  "Supplier: " .  $row['supplier'] . "<br />";
		$output .=  "Price: $" .  $row['price'] . "<br />";
		$output .=   "Upper Life Expectancy: " . $row['upper_life_expectancy'] . "<br />";
		$output .=   "Lower Life Expectancy: " . $row['lower_life_expectancy'] . "<br />";
		$output .=  "Color: " .  $row['color'] . "<br />";
		$output .=   "Grape Type: " . $row['grape_type'] . "<br />";
		$output .=   "Percent Alcohol: " . $row['percent_alcohol'] . "<br />";
		$output .=  "Notes: " .  $row['notes'] . "<br />";
	}
	echo $output;
}
else
	echo "There was no matching record for the name " . $q;
?>