<html>
<head>

<script src="validate_venue.js">
</script>

<style type="text/css">
table
{
width:500px;
}
</style>
</head>

<body>
<?php include_once("../menu.php"); ?> <br/>
<table>
<form name="form_venue" action="input_venue.php" method="post"
			onsubmit="return validateForm()">

<tr>
<td>Venue Name</td>
<td><input type="text" name="venueName"/> </td>
</tr>

<tr>
<td>Address Id</td> 
<td><input type="text" name="addressId"/> </td>
</tr>

<tr>
<td>Capacity</td>
<td><input type="text" name="capacity"/> </td>
</tr>

<tr>
<td>Description</td>
<td><input type="text" name="description"/> </td>
</tr>


</table>
<br/>
<input type="submit" value="Submit" />
</form>

</body>
</html>


