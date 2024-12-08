<?php
	function calculateArea($width, $height){
		return $width * $height;
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Lab 5a Q3</title>
</head>
<body>
	<?php
		$width = 4;
		$height = 2;
		$area = calculateArea($width, $height);
		echo "<h3>The area of the rectangle with a width of $width and $height is $area</h3>";
	?>
</body>
</html>

