
<html>
<body>
<?php include_once("menu.php"); ?> <br/>
<?php
$con = mysql_connect("localhost","root","seeq");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
mysql_select_db("scouts", $con);

$sql="INSERT INTO Address(
	street,
	postal,
	phone1,
	phone2,
	email1,
	email2,
	contact1,
	contact2) 
VALUES(
	'$_POST[street]',
	'$_POST[postal]',
	'$_POST[phone1]',
	'$_POST[phone2]',
	'$_POST[email1]',
	'$_POST[email2]',
	'$_POST[contact1]',
	'$_POST[contact2]')";

if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }
echo "1 record added!";

mysql_close($con)
?>

</body>
</html>
