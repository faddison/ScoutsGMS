<?php

$bid = $_GET['bid'];
$yid = $_GET['yid'];
$con = mysql_connect("localhost", "root", "seeq");
if(!$con)
{
  die('Could not connect: ' . mysql_error());
}    

mysql_select_db("scouts", $con);

$sql = "INSERT INTO BadgeLog(
    youthId,
    badgeTitle,
    dateAwarded,
    reason)
VALUES(
    '$_POST[name]',
    '$_POST[badge]',
    '$_POST[dateAwarded]',
    '$_POST[reason]')";
    
if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }


mysql_close($con);
 
   header( 'Location: ./form_badgelog.php' ) ;

?>
