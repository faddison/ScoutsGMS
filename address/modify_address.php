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
					 FROM Address
					 WHERE addressId = ".$key.";";
					 
  $query = mysql_query($data) or die("Couldn't execute query. ". mysql_error()); 
  $data2 = mysql_fetch_array($query); 
   
?> 

</head>

<body>

<script src="validate_address.js"></script>

<table>
<form name="form_address" action="update_address.php" method="post"
			onsubmit="return validateForm()">

<tr>
<td>street</td>
<td><input type="text" name="street" readonly="readonly" value="<?php echo $data2['street']?>"/> </td>
</tr>

<tr>
<td>postal</td>
<td><input type="text" name="postal" value="<?php echo $data2['postal']?>"/> </td>
</tr>

<tr>
<td>phone1</td> 
<td><input type="text" name="phone1" value="<?php echo $data2['phone1']?>"/> </td>
</tr>

<tr>
<td>phone2</td> 
<td><input type="text" name="phone2" value="<?php echo $data2['phone2']?>"/> </td>
</tr>

<tr>
<td>email1</td> 
<td><input type="text" name="email1" value="<?php echo $data2['email1']?>"/> </td>
</tr>

<tr>
<td>email2</td> 
<td><input type="text" name="email2" value="<?php echo $data2['email2']?>"/> </td>
</tr>

<tr>
<td>contact1</td> 
<td><input type="text" name="contact1" value="<?php echo $data2['contact1']?>"/> </td>
</tr>

<tr>
<td>contact2</td> 
<td><input type="text" name="contact2" value="<?php echo $data2['contact2']?>"/> </td>
</tr>

</table>
<br/>

<input type="submit" value="Submit" />
</form>

</body>

</html>
