<?php
print('	<div id="content" class="ui-widget-content ui-corner-all">
		<fieldset id="newBottleFieldset">			
		<legend>Bottle Input</legend>
			<form id="newBottleForm" method="POST" action="bottles_create.php" > 
				
				<p class="newWineInputPar"><label for="name">Name: </label><input id="wineName" type="text" class="newWineInput" name="new_name"/></p> <!--this name should point to a id of the wines table and therefore obtaining wine_id of bottles table-->
				
				<p class="newWineInputPar"><label for="vintage">Vintage: </label><input id="wineVintage" type="text" class="newWineInput"name="new_vintage"/></p>
				
				<p class="newWineInputPar"><label for="region">Region: </label><input id="wineRegion" type="text" class="newWineInput" name="new_region"/></p> 
				
				<p class="newWineInputPar"><label for="country">Country: </label><input id="wineCountry" type="text" class="newWineInput" name="new_country"/></p> 
				
				<p class="newWineInputPar"><label for="wineMaker/Vineyard">Wine Maker/Vineyard: </label><input id="wineMaker" type="text" class="newWineInput"name="new_wine_maker_or_vineyard"/></p> 
				
				<p class="newWineInputPar"><label for="supplier">Supplier: </label><input id="wineSupplier" type="text" class="newWineInput" name="new_supplier"/></p> 
				
				<p class="newWineInputPar"><label for="price">Price: </label><input id="winePrice" type="text" class="newWineInput"name="new_price"/></p> 
				
				<p class="newWineInputPar"><label for="lifeExpectancy">Life Expectancy: </label><input id="wineLowerLifeExpectancy" type="text" class="newWineInput" name="new_lower_life_expectancy"/> to 
				<input id="wineUpperLifeExpectancy" type="text" class="newWineInput" name="new_upper_life_expectancy"/></p> <!-- how should I do this? -->
				
				<p class="newWineInputPar"><label for="color">Color: </label><input id="wineColor" type="text" class="newWineInput" name="new_color"/></p> 
				
				<p class="newWineInputPar"><label for="grapeType">Grape Type: </label><input id="wineGrapeType" type="text" class="newWineInput" name="new_grape_type"/></p> <!---should I make this into select element with options? -->
				
				<p class="newWineInputPar"><label for="percentAlcohol">Percent Alcohol: </label><input id="winePercentAlcohol" type="text" class="newWineInput" name="new_percent_alcohol"/></p> 
				
				<p class="newWineInputPar"><label for="notes">Wine Notes: </label><textarea id="wineNotes" type="text" class="newWineInput" name="new_notes"> </textarea></p>
				
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
				<p class="newWineInputPar"><label for="quantity">Quantity: </label><input id="wineQuantity" type="text" class="newWineInput"/></p>
				<p id="wineSubmit"><input id="submit" value="Create" type="submit"/></p>
			</form>
		</fieldset>
	</div>');
?>
<!--
This is the new bottle w/ new wine
how should i do this?
	- create wine script then (create bottle script) quantity times?
	- 
-->