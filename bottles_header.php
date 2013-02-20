<?php
print('	<div id="header">
			<p id="title">Wine Database</p>	
			<div id="navBar">
				<a href="../wine_db_home.php" class ="navBarButton">Home</a>
				<a href="../wines/wines_index.php" class ="navBarButton">Wines</a>
				<a href="../locations/locations_index.php" class ="navBarButton">Locations</a> <!--make drop downs for these-->
				<a href="#" class ="navBarButton">Buy more stickers</a><!-- this can be an alert and an email-->
				<a href="#" class ="navBarButton">Heatmap of wine locations</a>
				<label for="search">Search</label>
				<input id="wineName" type="wineSearch"></input><!--make this a drop down menu to say search by "_____" and then an input type text -->
			</div>
		</div>');
?>