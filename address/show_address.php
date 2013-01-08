<html>
<body>
<?php include_once("../menu.php"); ?> <br/>

<?php 
$con = mysql_connect("localhost","root","seeq");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("scouts", $con);

$result = mysql_query("SELECT * FROM Address");


echo 
"<table border='1'>
<tr>
<th>AddressId</th>
<th>Street</th>
<th>Postal</th>
<th>Phone1</th>
<th>Phone2</th>
<th>Email1</th>
<th>Email2</th>
<th>Contact1</th>
<th>Contact2</th>
</tr>";

while($row = mysql_fetch_array($result))
  {
  $addresskey = $row['addressId'];
  echo "<tr>";
  echo "<td>" . $row['addressId'] . "</td>";
  echo "<td>" . $row['street'] . "</td>";
	echo "<td>" . $row['postal'] . "</td>";
	echo "<td>" . $row['phone1'] . "</td>";
	echo "<td>" . $row['phone2'] . "</td>";
	echo "<td>" . $row['email1'] . "</td>";
	echo "<td>" . $row['email2'] . "</td>";
	echo "<td>" . $row['contact1'] . "</td>";
	echo "<td>" . $row['contact2'] . "</td>";
	
    
    echo "<td>" . "<a href=\"./modify_address.php?id=".$row['addressId']."\">Modify</a>" . "</td>";
	echo "<td>" . "<a href=\"./remove_addresse.php?id=".$row['addressId']."\">Remove</a>" . "</td>";


  echo "</tr>";
  }
echo "</table>";

mysql_close($con);
?>
