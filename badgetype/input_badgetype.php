<?php

$con = mysql_connect("localhost","root","seeq");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
mysql_select_db("scouts", $con);

$sql="INSERT INTO Youth(
	badgeTitle,
	category,
	memberTitle,
	description)

VALUES(
	'$_POST[badgeTitle]',
	'$_POST[category]',
	'$_POST[memberTitle]',
	'$_POST[description]')";


if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }

mysql_close($con);

   header( 'Location: ./form_badgetype.php' ) ;

?>
