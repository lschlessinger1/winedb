<?php
print('	<div id="header">
		<p id="title">Wine Database</p>	
			<div id="navBar">
				<a href="../wine_db_home.php" class ="navBarButton">Home</a>
				<a href="../wines/wines_index.php" class ="navBarButton">Wines</a> 
				<a href="../bottles/bottles_index.php?page=home" class ="navBarButton">Bottles</a>
				<a href="#" class ="navBarButton">Buy more stickers</a>
				<a href="#" class ="navBarButton">Heatmap of wine locations</a>');
				print('<br style="clear:both;"/>
				<div id="content">
				<center>'); 
				include ('search/locations_search_form.php');
				print('</center>
				</div>');
	print('</div>
		</div>');
?>