<html>
<head>
</head>
<body>
<form method="POST" action="">
<label for="b">Enter base of the triangle :</label>
<input type="text" name="b" required>
<label for="h">Enter height of the triangle :</label>
<input type="text" name="h" required>
<input type="submit" value="Submit">
</form>
<?php
$b=(int)$_POST['b'];
$h=(int)$_POST['h'];
$area=0.5*$b*$h;
echo "Area of Triangle is : $area";
?>
</body>
</html>
