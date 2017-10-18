<?php 
	// echo 'hello world';
	if(isset($_GET['name'])){
		echo 'your name is: ' .$_GET['name'];
	}

	# 1. 连接数据库
	// $conn = mysqli_connect('localhost','root','','ajaxtest');	//host,username,psw,dbname


	// if(isset($_POST['name'])){
	// 	// echo 'your name is: ' .$_POST['name'];
	// 	$name = $_POST['name'];
	// 	$query = "INSERT INTO users(name) VALUES('$name')";		//注: $name必须用单引号引起来
	// 	$result = mysqli_query($conn,$query);	// 对数据库执行一次查询

	// 	// "set names utf8";
	// 	if($result){
	// 		echo "数据插入成功";
	// 	}else{
	// 		echo "数据插入失败".mysqli_error($conn);
	// 	}
	// }
?>