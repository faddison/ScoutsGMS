<html>
<body>

<?php include_once("../menu.php"); ?> <br/>
<?php

$con = mysql_connect("localhost", "root", "seeq");
if(!$con)
{
  die('Could not connect: ' . mysql_error());
}    

mysql_select_db("scouts", $con);

$sql = "INSERT INTO MemberType(
    memberTitle,
    minAge,
    maxAge)
Values(
    '$_POST[memberTitle]',
    '$_POST[minAge]',
    '$_POST[maxAge]')";
    
if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }
echo "1 record added!";

mysql_close($con)
?>


</body>
</html>
