<html>
<head>
</head>
<body>
<form method="POST" action="">
<label for="n">Enter the number:</label>
<input type="text" name="n" required>
<input type="submit" value="Submit">
</form>
<?php
$num=(int)$_POST['n'];
$n=$num;
$sum=0;
$digits=strlen((string)$num);
while($num>0)
{
	$digit=$num%10;
	$sum+=pow($digit,$digits);
	$num=(int)($num/10);
}
if($sum==$n)
{
	echo "$n is an Armstrong number";
}
else
{
	echo "$n is not an Armstrong number";
}
?>
</body>
</html>
