<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>First page</title>
</head>
<body>
	<?php $link_name="Second page" ?>
	<?php $id=2; ?>

	<a href="second_page.php?id=<?php echo $id; ?>"><?php echo $link_name; ?></a>
</body>
</html>