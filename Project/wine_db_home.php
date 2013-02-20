<!DOCTYPE html>
<?php
include ('../get_db.php');
$wines = mysql_query('SELECT * FROM wines') or die("Could not perform query... ".mysql_error());
$locations = mysql_query('SELECT * FROM locations') or die("Could not perform query... ".mysql_error());
?>
<html>
	<head>
		<title>Wine Database</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="description" content="Home" />
		<link type="text/css" rel="stylesheet" href="home_style.css"/> 	
		<script type="text/javascript" src="javascript/jquery.js"></script>
		<script type="text/javascript" src="javascript/init.js"></script>
	</head>
		<body>
			<div id="wrapper">
				<?php include('../home_header.php'); ?>
				<div id="content">
					<center><p><label for="wineSearch">Search for a wine: </label><input id= "wineSearch"></input></p></center>
				</div>
				<?php include('../footer.php'); ?>
			</div>
		</body>
</html>