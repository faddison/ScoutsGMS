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

$result = mysql_query("SELECT * FROM EventType");


echo 
"<table border='1'>
<tr>
<th>eventName</th>
<th>description</th>
<th>fundraising</th>
</tr>";

while($row = mysql_fetch_array($result))
  {
  echo "<tr>";
  echo "<td>" . $row['eventName'] . "</td>";
  echo "<td>" . $row['description'] . "</td>";
  echo "<td>" . $row['fundraising'] . "</td>";
  
  	echo "<td>" . "<a href=\"./modify_eventtype.php?id=".$row    ['eventName']."\">Modify</a>" . "</td>";
	echo "<td>" . "<a href=\"./remove_eventtype.php?id=".$row['eventName']."\">Remove</a>" . "</td>";
  
  echo "</tr>";
  }
echo "</table>";

mysql_close($con);
?>


