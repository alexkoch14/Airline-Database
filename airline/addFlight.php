<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Add Flight to Database</title>
<link rel="stylesheet" type="text/css" href="addflight.css">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
</head>
<body>
<?php
   include 'connectdbairline.php';
?>
<ol>
<p>
<?php
   $whichAirline= $_POST["theAirline"];
   $theDeparture = $_POST["Departure"];
   $theArrival =$_POST["Arrival"];
   $theFlightNum = $_POST["UserFlightNumber"];
   $dayofweek = $_POST['day'];
   $Dtime = $_POST["DepartTime"];
   $Atime = $_POST["ArriveTime"];
   $PlaneID = $_POST["Planeid"];
   $query2 = 'INSERT INTO Flight values("' . $whichAirline . '","' . $theFlightNum . '","'. $PlaneID . '","'. $theArrival . '","'. $theDeparture . '","' . $Atime . '","'. $Dtime . '","'. $Atime . '","' . $Dtime . '")';
   $numRows = $connection->exec($query2);
   foreach($dayofweek as $day){
	   $query3 = 'INSERT INTO FlightDate values("' . $whichAirline . '","' . $theFlightNum . '","' . $day . '")';
	   $numRows3 = $connection->exec($query3);
   }
   echo "Your flight was added!";
   $connection = NULL;
?>
</p>
</ol>
</body>
</html>