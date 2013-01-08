
<html>
<body>
<?php include_once("../menu.php"); ?> <br/>

<?php
$con = mysql_connect("localhost","root","seeq");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("scouts", $con);

$result = mysql_query("SELECT * FROM Venue");


echo "<table border='1'>
<tr>
<th>venueName</th>
<th>addressId</th>
<th>capacity</th>
<th>description</th>
</tr>";

while($row = mysql_fetch_array($result))
  {
	echo "<tr>";
	
	echo "<td>" . $row['venueName'] . "</td>";
	echo "<td>" . $row['addressId'] . "</td>";
	echo "<td>" . $row['capacity'] . "</td>";
	echo "<td>" . $row['description'] . "</td>";
  
  	echo "<td>" . "<a href=\"./modify_venue.php?id=".$row['venueName']."\">Modify</a>" . "</td>";
	echo "<td>" . "<a href=\"./remove_venue.php?id=".$row['venueName']."\">Remove</a>" . "</td>";
	
	echo "</tr>";
  
  }
echo "</table>";

mysql_close($con);

?>

