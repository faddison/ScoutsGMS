<html>
<head>

<?php 
$key = $_GET['id'];
$con = mysql_connect("localhost","root","seeq");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
mysql_select_db("scouts", $con);

	
	$data = "DELETE FROM EventType
					 WHERE eventName = ".$key.";";
					 
  $query = mysql_query($data) or die("Couldn't execute query. ". mysql_error()); 
   
   header( 'Location: ./show_eventtype.php' ) ;
   
?> 

</head>


</html>
