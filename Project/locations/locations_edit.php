<?php
include ('../../get_db.php');
	$location = mysql_fetch_array(mysql_query('SELECT * FROM locations WHERE id = '.$_GET['id']));
?>
<html>
	<head>
		<title>Edit Location</title>
	</head>
	<body>
		
		<?php  
echo 	'<style type="text/css">	
			form#location_form ul li { list-style-type: none; margin: 10px; }
			div#container { padding: 40px; }
			div.header_sub { width: 100%; }
			div#bottom_half { background-color: #00BFFF; padding: 1px 0px 1px 0px; }
			ul#nav { text-align: center; }
			ul#nav > li { list-style-type: none; display: inline; padding: 0px 20px 0px 20px; }
			ul#nav > li > a, a.psuButton { text-decoration: none; color: black; padding: 5px;}
			ul#nav > li > a:hover, a.psuButton:hover { background-color: #D8D8D8;  border-radius: 10px; }
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
		
		<script type="text/javascript" src="../jquery/js/jquery-1.7.2.min.js"></script>
		
		<div id="header">
			<div class="header_sub" id="bottom_half">
				<ul id="nav">
					<li><a href="../wine_db_home.php" class ="navBarButton">Home</a></li>
					<li><a href="../heatmap/heatmap.php">Heat Map</a></li>
					<li><a href="../wines/wines_index.php">Wine Index</a></li>
					<li><a href="../bottles/bottles_index.php">Bottle Index</a></li>
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
		<?php include('../../footer.php'); ?>
	</body>
</html>
<?php mysql_close($connection); ?>