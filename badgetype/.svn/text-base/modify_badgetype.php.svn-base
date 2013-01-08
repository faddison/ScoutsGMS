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
					 FROM BadgeType
					 WHERE badgeTitle = ".$key.";";
					 
  $query = mysql_query($data) or die("Couldn't execute query. ". mysql_error()); 
  $data2 = mysql_fetch_array($query); 
   
?> 

</head>

<body>

<script src="validate_badgetype.js"></script>

<table>
<form name="form_badgetype" action="update_badgetype.php" method="post"
			onsubmit="return validateForm()">

<tr>
<td>badgeTitle</td>
<td><input type="text" name="badgeTitle" readonly="readonly" value="<?php echo $data2['badgeTitle']?>"/> </td>
</tr>

<tr>
<td>category</td>
<td><input type="text" name="category" value="<?php echo $data2['category']?>"/> </td>
</tr>

<tr>
<td>memberTitle</td> 
<td><input type="text" name="memberTitle" value="<?php echo $data2['memberTitle']?>"/> </td>
</tr>



</table>
<br/>

<input type="submit" value="Submit" />
</form>

</body>

</html>
