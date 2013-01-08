<html>
<head>
<?php include_once("menu.php"); ?> <br/>
<script src="validate_address.js">
</script>

<style type="text/css">
table
{
width:500px;
}
</style>
</head>

<body>

<table>
<form name="form_address" action="input_address.php" method="post"
			onsubmit="return validateForm()">

<tr>
<td>City</td>
<td> <?php
// array contents
$array1 = array('Vancouver', 'Richmond', 'Burnaby');
echo '<select name="cities">';
foreach ($array1 as $city) 
{
echo '<option value="'.$city.'">'.$city.'</option>';
}
echo '</select>';
?> <td/>
</tr>
<tr>
<td>Street</td>
<td><textarea name="street" rows="2" cols="17"> </textarea> </td>
</tr>
<tr>
<td>Postal</td>
<td><input type="text" name="postal"/> </td>
</tr>
<tr>
<td>Phone1</td>
<td><input type="text" name="phone1"/> </td>
</tr>
<tr>
<td>Phone2</td> 
<td><input type="text" name="phone2"/> </td>
</tr>
<tr>
<td>Email1</td>
<td><input type="text" name="email1"/> </td>
</tr>
<tr>
<td>Email1</td>
<td><input type="text" name="email2"/> </td>
</tr>
<tr>
<td>Contact1</td>
<td><input type="text" name="contact1"/> </td>
</tr>
<tr>
<td>Contact2</td>
<td><input type="text" name="contact2"/> </td>
</tr>
</table>
<br/>
<input type="submit" value="Submit" />
</form>

</body>
</html>


