<div class="container">
	<?php 
		// 刚开始会报错
		// echo $_GET["userName"];
		// echo $_GET["userEmail"];

	# isset(var): 检测变量是否已设置并且非null
	# empty(var): 检查一个变量是否为空
	
		# $_GET
		// # 检查userName是否能获取到
		/*if(isset($_GET["userName"]) && isset($_GET['userEmail'])){	//判断有没有点击提交按钮
			// echo $_GET["userName"];
			$name = $_GET["userName"];
			$email = $_GET["userEmail"];
			echo $name." : ".$email;
		}*/

		# $_POST
		/*if(isset($_POST["userName"]) && isset($_POST['userEmail'])){	//判断有没有点击提交按钮
			// echo $_POST["userName"];
			$name = $_POST["userName"];
			$email = $_POST["userEmail"];
			if(!empty($name) && !empty($email)){
				echo $name." : ".$email;
			}
			print_r($_POST);
		}*/

		# $_REQUEST
		if(isset($_REQUEST["userName"]) && isset($_REQUEST['userEmail'])){	//判断有没有点击提交按钮
			// echo $_REQUEST["userName"];
			$name = $_REQUEST["userName"];
			$email = $_REQUEST["userEmail"];
			if(!empty($name) && !empty($email)){
				echo $name." : ".$email;
			}
			print_r($_REQUEST);
		}

	# 查询URL地址后面的参数(method必须是GET)
		// echo $_SERVER['QUERY_STRING'];
	?>
</div>

<!-- GET & POST 区别
	get效率更高
	get请求数据大小在2k~8k,post无限制
	get将输入信息直接拼接在url后面,post会打包发送,不可见
-->
<!-- PHP中获取input中的值的方法: $_GET $_POST $_REQUEST -->

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>GET & POST</title>
	<link rel="stylesheet" type="text/css" href="https://bootswatch.com/cosmo/bootstrap.min.css">
</head>
<body>
	<div class="container">
		<form action="10.get_post.php" method="GET">
			<div class="form-group">
				<label>Name</label>
				<input type="text" name="userName" class="form-control">
			</div>
			<br>
			<div class="form-group">
				<label>Email</label>
				<input type="email" name="userEmail" class="form-control">
			</div>
			<br>
			<input class="btn btn-primary btn-block" type="submit" value="提交">
		</form>

		<ul class="list-group">
			<li class="list-group-item">
				<a href="<?php echo $_SERVER['PHP_SELF']."?name=g"; ?>" class="btn btn-success btn-block">链接1</a>
			</li>
			<li class="list-group-item">
				<a href="<?php echo $_SERVER['PHP_SELF']."?name=l"; ?>" class="btn btn-info btn-block">链接2</a>
			</li>
		</ul>
		<h1>
			<?php if(isset($_GET['name'])){echo $_GET['name'];} ?>
		</h1>
	</div>
</body>
</html>
