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
					 FROM Youth
					 WHERE youthId = ".$key.";";
					 
  $query = mysql_query($data) or die("Couldn't execute query. ". mysql_error()); 
  $data2 = mysql_fetch_array($query); 
   
?> 

</head>

<body>

<script src="validate_youth.js"></script>

<table>
<form name="form_youth" action="update_youth.php" method="post"
			onsubmit="return validateForm()">

<tr>
<td>youthId</td>
<td><input type="text" name="youthId" readonly="readonly" value="<?php echo $data2['youthId']?>"/> </td>
</tr>

<tr>
<td>firstName</td>
<td><input type="text" name="firstName" value="<?php echo $data2['firstName']?>"/> </td>
</tr>

<tr>
<td>lastName</td> 
<td><input type="text" name="lastName" value="<?php echo $data2['lastName']?>"/> </td>
</tr>

<tr>
<td>since</td>
<td><input type="text" name="since" value="<?php echo $data2['since']?>"/> </td>
</tr>

<tr>
<td>birthDate</td>
<td><input type="text" name="birthDate" value="<?php echo $data2['birthDate']?>"> </td>
</tr>

<tr>
<td>Active</td>
<td>
<div align="left"><br>
<input type="radio" name="ActiveBit" value=1 checked> Yes
<input type="radio" name="ActiveBit" value=0> No
</div>
</td>
</tr>

</table>
<br/>

<input type="submit" value="Submit" />
</form>

</body>

</html>
