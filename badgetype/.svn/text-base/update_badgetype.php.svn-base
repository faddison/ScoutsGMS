<?php

$con = mysql_connect("localhost","root","seeq");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
mysql_select_db("scouts", $con);

$sql="UPDATE BadgeType
		SET category='$_POST[category]',
			memberTitle='$_POST[memberTitle]',
			description='$_POST[description]'
		WHERE badgeTitle='$_POST[badgeTitle]'";

if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }

mysql_close($con);

   header( 'Location: ./show_badgetype.php' ) ;
  
?>
