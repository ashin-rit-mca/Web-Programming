<html>
<head>
</head>
<body>
<form method="POST" action="">
<label for="fac">Enter the number:</label>
<input type="text" name="fac" required>
<input type="submit" value="Submit">
</form>
<?php
$fac=(int)$_POST['fac'];
if($fac<0)
{
	echo "Factorial not defined for negative number.";
}
else
{
	$res=1;
	for($i=1;$i<=$fac;$i++)
	{
		$res*=$i;
	}
	echo "The Factorial of $fac is $res";
}
?>
</body>
</html>
