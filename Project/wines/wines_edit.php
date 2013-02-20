<?php
include ('../../get_db.php');
	$wine = mysql_fetch_array(mysql_query('SELECT * FROM wines WHERE id = '.$_GET['id']));
?>
<html>
	<head>
		<title>Edit Location</title>
	</head>

	<body>
		<?php
echo 	'<style type="text/css">	
			form#wine_form ul li { list-style-type: none; margin: 10px; }
			div#container { padding: 40px; }
			div.header_sub { width: 100%; }
			div#bottom_half { background-color: #88E2E2; padding: 1px 0px 1px 0px; }
			ul#nav { text-align: center; }
			ul#nav > li { list-style-type: none; display: inline; padding: 0px 20px 0px 20px; }
			ul#nav > li > a, a.psuButton { text-decoration: none; color: black; padding: 5px;}
			ul#nav > li > a:hover, a.psuButton:hover { background-color: #C4C4C4;  border-radius: 10px; }
			div#footer {
				text-align:center;
				height:auto;
				background-color:#FF6200;
				width:100%;
				color:white;
				clear: both;
				position: relative;
				z-index: 10;
			}
		</style>
		
		
		
		<div id="header">
			<div class="header_sub" id="bottom_half">
				<ul id="nav">
					<li><a href="../heatmap/heatmap.php">Heat Map</a></li>
					<li><a href="../locations/locations_index.php">Location Index</a></li>
					<li><a href="../locations/locations_new.php">Upload New Location</a></li>
					<li><a href="../wines/wines_index.php">Sales Index</a></li>
					<li><a href="../wines/wines_new.php">Upload New Wine</a></li>
					<li><a href="../bottles/bottles_index.php">Bottle Index</a></li>
					<li><a href="../bottles/bottles_new.php">Upload New Bottle</a></li>
				</ul>
			</div>
		</div>'
?>
		<?php 
			echo '<form id="wine_form" action="wines_update.php?id='.$wine['id'].'" method="POST">'
		?>
			<ul>
				<li>
					Name: <input id="name" name="name" value="<?php echo $wine['name']; ?>"/> 
				</li>
				<li>
					Vintage: <input id="vintage" name="vintage" value="<?php echo $wine['vintage']; ?>"/> 
				</li>
				<li>
					Region: <input id="region" name="region" value="<?php echo $wine['region']; ?>"/> 
				</li>
				<li>
					Country: <input id="country" name="country" value="<?php echo $wine['country']; ?>"/> 
				</li>
				<li>
					Wine Maker/Vineyard: <input id="wine_maker_or_vineyard" name="wine_maker_or_vineyard" value="<?php echo $wine['wine_maker_or_vineyard']; ?>"/> 
				</li>
				<li>
					Supplier: <input id="supplier" name="supplier" value="<?php echo $wine['supplier']; ?>"/> 
				</li>
				<li>
					Price: <input id="price" name="price" value="<?php echo $wine['price']; ?>"/> 
				</li>
				<li>
					Lower Life Expectancy: <input id="lower_life_expectancy" name="lower_life_expectancy" value="<?php echo $wine['lower_life_expectancy']; ?>"/> 
				</li>
				<li>
					Upper Life Expectancy: <input id="upper_life_expectancy" name="upper_life_expectancy" value="<?php echo $wine['upper_life_expectancy']; ?>"/> 
				</li>
				<li>
					Color: <input id="color" name="color" value="<?php echo $wine['color']; ?>"/> 
				</li>
				<li>
					Grape Type: <input id="grape_type" name="grape_type" value="<?php echo $wine['grape_type']; ?>"/> 
				</li>
				<li>
					Percent Alcohol: <input id="percent_alcohol" name="percent_alcohol" value="<?php echo $wine['percent_alcohol']; ?>"/> 
				</li>
				<li>
					Wine Notes: <textarea id="notes" name="notes" value="<?php echo $wine['notes']; ?>"></textarea> 
				</li>
				<input id="location_submit" type="submit" value="submit"/>
			</ul>
		</form>
		<?php include('../../footer.php'); ?>
	</body>
</html>
<?php mysql_close($connection); ?>