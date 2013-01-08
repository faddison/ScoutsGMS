<html>
<head>

<script src="validate_badgetype.js">
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
<form name="form_badgetype" action="input_badgetype.php" method="post"
			onsubmit="return validateForm()">

<tr>
<td>Badge Title</td>
<td><input type="text" name="badgeTitle"/> </td>
</tr>

<tr>
<td>Category</td> 
<td><input type="text" name="category"/> </td>
</tr>

<tr>
<td>Member Title</td>
<td><input type="text" name="memberTitle"/> </td>
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


