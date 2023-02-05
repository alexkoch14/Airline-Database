<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Update Arrival Time</title>
<link rel="stylesheet" type="text/css" href="allflights.css">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
</head>
<body>
<?php
include 'connectdbairline.php';
?>
<table>
<p>
<?php
	$whichTime= $_POST["UpdatedTime"];
	$whichFlightCode= $_POST["theFlights"];
	$pieces = explode(" ", $whichFlightCode);
	$query = 'UPDATE Flight SET ADepart = "' . $whichTime . '" WHERE FlightCode = "' . $pieces[0] . '" and AirlineCode = "' . $pieces[1] . '"';
	$result=$connection->query($query);
	echo "The Departure Time Was Successfully Updated";
?>
</p>
</table>
<?php
   $connection = NULL;
?>
</body>
</html>