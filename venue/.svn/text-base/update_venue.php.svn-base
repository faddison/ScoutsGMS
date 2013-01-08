<?php

$con = mysql_connect("localhost","root","seeq");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
mysql_select_db("scouts", $con);

$sql="UPDATE Venue
		SET addressId='$_POST[addressId]',
			capacity='$_POST[capacity]',
			description='$_POST[description]'
		WHERE venueName='$_POST[venueName]'";

if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }

mysql_close($con);

   header( 'Location: ./show_venue.php' ) ;
  
?>
