<!DOCTYPE html>
<html dir="ltr" lang="en-US" >
	<head>
		<meta charset="UTF-8" />
		<title>Search</title>
		<script type="text/javascript">
			function updateFilter() {
				var x = document.getElementById("filter").value;
				document.getElementById('filterSpan').innerHTML = x;
			}
		</script>
	</head>
	<body>
		<form action="../search.php" method="get">
			<label id="searchLabel">Search <span id="filterSpan"></span>
				<input type="text" name="keyname"id="searchInput"/> <!--make autocomplete for this-->
			</label>
			<input type="submit" value="Search!" id="submit"/>
			<label for="filter" id="filterLabel">Filter </label>
				<select id="filter" type="text" name="filter" onchange="updateFilter();"> 
					<option value="all">All</option>
					<option value="wines">Wines</option>
					<option value="bottles">Bottles</option>
					<option value="locations">Locations</option>
				</select>
		</form>
	</body>
</html>