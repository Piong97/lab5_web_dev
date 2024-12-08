<?php
	$students = [
		[
			'name' => 'Alice',
			'program' => 'BIP',
			'age' => 21
		],
		[
			'name' => 'Bob',
			'program' => 'BIS',
			'age' => 20
		],
		[
			'name' => 'Raju',
			'program' => 'BIT',
			'age' => 22
		]
	];
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Lab 5a Q2</title>
	<style type="text/css">
		table, tr, th, td{
			border: 1px solid black;
		}
	</style>
</head>
<body>
	<table>
		<tr>
			<th>Name</th>
			<th>Program</th>
			<th>Age</th>
		</tr>
		<?php
			foreach ($students as $key => $value) {
				echo "<tr>
					<td>".$value['name']."</td>
					<td>".$value['program']."</td>
					<td>".$value['age']."</td>
				</tr>";
			}
		?>
	</table>
</body>
</html>