<?php 
	
	session_start();
	$name = $_SESSION['name'];

	
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Page 2</title>
</head>
<body>
	<h2>你的名字是: <?php echo $name; ?></h2>
	<a href="page3.php">go to Page3</a>
</body>
</html>