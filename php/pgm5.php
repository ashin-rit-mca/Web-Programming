<html>
<head>
</head>
<body>
<form method="POST" action="">
<label for="fac">Enter the number:</label>
<input type="text" name="num" required>
<input type="submit" value="Submit">
</form>
<?php
$n=(int)$_POST['num'];
if($n>0)
{
	echo "Positive Number";
}
else if($n==0)
{
	echo "Number is Zero.";
}
else
{
	echo "Negative Number";
}
?>
</body>
</html>
