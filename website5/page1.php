<?php 
	// 监听用户是否触发了submit方法
	if(isset($_POST['submit'])){
		$username = $_POST['username'];
		setcookie('userName',$username,time()+3600);		//参数1:属性名(随便起),参数2:属性值,参数3:时间
		header("Location: page2.php");
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
		<input type="text" name="username" placeholder="enter your name">
		<input type="submit" value="Submit" name="submit">
	</form>
</body>
</html>