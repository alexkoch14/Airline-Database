<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Airline Flights per Day</title>
	<link rel="stylesheet" type="text/css" href="ontimeflights.css">
</head>
<body>
<?php
include 'connectdbairline.php';
?>
<h1>Flights for the Day</h1>
<table>
<?php
	$whichAirline= $_POST["airlinecode"];
	$whichDay= $_POST["dayweek"];
	$query = 'SELECT f.FlightCode, f.AirlineCode, a1.City, a2.City AS City2 FROM Flight f, FlightDate d, Airport a1, Airport a2 WHERE f.AirlineCode = d.AirlineCode and f.FlightCode = d.FlightCode and d.DayOfWeek ="' . $whichDay . '"and f.AirlineCode ="' . $whichAirline . '"and f.DepartAirpt = a1.Code and f.ArriveAirpt = a2.Code';
	$result=$connection->query($query);
    
	if($result->rowCount() === 0){
		echo 'Nothing found';
	}
	else {
		echo "<table border='1'>
		<tr>
			<th>Flight Number</th>
			<th>Airline Code</th>
			<th>Departure City</th>
			<th>Arrival City</th>
		</tr>";
		while ($row=$result->fetch()) {
		echo "<tr><td>".$row["FlightCode"]."</td><td>".$row["AirlineCode"]."</td><td>".$row["City"]."</td><td>".$row["City2"]."</td></tr>";
		}
	}
?>
</table>
<?php
   $connection = NULL;
?>
</body>
</html>