
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

$result = mysql_query("SELECT * FROM BadgeLog");


echo 
"<table id=\"main\">
<tr>
<th>badgeId</th>
<th>youthId</th>
<th>badgeTitle</th>
<th>dateAwarded</th>
<th>reason</th>
</tr>";

$count = 0;

while($row = mysql_fetch_array($result))	
  {
  
  if ($count % 2 == 0)
  	echo "<tr class=\"alt\">";
  else
  	echo "<tr>";

	echo "<td>" . $row['badgeId'] . "</td>";
	echo "<td>" . $row['youthId'] . "</td>";
        echo "<td>" . $row['badgeTitle'] . "</td>";
	echo "<td>" . $row['dateAwarded'] . "</td>";
	echo "<td>" . $row['reason'] . "</td>";
		     
	echo "<td>" . "<a href=\"./modify_badgelog.php?id=".$row['badgeId']."\">Modify</a>" . "</td>";
	echo "<td>" . "<a href=\"./remove_badgelog.php?id=".$row['badgeId']."\">Remove</a>" . "</td>";
	
  echo "</tr>";

  $count++;
  }
echo "</table>";

mysql_close($con);
?>
