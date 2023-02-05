<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>On Time Flights</title>
	<link rel="stylesheet" type="text/css" href="ontimeflights.css">
</head>
<body>
<?php
include 'connectdbairline.php';
?>
<h1>On Time Flights</h1>
<table>
<?php
   $query = 'SELECT * FROM Flight WHERE SArrival = AArrival';
   $result=$connection->query($query);

	if($result->rowCount() === 0){
		echo 'All Flights are Delayed';
	}
	else{
		echo "<table border='1'>
		<tr>
			<th>Flight Number</th>
			<th>Airline Code</th>
			<th>Scheduled Arrival</th>
			<th>Actual Arrival</th>
		</tr>";
		while ($row=$result->fetch()) {
		echo "<tr><td>".$row["FlightCode"]."</td><td>".$row["AirlineCode"]."</td><td>".$row["SArrival"]."</td><td>".$row["AArrival"]."</td></tr>";
		}
	}																					
?>
</table>
<?php
   $connection = NULL;
?>
</body>
</html>