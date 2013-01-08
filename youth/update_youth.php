<?php

$con = mysql_connect("localhost","root","seeq");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
mysql_select_db("scouts", $con);

$sql="UPDATE Youth
		SET firstName='$_POST[firstName]',
			middleName='$_POST[middleName]',
			lastName='$_POST[lastName]',
			birthDate='$_POST[birthDate]',
			active=$_POST[ActiveBit]
		WHERE youthId='$_POST[youthId]'";

if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }

mysql_close($con);

   header( 'Location: ./show_youth.php' ) ;
  
?>
