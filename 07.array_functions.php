<?php 
	$array = array("henry","bucky","emily");
	# 计算数组个数 count
	echo count($array)."<br>";
	# 将数组开头的单元移出数组 array_shift
	$newArray = array_shift($array);
	print_r($newArray);
	echo "<br>";
	# 在数组开头插入一个或多个单元 array_unshift
	array_unshift($array,"hemiah");
	print_r($array);
	echo "<br>";
	# 将一个或多个单元压入数组的末尾（入栈）array_push
	array_push($array,"john");
	print_r($array);
	echo "<br>";
	# 弹出数组最后一个单元（出栈） array_pop
	array_pop($array);
	print_r($array);
	echo "<br>";
	# 数组排序 sort
	$values = array(22,35,22,11,9,'a');
	sort($values);	//asc码排序
	print_r($values);
	echo "<br>";
	# 数组转字符串 implode
	$arrayToString = array("a","b","c");
	$value = implode(" ",$arrayToString);	//参数1:分隔符
	echo $value."<br>"; 
	# 字符串转数组 explode
	$array = explode(" ",$value);
	echo $array[0]."<br>";
	var_dump($array);
 ?>