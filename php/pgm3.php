<html>
<head>
</head>
<body>
<form method="POST" action="">
<label for="mark">Enter mark of student:</label>
<input type="text" name="marks" required>
<label for="tmark">Enter total marks obtained:</label>
<input type="text" name="tmark" required>
<input type="submit" value="Submit">
</form>
<?php
$m=(int)$_POST['marks'];
$tm=(int)$_POST['tmark'];
$p=$m/$tm*100;
if($p>=60)
{
	echo "First Division";
}
else if($p>=45)
{
	echo "Second Division";
}
else if($p>=33)
{
	echo "Third Division";
}
else
{
	echo "Failed";
}
?>
</body>
</html>
