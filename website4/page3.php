<?php 
	
	session_start();
	// $_SESSION['name'] = 'li';		// 改变SESSION存储的值
	$name = isset($_SESSION['name']) ? $_SESSION['name'] : 'name属性不存在' ;		// 获取SESSSION存储的值
	$email = isset($_SESSION['email']) ? $_SESSION['email'] : 'email属性不存在';
	
 ?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Page 3</title>
</head>
<body>
	<h2><?php echo $name; ?></h2>
	<h2><?php echo $email; ?></h2>
</body>
</body>
</html>