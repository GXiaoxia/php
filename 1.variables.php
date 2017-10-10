<!-- <h1>
<?php 
	// echo "hello world";
 ?>
</h1> -->

<?php 
	// echo "hello world!";
	//  单行注释  快捷键: window + /
	#   单行注释  快捷键: shift + 3
	/*
	    多行注释
	    快捷键: alt + window + /
	*/

	// variable 变量
	/*
		- 前缀 $
		- 以字母/数字/下划线组成
		- 数字不能开头
		- 大小写敏感
		- 驼峰命名法
	*/
	/*$output = 'hello world';
	echo $output;*/

	# 数据类型
	/*
		string integer float boolean 
		array object resource(函数) 
	*/
	$num = 22;
	$float = 22.1;
	$bool = true;	// true打印1,false什么都不打印

	# 运算符 + - * /等
	$num1 = 10;
	$num2 = 20;
	$sum = $num1 + $num2;	// 30

	# 字符串拼接 .
	$string1 = 'hello';
	$string2 = 'world';
	// 注: php中,+号无拼接功能
	// $greeting = $string1 + $string2;		// 0 
	$greeting = $string1." ".$string2."!";	// hello world!
	echo $string1," ",$num1,"<br>";		// 拼接

	# php中引号的区别
	/*
		单引号中的内容是单纯的字符串
		双引号中的变量可以正常被解析
	*/
	$greeting2 = '$string1 $string2';		// $string1 $string2
	$greeting3 = "$string1 $string2";		// hello world

	# 转义字符
	$string3 = 'they\'re here';
	$string4 = "they're here";
	echo $string3.'<br>';		// 无返回值,速度快
	echo "<hr>";
	printf($string4);	// 是一个方法,成功后返回值为1
	echo "<br>";


	# 常量 常量名大写
	define("GREETING","WhatEver");
	// 常量的第三个参数为bool,true为不分大小写
	define("GREETING","What    Ever",true);		
	// echo GREETING;
	var_dump(greeting);
 ?>