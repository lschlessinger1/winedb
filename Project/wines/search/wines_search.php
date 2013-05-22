<?php
include ('../../../get_db.php');
$q = trim($_GET["keyname"]);
if($q == ""){
	echo "Enter location you are searching for.";
	exit();
}
$query = "SELECT * FROM wines WHERE name LIKE '".$q."%'
          UNION
          SELECT * FROM wines WHERE vintage LIKE '".$q."%'
		  UNION
		  SELECT * FROM wines WHERE region LIKE '".$q."%'
		  UNION
		  SELECT * FROM wines WHERE country LIKE '".$q."%'
		  UNION
		  SELECT * FROM wines WHERE wine_maker_or_vineyard LIKE '".$q."%'
		  UNION
		  SELECT * FROM wines WHERE supplier LIKE '".$q."%'
		  UNION
		  SELECT * FROM wines WHERE price LIKE '".$q."%'
		  UNION
		  SELECT * FROM wines WHERE upper_life_expectancy LIKE '".$q."%'
		  UNION
		  SELECT * FROM wines WHERE lower_life_expectancy LIKE '".$q."%'
		  UNION
		  SELECT * FROM wines WHERE color LIKE '".$q."%'
		  UNION
		  SELECT * FROM wines WHERE grape_type LIKE '".$q."%'
		  UNION
		  SELECT * FROM wines WHERE percent_alcohol LIKE '".$q."%'
		  ";
$results = mysql_query($query);
if(mysql_num_rows($results) >= 1) {
	$output = "";
	while($row = mysql_fetch_array($results)) {
		$output .=  "Name: " . $row['name'] . "<br />";
		$output .=  "Vintage: " . $row['vintage'] . "<br />";
		$output .=  "Region: " . $row['region'] . "<br />";
		$output .=  "Country: " .  $row['country'] . "<br />";
		$output .=  "Wine Maker/Vineyard: " . $row['wine_maker_or_vineyard'] . "<br />";
		$output .=  "Supplier: " .  $row['supplier'] . "<br />";
		$output .=  "Price: $" .  $row['price'] . "<br />";
		$output .=  "Upper Life Expectancy: " . $row['upper_life_expectancy'] . "<br />";
		$output .=  "Lower Life Expectancy: " . $row['lower_life_expectancy'] . "<br />";
		$output .=  "Color: " .  $row['color'] . "<br />";
		$output .=  "Grape Type: " . $row['grape_type'] . "<br />";
		$output .=  "Percent Alcohol: " . $row['percent_alcohol'] . "<br />";
		$output .=  "Notes: " .  $row['notes'] . "<br />";
	}
	echo $output;
}
else
	echo "There was no matching record for the search query '" . $q . "'";
?>