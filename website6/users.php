<?php 
	# 连接数据库
	$conn = mysqli_connect('localhost','root','','student');
	# 查询数据
	$query = "SELECT * FROM class1";
	# 执行查询语句
	$result = mysqli_query($conn,$query);
	# 获取查询数据
	$users = mysqli_fetch_all($result,MYSQLI_ASSOC);	// 关联,_NUM 下标
	
	// print_r($users);
	echo json_encode($users);	// 将数组转化为JSON
	
 ?>