<?php
print('	
		<fieldset>			
		<legend>Bottle Input</legend>
			<form id="newWineForm" method="POST" action="wines/wines_create.php" > <!--i need to double check the submission--> 
				
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

				<p id="wineSubmit"><input id="submit" value="Create" type="submit"/></p>
			</form>
		</fieldset>
	');
?>