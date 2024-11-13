<html>
<head>
</head>
<body>
<form method="POST" action="">
<label for="array">Enter the numbers(comma seperated):</label>
<input type="text" name="array" required>
<input type="submit" value="Submit">
</form>
<?php
$array=$_POST['array'];
$arr=explode(',',$array);
rsort($arr);
echo "Array sorted in revevrse order: <pre>";
print_r($arr);
echo"</pre>";x
?>
</body>
</html>
