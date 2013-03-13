<?php
include ('../../get_db.php');
	$bottle = mysql_fetch_array(mysql_query('SELECT * FROM bottles WHERE id = '.$_GET['id']));
?>
<html>
	<head>
		<title>Edit Bottle</title>
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
					<li><a href="../locations/locations_index.php">Location Index</a></li>
					<li><a href="../wines/wines_index.php">Wine Index</a></li>
				</ul>
			</div>
		</div>'
?>
		<?php 
			echo '<form id="bottle_form" action="bottles_update.php?id='.$bottle['id'].'" method="POST">'
		?>
			<ul>
				<li>
					<?php if($bottle['is_open'] == 0){
						echo 'closed';
					} else if ($bottle['is_open'] == 1){
						echo 'open';
					}?>
					<input type="radio" id="is_open" name="is_open" value="<?php 
					if($bottle['is_open'] == 0){
						echo 'closed';
					} else if ($bottle['is_open'] == 1){
						echo 'open';
					}
					?>" checked="checked"/>
					<?php if($bottle['is_open'] == 0){
						echo 'open';
					} else if ($bottle['is_open'] == 1){
						echo 'closed';
					}?>
					<input type="radio" id="is_open" name="is_open" value="<?php 
					if($bottle['is_open'] == 0){
						echo 'open';
					} else if ($bottle['is_open'] == 1){
						echo 'closed';
					}?>"/> 
				</li>
				<li>
					wine_id: <input id="wine_id" name="wine_id" value="<?php echo $bottle['wine_id']; ?>"/> 
				</li>
				<li>
					location_id: <input id="location_id" name="location_id" value="<?php echo $bottle['location_id']; ?>"/>
				</li>
				<input id="bottle_submit" type="submit" value="submit"/>
			</ul>
		</form>
		<?php include('../../footer.php'); ?>
	</body>
</html>
<?php mysql_close($connection); ?>