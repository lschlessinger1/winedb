<?php
include ('get_db.php');
$q = trim($_GET["keyname"]);
$filter = trim($_GET["filter"]);
if($q == ""){
	echo "Enter a search query.";
	exit();
}
if ($filter == "all"){ //join all of the tables
$query = "SELECT bottles.id, bottles.is_open, bottles.wine_id, bottles.location_id, wines.name, wines.vintage, wines.region, wines.country, wines.wine_maker_or_vineyard, wines.supplier, wines.price, wines.lower_life_expectancy, wines.upper_life_expectancy, wines.color, wines.grape_type, wines.percent_alcohol, wines.notes, locations.room, locations.container_number
FROM bottles
LEFT JOIN wines
ON bottles.wine_id=wines.id 
LEFT JOIN locations 
ON bottles.location_id=locations.id ORDER BY wines.name WHERE name LIKE '%$q%' OR vintage LIKE '%$q%' OR region LIKE '%$q%' OR country LIKE '%$q%' OR wine_maker_or_vineyard LIKE '%$q%' OR supplier LIKE '%$q%' OR price LIKE '%$q%' OR upper_life_expectancy LIKE '%$q%' OR lower_life_expectancy LIKE '%$q%'OR color LIKE '%$q%' OR grape_type LIKE '%$q%' OR percent_alcohol LIKE '%$q%' OR notes LIKE '%$q%' OR room LIKE '%$q%' OR container_number LIKE '%$q%' OR notes LIKE '%$q%'";;
} else if ($filter == "wines") {
$query = "SELECT * FROM wines WHERE name LIKE '%$q%' OR vintage LIKE '%$q%' OR region LIKE '%$q%' OR country LIKE '%$q%' OR wine_maker_or_vineyard LIKE '%$q%' OR supplier LIKE '%$q%' OR price LIKE '%$q%' OR upper_life_expectancy LIKE '%$q%' OR lower_life_expectancy LIKE '%$q%'OR color LIKE '%$q%' OR grape_type LIKE '%$q%' OR percent_alcohol LIKE '%$q%' OR notes LIKE '%$q%'";
} else if ($filter == "bottles") {
$query = "SELECT bottles.id, bottles.is_open, bottles.wine_id, bottles.location_id, wines.name, wines.vintage, wines.region, wines.country, wines.wine_maker_or_vineyard, wines.supplier, wines.price, wines.lower_life_expectancy, wines.upper_life_expectancy, wines.color, wines.grape_type, wines.percent_alcohol, wines.notes, locations.room, locations.container_number
FROM bottles
LEFT JOIN wines
ON bottles.wine_id=wines.id 
LEFT JOIN locations 
ON bottles.location_id=locations.id WHERE name LIKE '%$q%' OR vintage LIKE '%$q%' OR region LIKE '%$q%' OR country LIKE '%$q%' OR wine_maker_or_vineyard LIKE '%$q%' OR supplier LIKE '%$q%' OR price LIKE '%$q%' OR upper_life_expectancy LIKE '%$q%' OR lower_life_expectancy LIKE '%$q%'OR color LIKE '%$q%' OR grape_type LIKE '%$q%' OR percent_alcohol LIKE '%$q%' OR notes LIKE '%$q%'";
} else if ($filter == "locations")
$query = "SELECT * FROM locations WHERE room LIKE '%$q%' OR container_number LIKE '%$q%' OR notes LIKE '%$q%'";
else //notes is ambiguous
	echo "No filter was selected"; // is this possible?
	// still have to make a separate page for the results of the search
	// i can reuse each query and output for each sub-page i.e. a search in locations/locations_index.php will be the same search
$results = mysql_query($query);
if(mysql_num_rows($results) >= 1) {
	$output = "";
	$numResults = 0;
	if($filter == "wines"){
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
			$numResults++;
		}
		echo $output;
		echo "The search '".$q."' returned '".$numResults."' results";
	}
	if($filter == "all"){
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
			$output .=  "is open: " .  $row['is_open'] . "<br />";
			$output .=  "locId: " .  $row['location_id'] . "<br />";
			$output .=  "wine Id: " .  $row['wine_id'] . "<br />";
			$output .=  "Notes: " .  $row['notes'] . "<br />";
			$output .=  "Room: " . $row['room'] . "<br />";
			$output .=  "Container #: " . $row['container_number'] . "<br />";
			$output .=  "Notes: " . $row['notes'] . "<br />";
			$numResults++;
		}
		echo $output;
		echo "The search '".$q."' returned '".$numResults."' results";
	}
	if($filter == "bottles"){
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
			$output .=  "is open: " .  $row['is_open'] . "<br />";
			$output .=  "locId: " .  $row['location_id'] . "<br />";
			$output .=  "wine Id: " .  $row['wine_id'] . "<br />";
			$output .=  "Notes: " .  $row['notes'] . "<br />";
			$numResults++;
		}
		echo $output;
		echo "The search '".$q."' returned '".$numResults."' results";
	}
	if($filter == "locations"){
		while($row = mysql_fetch_array($results)) {
			$output .=  "Room: " . $row['room'] . "<br />";
			$output .=  "Container #: " . $row['container_number'] . "<br />";
			$output .=  "Notes: " . $row['notes'] . "<br />";
			$numResults++;
		}
		echo $output;
		echo "The search '".$q."' returned '".$numResults."' results";
	}
}
else
	echo "There was no matching record for the search query '" . $q . "'";
	echo "numrows = '" . $results . "'";
?>