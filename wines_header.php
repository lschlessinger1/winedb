<?php
print('<div id="header">
			<p id="title">Wine Database</p>	
			<div id="navBar">
					<a href="../wine_db_home.php" class ="navBarButton">Home</a>
					<a href="../bottles/bottles_index.php?page=home" class ="navBarButton">Bottles</a>
					<a href="../locations/locations_index.php" class ="navBarButton">Locations</a> 
					<a href="#" class ="navBarButton">Buy more stickers</a>
					<a href="#" class ="navBarButton">Heatmap of wine locations</a>');
				print('<br style="clear:both;"/>
				<div id="content">
				<center>'); 
				include ('search/wines_search_form.php');
				print('</center>
				</div>');
	print('</div>
		</div>');
?>