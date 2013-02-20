<!DOCTYPE html>
<?php
include ('../../get_db.php');
$result = mysql_query('SELECT * FROM locations WHERE id = '.$_GET['id']) or die("Could not perform query... ".mysql_error());
?>
<html>
	<head>
		<title>Show Location</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="description" content="Home" />
		<link type="text/css" rel="stylesheet" href="locations_style.css"/> 		
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js" type="text/javascript" charset="utf-8"></script>
		<script src="../javascript/zebra_rows.js" type="text/javascript" charset="utf-8"></script>
		<script type="text/javascript" src="../javascript/jquery.js"></script>
		<script type="text/javascript" src="../javascript/init.js"></script>
	</head>
		<body>
			<?php include('../../locations_header.php'); ?>	
			<div id="content">
			<?php
	print ("<table cellpadding='1' cellspacing='1' id='resultTable'>");
	print ("<thead>");
	print ("<tr>");
	print ("<th>Room</th>");
	print ("<th>Container Number</th>");
	print ("<th>Notes</th>");
	print ("<th>Edit</th>");
	print ("<th>Delete</th>");
	print ("</tr>");
	print ("</thead>");
	print ("<tbody>");
	while ($row = mysql_fetch_array($result)) {
		print ("<tr>");
		print ("<td>");
		print ("<a href='locations_show.php?id=".$row['id']."' class='showNameAnchor'>");
		print ($row['room']);
		print ("</a>");
		print ("</td>");
		print ("<td >");
		print ($row['container_number']);
		print ("</td>");
		print ("<td>");
		print ($row['notes']);
		print ("</td>");
		print ("<td>");
		print ("<a href='locations_edit.php?id=".$row['id']."' class='editButton'>");
		print ("EDIT");
		print ("</a>");
		print ("</td>");
		print ("<td>");
		print ("<a href='locations_delete.php?id=".$row['id']."' class='deleteButton'>");
		print ("DELETE");
		print ("</a>");
		print ("</td>");
		print ("</tr>");
		}
		print ("</tbody>");
		print ("</table>");
		mysql_close($connection);
		?>
			</div>
			<?php include('../../footer.php'); ?>
		</body>
</html>