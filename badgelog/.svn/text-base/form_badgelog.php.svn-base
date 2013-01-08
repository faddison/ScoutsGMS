<html>
<head>
<?php include_once("../menu.php"); ?> <br/>
<script src="validate_badgelog.js">
</script>

<style type="text/css">
table
{
width:500px;
}
</style>
</head>

<body>

<table>
<form name="form_badgelog" action="input_badgelog.php" method="post"
			onsubmit="return validateForm()">

<tr>
<td>Youth</td>
<td>
<?php
$con = mysql_connect("localhost","root","seeq");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
mysql_select_db("scouts", $con);

$sql="SELECT youthId, CONCAT(lastName, ', ', firstName) as name
			FROM Youth
			ORDER BY lastName, firstName"; 
$result=mysql_query($sql); 

$options=""; 

while ($row=mysql_fetch_array($result)) { 

    $youthId=$row["youthId"]; 
    $name=$row["name"]; 
    $options.="<OPTION VALUE=\"$youthId\">".$name.'</option>';
} 
?>
<SELECT NAME=name> 
<OPTION VALUE=0>Choose 
<?php echo $options?>
</SELECT> 
<td/>
</tr>

<tr>
<td>Badge Title</td>
<td>
<?php

$sql="SELECT badgeTitle, concat(category, ', ', badgeTitle) as title
			FROM BadgeType
			ORDER BY category, badgeTitle"; 
$result=mysql_query($sql); 

$options=""; 

while ($row=mysql_fetch_array($result)) { 

    $badgeId=$row["badgeTitle"]; 
    $title=$row["title"]; 
    $options.="<OPTION VALUE=\"$badgeId\">".$title.'</option>';
} 
?>
<SELECT NAME=badge> 
<OPTION VALUE=0>Choose 
<?php echo $options?>
</SELECT> 
</td>
</tr>

<tr>
<td>Date Awarded (yyyy-mm-dd)</td>
<td><input type="text" name="dateAwarded"/> </td>
</tr>

<tr>
<td>Reason</td>
<td><input type="text" name="reason"/> </td>
</tr>
</table>

<br/>
<input type="submit" value="Submit" />
</form>

</body>
</html>


