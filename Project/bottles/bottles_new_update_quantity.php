<?php
include ('../../get_db.php');
$locations = mysql_query('SELECT * FROM locations ORDER BY room') or die ("Could not perform query... ".mysql_error());
print('	<div id="content" class="ui-widget-content ui-corner-all">
		<fieldset id="newBottleFieldset">			
		<legend>Bottle Input</legend>
			<form id="newBottleForm" method="POST" action="bottles_update_quantity.php" > 
				
				<p class="newWineInputPar"><label for="get_name">Wine: </label><input id="wineId" type="text" class="newWineInput" name="get_name"/></p> <!--this name should point to a id of the wines table and therefore obtaining wine_id of bottles table-->
				
				<p class="newWineInputPar"><label for="location">Location: </label>
				
				<select id="wineLocation" type="text" name="new_location_id"> 
				');
				while($row = mysql_fetch_array($locations)){
					print("<option value=".$row["id"].">".$row[room]." ".$row["container_number"]."</option>");
				}
				print('	
				</select></p>
				<p class="newWineInputPar"><label for="isOpen?">Is open?: </label> <!--default value should be false-->
				<select id="wineIsOpen" type="text" name="new_is_open"> 
					<option>closed</option>
					<option>open</option>
				</select></p>
				<p class="newWineInputPar"><label for="quantity">Quantity: </label><input id="wineQuantity" type="text" name="new_quantity" class="newWineInput"/></p>
				<p id="wineSubmit"><input id="submit" value="Create" type="submit"/></p>
			</form>
		</fieldset>
	</div>');
	//create new bottles of existing wine (already in db) updating the quantity
	//how can I pass the wine_id for the value in name of wine like i did with locations
?>