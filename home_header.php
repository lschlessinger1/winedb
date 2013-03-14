<?php
print('<div id="header">
	   <p id="title">Wine Database</p>	
			<div id="navBar">
				<ul class="topnav" id="cssdropdown">
					<li class="headlink">
					<a href="#" class="navBarButton">Wines</a>
						<ul class="subnav">
							<li><a href="wines/wines_index.php">Wines Index</a></li>
							<li><a href="wines/wines_new.php">Create New Wine</a></li>
						</ul>
					</li>
					<li class="headlink">
					<a href="#" class="navBarButton">Bottles</a> 	<!-- table of all wines, with crud functions-->
						<ul class="subnav">
							<li><a href="bottles/bottles_index.php?page=home">Bottles Index</a></li>
							<li class="subHeadLink">
								<li><a href="#">Create New Bottle</a>
									<ul class="subnav" id="hide">
										<li><a href="bottles/bottles_index.php?page=updateQuantity">Update Quantity of Existing Wine</a></li>
										<li><a href="bottles/bottles_index.php?page=newWine">Create New Bottles of New Wine</a></li>
									</ul>
								</li>
							</li>
						</ul>
					</li>	
					<li class="headlink">
					<a href="#" class ="navBarButton">Locations</a>		<!--make drop downs for these-->
						<ul class="subnav">
							<li><a href="locations/locations_index.php">Locations Index</a></li>
							<li><a href="locations/locations_new.php">Create New Location</a></li>
						</ul>
					</li> 	
					<li class="headlink"><a href="#" class ="navBarButton">Buy more stickers</a></li>		<!-- this can be an alert and an email-->
					<li class="headlink"><a href="#" class ="navBarButton">Heatmap of wine locations</a></li>
				</ul>
			</div>
		</div>	');
?>