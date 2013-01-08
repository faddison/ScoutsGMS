<html>
<body>
<?php 

include_once("../menu.php"); 

?> 

<?php
$con = mysql_connect("localhost","root","seeq");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("scouts", $con);

$result = mysql_query("SELECT * FROM BadgeType");


echo "<table border='1'>
<tr>
<th>badgeTitle</th>
<th>category</th>
<th>memberTitle</th>
<th>description</th>
</tr>";

while($row = mysql_fetch_array($result))
  {
  echo "<tr>";
  echo "<td>" . $row['badgeTitle'] . "</td>";
  echo "<td>" . $row['category'] . "</td>";
  echo "<td>" . $row['memberTitle'] . "</td>";
  echo "<td>" . $row['description'] . "</td>";
  
  echo "<td>" . "<a href=\"./modify_badgetype.php?id=".$row['badgeTitle']."\">Modify</a>" . "</td>";
	echo "<td>" . "<a href=\"./remove_badgetype.php?id=".$row['badgeTitle']."\">Remove</a>" . "</td>";
  
  echo "</tr>";
  }
echo "</table>";

mysql_close($con);
?>
