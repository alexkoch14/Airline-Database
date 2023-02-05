<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Average Daily Capacity</title>
</head>
<body>
<?php
include 'connectdbairline.php';
?>
<h1>Average Daily Capacity</h1>
<table>
<?php
	$theDay= $_POST["flightday"];
	$query = 'SELECT AVG(Capacity) AS avgSeat FROM Flight f, FlightDate d, Airplane a, Airplanetype apt WHERE d.DayOfWeek ="' . $theDay . '" and f.AirlineCode = d.AirlineCode and f.FlightCode = d.FlightCode and f.AirlineCode = d.AirlineCode and f.AirplaneID = a.ID and a.TypeName = apt.TypeName';
	$result=$connection->query($query);
    
    while ($row=$result->fetch()) {
	echo "<tr><td>".$row["avgSeat"]."</td></tr>";
    }
?>
</table>
<?php
   $connection = NULL;
?>
</body>
</html>