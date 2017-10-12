<div class="container">
	<?php 
		/*
	# filter_has_var(类型,变量名): 检测是否存在指定类型的变量,类型: INPUT_GET,INPUT_POST,INPUT_COOKIE,INPUT_SERVER,INPUT_ENV
	# filter_var(变量,): 使用特定的过滤器过滤一个变量

		# 检查是否存在data的name属性
		if(filter_has_var(INPUT_POST,"data")){	
			// echo "data存在";
			$email = $_POST["data"];
			// echo $email;
			# 过滤掉不合法的字符
			$email = filter_var($email,FILTER_SANITIZE_EMAIL);
			echo $email;		// 输出的是邮箱中的合法字符
			# 验证是否是一个有效的邮箱
			if(filter_var($email,FILTER_VALIDATE_EMAIL)){
				echo "邮箱合法";
			}else{
				echo "邮箱不合法";
			}
		}else{
			echo "data不存在";
		}*/

		# 练习: 验证一个变量中的值,是否是合法的整型
		/*$var = '22';	// 注: 字符串中为数字也合法,输入的是0,返回not int
		if(filter_var($var,FILTER_VALIDATE_INT)){
			echo "int";
		}else{
			echo "not int";
		}*/

		# 获取字符串中所有的数值
		/*$var = "dg3423wkjdaksld7h00g3";
		$num = filter_var($var,FILTER_SANITIZE_NUMBER_INT);
		echo $num;*/

		# 特殊字符
	/*	$var = "<script>alert(1)</script>";
		// echo $var;		// 弹出1
		echo filter_var($var,FILTER_SANITIZE_SPECIAL_CHARS);	// 不弹出1,直接输出字符串*/

		# 验证数组中每个元素
		/*$filters = array(
			"data" => FILTER_VALIDATE_EMAIL,
			"data2" => array(
				'filter' => FILTER_VALIDATE_INT,	//filter,options等都是规定好的
				'options' => array(
					'min_range' => 1,
					'max_range' => 150
				)
			)
		);
		print_r(filter_input_array(INPUT_POST,$filters));*/

		/*# 验证form表单中两个input的内容
		# 第一个input一定是email
		if(filter_has_var(INPUT_POST,"data")){
			$val1 = $_POST["data"];
			if(filter_var($val1,FILTER_VALIDATE_EMAIL)){
				echo $val1;
			}else{
				echo "not email";
			}
		}else{
			echo "";
		}
		
		# 第二个input一定是数值,并且数值不能小于1大于150
		if(filter_has_var(INPUT_POST,"data2")){
			$val2 = $_POST["data2"];
			if(filter_var($val2>=1 && $val2<=150,FILTER_VALIDATE_INT)){
				echo "合法";
			}else{
				echo "不合法";
			}
		}else{
			echo '';
		}*/


		$arr = array(
			"name" => "henry",
			"age" => "30",
			"email" => "11@qq.com"
		);
		$filters = array(
			"name" =>  array(
				"filter" => FILTER_CALLBACK,	// 调用options的value
				"options" => "ucwords"
			),
			"age" => array(
				"filter" => FILTER_VALIDATE_INT,
				"options" => array(
					"min_range" => 1,
					"max_range" => 100
				)
			),
			"email" => FILTER_VALIDATE_EMAIL
		);
		print_r(filter_var_array($arr,$filters));	//不匹配的值不输出
		
		/*
		审核(过滤)
		FILTER_SANITIZE_EMAIL
		FILTER_SANITIZE_ENCODED
		FILTER_SANITIZE_MAGIC_QUOTES
		FILTER_SANITIZE_NUMBER_FLOAT
		FILTER_SANITIZE_NUMBER_INT
		FILTER_SANITIZE_SPECIAL_CHARS
		FILTER_SANITIZE_FULL_SPECIAL_CHARS
		FILTER_SANITIZE_STRING
		FILTER_SANITIZE_STRIPPED
		FILTER_SANITIZE_URL
		FILTER_UNSAFE_RAW
		
		验证
		FILTER_VALIDATE_BOOLEAN
		FILTER_VALIDATE_EMAIL
		FILTER_VALIDATE_FLOAT
		FILTER_VALIDATE_INT
		FILTER_VALIDATE_IP
		FILTER_VALIDATE_MAC
		FILTER_VALIDATE_REGEXP
		FILTER_VALIDATE_URL
	*/
	 ?>
</div>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Filters / 过滤器</title>
	<!-- <link rel="stylesheet" type="text/css" href="https://bootswatch.com/cosmo/bootstrap.min.css"> -->
</head>
<body>
	<br>
	<div class="container">
		<form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
			<input type="text" name="data" class="form-control">
			<br>
			<input type="text" name="data2" class="form-control">
			<br>
			<button class="btn btn-primary btn-block" type="submit">提交</button>
		</form>
	</div>
</body>
</html>