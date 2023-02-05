<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>New Flight</title>
<link rel="stylesheet" type="text/css" href="addflight.css">
</head>
<body>
<?php
include 'connectdbairline.php';
?>
<h1>New Flight</h1>
<table>
<form action="addFlight.php" method="post">
<h4>Airline</h4>
<?php
   $query = "SELECT * FROM Airline";
   $result = $connection->query($query);
   //echo "Choose Airline? </br>";
   while ($row = $result->fetch()) {
        echo '<input type="radio" name="theAirline" value="';
        echo $row["Code"];
        echo '">' . $row["Code"] . " " . $row["Name"] . "<br>";
   }
?>
<br>

<b>
Flight Number <input type="text" name="UserFlightNumber" maxlength="3"><br>
</b>
<br>

<h4>Departing Location</h4>
<?php
   $query = "SELECT * FROM Airport";
   $result = $connection->query($query);
   while ($row = $result->fetch()) {
        echo '<input type="radio" name="Departure" value="';
        echo $row["Code"];
        echo '">' . $row["Code"] . " - " . $row["Name"] . "<br>";
   }
?>
<br>

<h4>Arrival Location</h4>
<?php
   $query = "SELECT * FROM Airport";
   $result = $connection->query($query);
   while ($row = $result->fetch()) {
        echo '<input type="radio" name="Arrival" value="';
		echo $row["Code"];
        echo '">' . $row["Code"] . " - " . $row["Name"] . "<br>";
   }
?>
<br>

<h4>Departure Date</h4>
<input type="checkbox" name="day[]" value="Mon">Monday<br>
<input type="checkbox" name="day[]" value="Tue">Tuesday<br>
<input type="checkbox" name="day[]" value="Wed">Wednesday<br>
<input type="checkbox" name="day[]" value="Thu">Thursday<br>
<input type="checkbox" name="day[]" value="Fri">Friday<br>
<input type="checkbox" name="day[]" value="Sat">Saturday<br>
<input type="checkbox" name="day[]" value="Sun">Sunday<br>
<b>
<br>

Scheduled Departure: <input type="time" name="DepartTime">
<br>
Scheduled Arrival: <input type="time" name="ArriveTime">
<br>
Airplane ID (if known): <input type="text" name="Planeid" maxlength="10">
<br>
</b>
<input type="submit" value="Create Flight" id="submitbutton">
</form>
</table>
<?php
   $connection = NULL;
?>
</body>
</html>