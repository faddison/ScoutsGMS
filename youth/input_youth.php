<?php

$con = mysql_connect("localhost","root","seeq");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
mysql_select_db("scouts", $con);

$sql="INSERT INTO Youth(
	firstName,
	lastName,
	since,
	birthDate,
	active) 
VALUES(
	'$_POST[firstName]',
	'$_POST[lastName]',
	'$_POST[since]',
	'$_POST[birthDate]',
	$_POST[ActiveBit])";

if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }

mysql_close($con);

   header( 'Location: ./form_youth.php' ) ;

?>
