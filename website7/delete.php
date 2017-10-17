<?php 
	header('content-type:text/html;charset=utf-8'); 
	/*操作数据库
	 1.连接数据库
	 2.执行sql语句
	 3.获取数据并使用
	 4.断开连接 
	*/

	function deleteData($sql){
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

		if($result){
			echo "delete success";
		}else{
			echo "delete failed";
		}

		# 断开连接
		$mysqli->close();
	}

	// 准备sql语句
	$sql = "DELETE FROM customers WHERE id=7";
	deleteData($sql);
 ?>