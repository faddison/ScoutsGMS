<?php

$con = mysql_connect("localhost","root","seeq");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
mysql_select_db("scouts", $con);

$sql="UPDATE EventType
		SET description='$_POST[description]',
			fundraising='$_POST[FBit]'
		WHERE eventName='$_POST[eventName]'";

if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }

mysql_close($con);

   header( 'Location: ./show_eventtype.php' ) ;
  
?>
