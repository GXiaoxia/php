<?php 
	# loops: 循环 -- 让项目制作的更高效
	# 根据某个条件,重复执行某段代码
	/*
		- for
		- while
		- do...while
		- foreach 
	*/

# for 循环
	# @params - init,condition,inc
	/*for($i = 0;$i < 10;$i++){
		echo ($i+1)."<br>";		
	}
	echo $i;	// 10,此处无作用域
	*/ 

# while 循环
	# @params - condition
	/*$i = 0;
	while ($i < 10) {
		echo $i."<br>";
		$i++;
	}*/
	// 查重,外层用while,内层用for

# do...while
	# @params - condition
	/*$i = 0;
	do{
		echo $i."<br>";
		$i++;
	}while($i < 10)*/

# foreach 循环 
	# 下标数组
	$people = array("henry","bucky","emily");
	foreach($people as $peoson){
		echo $person;
		echo "<br>";
	}
	// foreach($people as $person=>$value){
	// 	echo $person.":".$value;   //打印下标带名字(key是下标,value是值)
	// 	echo "<br>";
	// }

	# 关联数组
	/*$people = array(
		"henry"=>"henry@gmail.com",
		"bucky"=>"bucky@gmail.com",
		"emily"=>"emily@gmail.com"
	);
	foreach($people as $person => $email){		// as后的是变量,可以任意改变
		echo $person.":".$email;
		echo "<br>";
		echo $person;
		echo "<br>";
	}*/

	/*
	练习1:
		打印1-100之间7的倍数
		打印1-100之间个位为7的数
		打印1-100之间十位为7的数
		打印1-100之间个位,十位不为7,且不是7的倍数
	练习2:
		打印九九乘法表
	*/
	// 函数,字符串函数,数组函数,日期函数
 ?>