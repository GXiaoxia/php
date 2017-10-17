<?php 
	header('content-type:text/html;charset=utf-8'); 
	/*操作数据库
	 1.连接数据库
	 2.执行sql语句
	 3.获取数据并使用
	 4.断开连接 
	*/

	function selectData($sql){
		// 连接数据库
		$mysqli = new mysqli("localhost","root","","people");
		// 测试是否连接成功
		if($mysqli->connect_errno){
			die("连接失败".$mysqli->connect_error);
		}
		
		# 设置utf8
		$mysqli->query("set names utf8");
		# 执行sql语句
		$result = $mysqli->query($sql);

		// var_dump($result);
		if($result->num_rows){		// $result得到一个对象,num_rows将数组中的数据以行的形式显示
			// fetch_all()从数据库中拿到数据,将其转化为数组
			$data = $result->fetch_all(MYSQLI_ASSOC);	// 默认是下标数组,调用fetch_all()方法后为关联数组
			// print_r($data);
			echo json_encode($data);	// 将数组转化为JSON字符串
		}

		# 断开连接
		$mysqli->close();
	}

	// 准备sql语句
	$sql = "SELECT * FROM customers";
	selectData($sql);
 ?>