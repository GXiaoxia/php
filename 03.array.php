<?php 
	# array: 数组(存储一堆数据的集合,有效地存储资源)
	/*
		下标数组: 下标从0开始
		关联数组: 以第一个名字开头
	*/
	
# 下标数组
	/*$people = array("kevin","henry","hemiah");
	// echo,printf只能打印单个变量,不能打印数组
	echo $people[1];	// henry	
	// echo $people[3];	// 数组越界

	$ids = [1,2,3];
	echo $ids[2];

	$cars = ["honda","toyota","byd"];
	$cars[3] = "BMW";	// 添加数组
	echo $cars[3];		// BMW
	echo count($cars);	// 4,打印当前数组的个数

	# 打印数组的方法
	print_r($cars);

	# 万能打印方法
	var_dump($cars);*/

# 关联数组
	$people = array("henry"=>35,"bukcy"=>25,"emily"=>20);
	echo $people["emily"];		//20

	$ids = [22=>"henry",24=>"tim"];
	echo $ids[22];		//henry

	$ids[35] = "king";
	echo $ids[35];
	print_r($ids);

	# 观察
	$cars = ["honda","toyota","byd"];
	$cars[] = "bence";
	// print_r($cars);

	$ids[] = "john";
	print_r($ids);		// [22] => henry [24] => tim [35] => king [36] => john

	$people[] = 55;
	print_r($people);	// [henry] => 35 [bukcy] => 25 [emily] => 20 [0] => 55 

# 多维数组
	$cars = array(
		array("honda",20,10),
		array("dz",20,20),
		array("ford",15,10)
	);
	// $cars = [[],[],[]];
	echo $cars[2][1];	// 15
 ?>