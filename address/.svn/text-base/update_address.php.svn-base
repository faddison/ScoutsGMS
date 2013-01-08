<?php

$con = mysql_connect("localhost","root","seeq");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
mysql_select_db("scouts", $con);

$sql="UPDATE Address
		SET street='$_POST[street]',
			postal='$_POST[postal]',
			phone1='$_POST[phone1]',
	        phone2='$_POST[phone2]',
	        email1='$_POST[email1]',
	        email2='$_POST[email2]',
	        contact1='$_POST[contact1]',
	        contact2='$_POST[constact2]'
		WHERE addressId='$_POST[addressId]'";

if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }

mysql_close($con);

   header( 'Location: ./show_address.php' ) ;
  
?>
