<!DOCTYPE html>
<html lang="en">
<head>
	<title>Lab 5a Q1</title>
</head>
<body>
	<?php
		$name = "Piong Wei Xun";
		$matric_num = "DI220156";
		$course = "BIC21203 Web Development";
		$year_of_study = 3;
		$address = "15, Jln Kenangan 1, Tmn Kenangan 1, 84400 Muar, Johor.";
	?>
	<table>
		<tr>
			<td>Name : </td>
			<td><?php echo "$name"; ?></td>
		</tr>
		<tr>
			<td>Matric Number : </td>
			<td><?php echo $matric_num; ?></td>
		</tr>
		<tr>
			<td>Course : </td>
			<td><?php echo $course; ?></td>
		</tr>
		<tr>
			<td>Year Of Study : </td>
			<td><?php echo $year_of_study; ?></td>
		</tr>
		<tr>
			<td>Address : </td>
			<td><?= $address ?></td>
		</tr>
	</table>
</body>
</html>
