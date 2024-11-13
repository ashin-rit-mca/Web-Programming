<html>
<head>
</head>
<body>
<form method="POST" action="">
<label for="email">Enter your email address:</label>
<input type="email" name="email" required>
<input type="submit" value="Submit">
</form>
<?php
$email=$_POST['email'];
$u=strstr($email,'@',true);
if($u)
{
echo"Username:$u";
}
else
{
echo"Enter a valid email address";
}
?>
</body>
</html>
