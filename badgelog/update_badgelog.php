<?php

$con = mysql_connect("localhost","root","seeq");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
mysql_select_db("scouts", $con);

$sql=	"UPDATE BadgeLog
	SET 	badgeTitle='$_POST[badge]',
		dateAwarded='$_POST[dateAwarded]',
		reason='$_POST[reason]'
	WHERE badgeId='$_POST[badgeId]'";

if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }

mysql_close($con);

   header( 'Location: ./show_badgelog.php' ) ;
  
?>


