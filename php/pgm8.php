<html>
<head>
</head>
<body>
<form method="POST" action="">
<label for="number">Enter the number to be checked :</label>
<input type="text" name="number" required>
<label for="n">Enter the number to check divisibility :</label>
<input type="text" name="n" required>
<input type="submit" value="Submit">
</form>
<?php
$number=(float)$_POST['number'];
$n=(float)$_POST['n'];
$rem=$number%$n;
if($rem==0)
{
	echo "$number is divisible by $n";
}
else
{
	echo "$number is not divisible by $n";
}
?>
</body>
</html>
