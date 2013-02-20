<!DOCTYPE html>
<?php
include ('../../get_db.php');
$wines = mysql_query('SELECT * FROM wines') or die("Could not perform query... ".mysql_error());
$locations = mysql_query('SELECT * FROM locations ORDER BY room') or die("Could not perform query... ".mysql_error());
?>
<html>
	<head>
		<title>Wine Database</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="description" content="BottleIndex" />
		<link type="text/css" rel="stylesheet" href="bottles_style.css"/> 		
		<script type="text/javascript" src ="../javascript/jquery.js"></script>
		<script type="text/javascript" src ="../javascript/init.js"></script>
	</head>
		<body>
			<div id="wrapper">
				<?php include('../../bottles_header.php'); ?>
				<?php include('../../new_bottle.php'); ?>
				<?php include('../../footer.php'); ?>
			</div>
		</body>
</html>