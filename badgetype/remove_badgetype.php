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

	
	$data = "DELETE FROM BadgeType
					 WHERE badgeTitle = ".$key.";";
					 
  $query = mysql_query($data) or die("Couldn't execute query. ". mysql_error()); 
   
   header( 'Location: ./show_badgetype.php' ) ;
   
?> 

</head>


</html>
