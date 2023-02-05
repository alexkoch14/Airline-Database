<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Airline</title>
	<link rel="stylesheet" type="text/css" href="homepage.css">
</head>
<body>
<?php
include 'connectdbairline.php';
?>
<ul>
	<li><img src="AirplaneLogo.png" alt="AirlineLogo" width="85" height="85"></li>
	<li><a href="allFlights.php">All Flights</a></li>
	<li><a href="newFlight.php">New Flight</a></li>
	<li><a href="getOnTimeFlights.php">On Time Flights</a></li>
</ul>

    <h1>Welcome to Sky Master!</h1>
	<h2>Explore New Horizions</h2>

	<h3>Flight Passenger Availability</h3>

<form action="seatAvg.php" method="post">
	Day of Week: <input type="text" name="flightday">
	<input type="submit" value="Average Capacity">
</form>

<h3>Flight Lookup</h3>
<form action="getAirlineDay.php" method="post">
	Airline Code: <input type="text" name="airlinecode">
	<br>
	Day of Week: <input type="text" name="dayweek">
	<br>
	<input type="submit" value="Find Flights">
</form>
	<h2> </h2>
	<img src="BlueSky.jpeg" alt="sky" width="1000" height="400">
	<h2> </h2>
<?php
$connection = NULL;
?>
</body>
</html>