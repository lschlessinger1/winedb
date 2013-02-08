<!DOCTYPE html>
<?php
/*$server = "localhost"; #temporary
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
$result = mysql_query('SELECT * FROM wines WHERE id = '.$_GET['id']) or die("Could not perform query... ".mysql_error());
mysql_close($connection);

*/
?>
<html>
	<head>
		<title>Wine Database</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="description" content="Home" />
		<link type="text/css" rel="stylesheet" href="wine_db_style.css"/> 		
		<script type="text/javascript" src="hide.js">
		</script>
	</head>
		<body>
			<div id="wrapper">
				<div id="header">
				<p id="title">Wine Database</p>	
					<script type="text/javascript" src ="jquery.js"></script>
					<script type="text/javascript" src ="init.js"></script>
					<div id="navBar">
						<a href="ListAll.php" class ="navBarButton">List all wines</a><!-- table of all wines, with crud functions-->
						<a href="#" class ="navBarButton">Buy more stickers</a><!-- this can be an alert and an email-->
						<a href="#" class ="navBarButton">Heatmap of wine locations</a>
					<!--	<input id= "wineName" type="wineSearch"></input>	-->
					</div>
				</div>	
				<div id="content">
					<fieldset>
						<form method="post" action="#"> <!-- make this form straight-->
							
							<p class="newWineInput"><label for="name">Name: </label><input id="wineName" type="text" class="newWineInput"/></p> <!--this name should point to a id of the wines table and therefore obtaining wine_id of bottles table-->
							
							<p class="newWineInput"><label >Vintage: </label><input id="wineVintage" type="text" class="newWineInput"/></p>
							
							<p class="newWineInput"><label >Region: </label><input id="wineRegion" type="text" class="newWineInput"/></p> 
							
							<p class="newWineInput"><label >Country: </label><input id="wineCountry" type="text" class="newWineInput"/></p> 
							
							<p class="newWineInput"><label >Wine Maker/Vineyard: </label><input id="wineMaker" type="text" class="newWineInput"/></p> 
							
							<p class="newWineInput"><label >Supplier: </label><input id="wineSupplier" type="text" class="newWineInput"/></p> 
							
							<p class="newWineInput"><label >Price: </label><input id="winePrice" type="text" class="newWineInput"/></p> 
							
							<p class="newWineInput"><label >Life Expectancy: </label><input id="wineLifeExpectancy" type="text" class="newWineInput"/></p> <!-- how should i do this? it is a range of years --upperlimit and lower limit? -->
							
							<p class="newWineInput"><label >Color: </label><input id="wineColor" type="text" class="newWineInput"/></p> 
							
							<p class="newWineInput"><label >Grape Type: </label><input id="wineGrapeType" type="text" class="newWineInput"/></p> <!---should i make this into select element with options? -->
							
							<p class="newWineInput"><label >Percent Alcohol: </label><input id="winePercentAlcohol" type="text" class="newWineInput"/></p> 
							
							<p class="newWineInput"><label >Notes: </label><textarea id="wineNotes" type="text" class="newWineInput"> </textarea></p>
							
							<p class="newWineInput"><label >Location: </label>
							<select id="wineLocation" type="text"> 
								<option>kitchen_1</option>		<!--dynamically genereated by Php, make locations table-->
								<option>kitchen_2</option>
								<option>kitchen_3</option>
								<option>kitchen_fridge</option>
								<option>office_fridge</option>
								<option>garage</option>
							</select></p>
							<p class="newWineInput"><label >Is open?: </label> <!--default value should be false-->
							<select id="wineIsOpen" type="text" > 
								<option>closed</option>
								<option>open</option>
							</select></p>
							<p class="newWineInput"><label>Quantity: </label><input id="wineQuantity" type="text" class="newWineInput"/></p> <!--make algorithm to make many instances of bottles of same wine-->
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