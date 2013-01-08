<?php

$con = mysql_connect("localhost", "root", "seeq");
if(!$con)
{
  die('Could not connect: ' . mysql_error());
}    

mysql_select_db("scouts", $con);

$sql = "INSERT INTO EventType(
    eventName,
    description,
    fundraising)
VALUES(
    '$_POST[eventName]',
    '$_POST[description]',
    '$_POST[fundraising]')";
    
if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }


mysql_close($con);
 
   header( 'Location: ./form_eventtype.php' ) ;

?>
