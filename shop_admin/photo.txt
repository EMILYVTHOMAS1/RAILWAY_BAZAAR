<?php

if(isset($_POST['b1']))
{

$f=$_FILES['f1']['name'];

if(move_uploaded_file($_FILES['f1']['tmp_name'],getcwd()."\\img\\$f"))
{

echo"Upload Complete";
}
else
{
echo"error";
}
}

?>

<html>
<head>
<title>photo Upload</title>
</head>
<body>
<center>
    <h3>Photo Upload</h3>
</center>
<br/>
<form method="post" enctype="multipart/form-data">

<table>

<tr>
<td>Photo</td>
<td><input type="file"name="f1"></td>
</tr>

<tr>
<td></td>
<td><input type="submit"value="Register"name="b1"></td>
</tr>
</table>

</form>
</body>
</html>
