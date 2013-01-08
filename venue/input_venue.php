<?php

$con = mysql_connect("localhost","root","seeq");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
mysql_select_db("scouts", $con);

$sql="INSERT INTO Venue(
	venueName,
	addressId,
	capacity,
	description) 
VALUES(
	'$_POST[venueName]',
	'$_POST[addressId]',
	'$_POST[capacity]',
	'$_POST[description]')";

if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }

mysql_close($con);

   header( 'Location: ./form_venue.php' ) ;

?>
