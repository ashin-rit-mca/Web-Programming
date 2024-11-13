<html>
<head>
</head>
<body>
<form method="POST" action="">
<label for="num1">Enter first number :</label>
<input type="text" name="num1" required>
<label for="num2">Enter second number :</label>
<input type="text" name="num2" required>
<input type="submit" value="Add">
</form>
<?php
$n1=(int)$_POST['num1'];
$n2=(int)$_POST['num2'];
$sum=$n1+$n2;
echo "Sum of $n1+$n2 is : $sum";
?>
</body>
</html>
