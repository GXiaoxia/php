<?php 

	$users = ["name" => "guo","email" => "11@qq.com","age" => 20];
	$users = serialize($users);		//将数组转化为字符串(字节流)
	setcookie('users',$users,time()+86400);

	$users = unserialize($_COOKIE['users']);	// 反解析
	print_r($users);
 ?>