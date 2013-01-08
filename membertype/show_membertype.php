
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

$result = mysql_query("SELECT * FROM MemberType");


echo "<table border='1'>
<tr>
<th>memberTitle</th>
<th>minAge</th>
<th>maxAge</th>
</tr>";

while($row = mysql_fetch_array($result))
  {
  echo "<tr>";
  echo "<td>" . $row['memberTitle'] . "</td>";
  echo "<td>" . $row['minAge'] . "</td>";
	echo "<td>" . $row['maxAge'] . "</td>";
  echo "</tr>";
  }
echo "</table>";

mysql_close($con);
?>

