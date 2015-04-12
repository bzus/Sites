<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Second page</title>
</head>
<body>
	<a href="first_page">First Page</a>
	<pre>
	<?php 
		// print_r($_GET);
		$id=$_GET['id'];
		echo $id;
	 ?>
	</pre>
</body>
</html>
