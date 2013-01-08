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
					 FROM EventType
					 WHERE eventName = ".$key.";";
					 
  $query = mysql_query($data) or die("Couldn't execute query. ". mysql_error()); 
  $data2 = mysql_fetch_array($query); 
   
?> 

</head>

<body>

<script src="validate_eventtype.js"></script>

<table>
<form name="form_eventtype" action="update_eventtype.php" method="post"
			onsubmit="return validateForm()">

<tr>
<td>EventName</td>
<td><input type="text" name="eventName" readonly="readonly" value="<?php echo $data2['eventName']?>"/> </td>
</tr>

<tr>
<td>Description</td>
<td><input type="text" name="description" value="<?php echo $data2['description']?>"/> </td>
</tr>

<tr>
<td>Fundraising</td>
<td>
<div align="left"><br>
<input type="radio" name="FBit" value=1 checked> Yes
<input type="radio" name="FBit" value=0> No
</div>
</td>
</tr>

</table>
<br/>

<input type="submit" value="Submit" />
</form>

</body>

</html>
