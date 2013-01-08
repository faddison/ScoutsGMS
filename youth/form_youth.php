<html>
<head>

<script src="validate_youth.js">
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
<form name="form_youth" action="input_youth.php" method="post"
			onsubmit="return validateForm()">

<tr>
<td>First Name</td>
<td><input type="text" name="firstName"/> </td>
</tr>

<tr>
<td>Last Name</td> 
<td><input type="text" name="lastName"/> </td>
</tr>

<tr>
<td>Member Since (dd-mm-yyyy)</td>
<td><input type="text" name="since"/> </td>
</tr>

<tr>
<td>Date of Birth (dd-mm-yyyy)</td>
<td><input type="text" name="birthDate"/> </td>
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


