<?php 
	header('content-type:text/html;charset=utf-8'); 
	# function: 函数 - 具有某一功能的代码块
	/*
	命名规则:
		Camel Case - myFunction()
		Lower Case - my_function()
		Pascal Case - MyFunction()
	*/

	// 函数一定会有返回值,没写return返回值为undefined
	// 函数在未调用时,在内存中不存在
	// 函数参数必须是数据类型

	// 定义函数
	# 无参数 无返回值
	function simpleFunction(){
		echo "hello world";
	}
	# 调用函数
	SimpleFunction();
	// 注: php中函数名不分大小写

	echo "<br>";

	# 有参数 无返回值
	function buy($money){
		echo $money."给了";
	}
	buy(12);
	// 注: js中调用函数时可以不传参,php中必须传参

	echo "<br>";

	// 写默认值,不传参
	function buy1($money="10块钱"){
		echo $money."给了";
	}
	buy1();
	buy(12);	// 有默认值还传参时,会把默认值代替

	echo "<br>";

	// 多参数 有返回值
	function sumValue($num1,$num2){
		$sum = $num1 + $num2;
		return $sum;
	}
	$result = sumValue(5,6);
	echo $result;

	echo "<br>";

	function sumValue1($num1,$num2=10){
		$sum = $num1 + $num2;
		return $sum;
	}
	$sum = sumValue1(5);	//只传一个参数时,是第一个参数
	echo $sum;

	echo "<br>";

	// 无参数 有返回值
	function buyDrink(){
		return "drink";
	}
	echo buyDrink();

	# 函数传引用
	$myNum = 10;
	function addFile(&$num){		//通过地址改变了内存中的值
		// $myNum = 20;
		$num += 5;
		// return $num + 5;
	}
	addFile($myNum);	//15
	echo $myNum;	//15,拿到了myNum的引用,改变了内存中的数值,所以是15
	echo $myNum;	//15

 ?>