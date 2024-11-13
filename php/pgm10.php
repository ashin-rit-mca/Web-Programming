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
$n=(int)$_POST['n'];
$sum=0;
$flag=0;
for($i=2;$i<$n;$i++)
{	
	$flag=1;
	for($j=2;$j<=sqrt($i);$j++)	
	{
		if($i%$j==0)
		{
			$flag=0;
			break;
		}
	}
if($flag==1)
{
	$sum+=$i;
}
}
	echo "The Sum of prime numbers less than $n is: $sum";
?>
</body>
</html>
