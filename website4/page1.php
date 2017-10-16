<?php 
	
	if(isset($_POST['submit'])){
		// echo 12;
		session_start();
		$_SESSION['name'] = $_POST['name'];   // $_SESSION['name']中括号中的字符串随便起,不对应任何东西
		$_SESSION['email'] = $_POST['email'];

		header("Location: page2.php");		// 向客户端发送原始的HTTP报头
	}

 ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Page 1</title>
</head>
<body>
	<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
		<input type="text" name="name" placeholder="enter name">
		<input type="text" name="email" placeholder="enter email">
		<input type="submit" name="submit" value="提交">
	</form>
</body>
</html>