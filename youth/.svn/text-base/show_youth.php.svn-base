
<html>

<head>
<LINK REL=StyleSheet HREF="../styles.css" TYPE="text/css" MEDIA="screen">
<style type="text/css">
#main
{
border-collapse:collapse;
}
</style>
</head>

<body link="black">

<?php 

include_once ('../menu.php');


?> 

<?php
$con = mysql_connect("localhost","root","seeq");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("scouts", $con);

$result = mysql_query("SELECT * FROM Youth");


echo 
"<table id=\"main\">
<tr>
<th>youthId</th>
<th>firstName</th>
<th>lastName</th>
<th>since</th>
<th>birthDate</th>
<th>active</th>
<th>addressId</th>
<th></th>
<th></th>
</tr>";

$count = 0;

while($row = mysql_fetch_array($result))	
  {
  
  if ($count % 2 == 0)
  	echo "<tr class=\"alt\">";
  else
  	echo "<tr>";
  	
  echo "<td>" . $row['youthId'] . "</td>";
  echo "<td>" . $row['firstName'] . "</td>";
	echo "<td>" . $row['lastName'] . "</td>";
	echo "<td>" . $row['since'] . "</td>";
	echo "<td>" . $row['birthDate'] . "</td>";
	echo "<td>" . $row['active'] . "</td>";
	echo "<td>" . $row['addressId'] . "</td>";
		     
	echo "<td>" . "<a href=\"./modify_youth.php?id=".$row['youthId']."\">Modify</a>" . "</td>";
	echo "<td>" . "<a href=\"./remove_youth.php?id=".$row['youthId']."\">Remove</a>" . "</td>";
	
  echo "</tr>";
  $count++;
  }
echo "</table>";

mysql_close($con);
?>

</body>
</html>

