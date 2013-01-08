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

	
	$data = "SELECT * 
					 FROM Venue
					 WHERE venueName = ".$key.";";
					 
  $query = mysql_query($data) or die("Couldn't execute query. ". mysql_error()); 
  $data2 = mysql_fetch_array($query); 
   
?> 

</head>

<body>

<script src="validate_venue.js"></script>

<table>
<form name="form_venue" action="update_venue.php" method="post"
			onsubmit="return validateForm()">

<tr>
<td>venueName</td>
<td><input type="text" name="venueName" readonly="readonly" value="<?php echo $data2['venueName']?>"/> </td>
</tr>

<tr>
<td>addressId</td> 
<td><input type="text" name="addressId" value="<?php echo $data2['addressId']?>"/> </td>
</tr>

<tr>
<td>capacity</td>
<td><input type="text" name="capacity" value="<?php echo $data2['capacity']?>"/> </td>
</tr>

<tr>
<td>description</td>
<td><input type="text" name="description" value="<?php echo $data2['description']?>"> </td>
</tr>


</table>
<br/>

<input type="submit" value="Submit" />
</form>

</body>

</html>
