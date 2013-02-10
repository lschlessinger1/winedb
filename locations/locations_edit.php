<?php
$server = "localhost";
$username = "lschlessinger"; 
$password = "louis";
$connection = mysql_connect($server, $username, $password);
	if($connection == false){
		die("Oh no! Could not connect to the server! ".mysql_error());
	}
$db = mysql_select_db("wine_db", $connection);
	if ($db == false) {
		die("Yikes! Could not select that database! ".mysql_error());
	}
	$location = mysql_fetch_array(mysql_query('SELECT * FROM locations WHERE id = '.$_GET['id']));
?>
<html>
	<head>
		<title>Edit Location</title>
		<style type="text/css">
			form#location_form ul li { list-style-type: none; margin: 10px; }
		</style>
	</head>

	<body>
		<?php
echo 	'<style type="text/css">	
			div#container { padding: 40px; }
			div.header_sub { width: 100%; }
			div#bottom_half { background-color: #88E2E2; padding: 1px 0px 1px 0px; }
			ul#nav { text-align: center; }
			ul#nav > li { list-style-type: none; display: inline; padding: 0px 20px 0px 20px; }
			ul#nav > li > a, a.psuButton { text-decoration: none; color: black; padding: 5px;}
			ul#nav > li > a:hover, a.psuButton:hover { background-color: #C4C4C4;  border-radius: 10px; }
			
			h1.title { text-align: center; width: 100%; background-color: #C4C4C4 }
		</style>
		
		<script type="text/javascript" src="../jquery/js/jquery-1.7.2.min.js"></script>
		
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
			echo '<form id="location_form" action="locations_update.php?id='.$location['id'].'" method="POST">'
		?>
			<ul>
				<li>
					Room: <input id="room" name="room" value="<?php echo $location['room']; ?>"/> 
				</li>
				<li>
					Container Number: <input id="container_number" name="container_number" value="<?php echo $location['container_number']; ?>"/> 
				</li>
				<li>
					Notes: <textarea id="notes" name="notes" value="<?php echo $location['notes']; ?>"></textarea> 
				</li>
				<input id="location_submit" type="submit" value="submit"/>
			</ul>
		</form>
	</body>
</html>
<?php mysql_close($connection); ?>