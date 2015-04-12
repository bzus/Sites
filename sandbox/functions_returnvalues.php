<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Function: Return Values</title>
</head>
<body>

	<?php

		function add($val1, $val2) {
		$sum = $val1 + $val2;
		return $sum;
		}

		$result = add(3,4);
		echo $result;

	?>
</body>
</html>