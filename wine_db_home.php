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
$locations = mysql_query('SELECT * FROM locations') or die("Could not perform query... ".mysql_error());
?>
<html>
	<head>
		<title>Wine Database</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="description" content="Home" />
		<link type="text/css" rel="stylesheet" href="home_style.css"/> 		
		</script>
	</head>
		<body>
			<div id="wrapper">
				<div id="header">
				<p id="title">Wine Database</p>	
					<script type="text/javascript" src ="javascript/jquery.js"></script>
					<script type="text/javascript" src ="javascript/init.js"></script>
					<div id="navBar">
						<a href="wines/wines_index.php" class ="navBarButton">Wines</a>
						<a href="bottles/bottles_index.php" class ="navBarButton">Bottles</a><!-- table of all wines, with crud functions-->
						<a href="locations/locations_index.php" class ="navBarButton">Locations</a> <!--make drop downs for these-->
						<a href="#" class ="navBarButton">Buy more stickers</a><!-- this can be an alert and an email-->
						<a href="#" class ="navBarButton">Heatmap of wine locations</a>
					<!--	<input id= "wineName" type="wineSearch"></input>	-->
					</div>
				</div>	
				<div id="content">
					<fieldset>
					<legend>Bottle Input</legend>
						<form id="newWineForm" method="POST" action="wines/wines_create.php"> <!--i need to double check the submission--> 
							
							<p class="newWineInputPar"><label for="name">Name: </label><input id="wineName" type="text" class="newWineInput" name="new_name"/></p> <!--this name should point to a id of the wines table and therefore obtaining wine_id of bottles table-->
							
							<p class="newWineInputPar"><label for="vintage">Vintage: </label><input id="wineVintage" type="text" class="newWineInput"name="new_vintage"/></p>
							
							<p class="newWineInputPar"><label for="region">Region: </label><input id="wineRegion" type="text" class="newWineInput" name="new_region"/></p> 
							
							<p class="newWineInputPar"><label for="country">Country: </label><input id="wineCountry" type="text" class="newWineInput" name="new_country"/></p> 
							
							<p class="newWineInputPar"><label for="wineMaker/Vineyard">Wine Maker/Vineyard: </label><input id="wineMaker" type="text" class="newWineInput"name="new_wine_maker_or_vineyard"/></p> 
							
							<p class="newWineInputPar"><label for="supplier">Supplier: </label><input id="wineSupplier" type="text" class="newWineInput" name="new_supplier"/></p> 
							
							<p class="newWineInputPar"><label for="price">Price: </label><input id="winePrice" type="text" class="newWineInput"name="new_price"/></p> 
							
							<p class="newWineInputPar"><label for="lifeExpectancy">Life Expectancy: </label><input id="wineLowerLifeExpectancy" type="text" class="newWineInput" name="new_lower_life_expectancy"/> to 
							<input id="wineUpperLifeExpectancy" type="text" class="newWineInput" name="new_upper_life_expectancy"/></p> <!-- how should i do this? -->
							
							<p class="newWineInputPar"><label for="color">Color: </label><input id="wineColor" type="text" class="newWineInput" name="new_color"/></p> 
							
							<p class="newWineInputPar"><label for="grapeType">Grape Type: </label><input id="wineGrapeType" type="text" class="newWineInput" name="new_grape_type"/></p> <!---should i make this into select element with options? -->
							
							<p class="newWineInputPar"><label for="percentAlcohol">Percent Alcohol: </label><input id="winePercentAlcohol" type="text" class="newWineInput" name="new_percent_alcohol"/></p> 
							
							<p class="newWineInputPar"><label for="notes">Wine Notes: </label><textarea id="wineNotes" type="text" class="newWineInput" name="new_notes"> </textarea></p>
							
							<p class="newWineInputPar"><label for="location">Location: </label>
							<select id="wineLocation" type="text"> 
							<?php
							while($row = mysql_fetch_array($locations)){
								print("<option>".$row[room]." ".$row['container_number']."</option>");
							}
							?>
							</select></p>
							<p class="newWineInputPar"><label for="isOpen?">Is open?: </label> <!--default value should be false-->
							<select id="wineIsOpen" type="text" > 
								<option>closed</option>
								<option>open</option>
							</select></p>
							<p class="newWineInputPar"><label for="quantity">Quantity: </label><input id="wineQuantity" type="text" class="newWineInput"/></p> <!--make algorithm to make many instances of bottles of same wine-->
							<p id="wineSubmit"><input id="submit" value="Create" type="submit"/></p>
						</form>
					</fieldset>
				</div>
				<div id="footer">
					&copy <span id ="year"></span> Louis Schlessinger
				</div>
			</div>
		</body>
</html>