<?php
$result = $connection->query("select * from Airline");
echo "<ol>";
while ($row = $result->fetch()) {
	echo "<li>";
	echo $row["Name"]."</li>";
}
echo "</ol>";
?>