<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>All Flights</title>
<link rel="stylesheet" type="text/css" href="allflights.css">
</head>
<body>
<?php
include 'connectdbairline.php';
?>
<h1>All Flights</h1>
<h2>Update Departure Times from List</h2>
<table>
<form action="updateTime.php" method="post">
<h3>Flights:</h3>
<?php
   $query = "SELECT * FROM Flight";
   $result = $connection->query($query);
   while ($row = $result->fetch()) {
        echo '<input type="radio" name="theFlights" value="';
		echo $row["FlightCode"] . " " . $row["AirlineCode"];
        echo '">' . $row["FlightCode"] . " " . $row["AirlineCode"] . "<br>";
   }
?>
</table>
<h1></h1>
<b>
Time: <input type="time" name="UpdatedTime"><br>
</b>
<h1></h1>
<input type="submit" value="Update Departure Time" id="submitbutton">
<?php
   $connection = NULL;
?>
</body>
</html>