<!-- <meta charset="utf-8"> -->
<?php 
	header('content-type:text/html;charset=utf-8'); 
	# if & switch  -- 分支

	# 关系运算符 > < == != >= <= === !==
	// $num = 2;
	# 单个if
	/*if($num<=4){
		echo "num的值一定是小于或等于4";
	}*/

	# if else
	/*if($num>=4){
		echo "true";
	}else{
		echo "false";
	}*/
	
	# nesting if
	/*$num = 4;
	if($num >= 4){
		if($num <= 10){
			echo "num一定是在4和10之间";
		}else{
			echo "num大于10";
		}
	}else{
		echo "num一定是小于4";
	}*/
	
	# 逻辑运算符
	/*
		逻辑与 && AND   一假即假	短路现象(前面假为假)
		逻辑或 || OR	   一真即真	短路现象(前面真为真)
		逻辑非 !
		逻辑异或 XOR    只有一个为真,结果才为真
	*/

	/*$num = 4;
	if($num > 3 OR $num < 10){
		echo "num大于3并且小于10";
	}*/


	# switch
	$favcolor = 1;
	switch ($favcolor) {
		case '1':		// 注:case在js中是===,php中不是
			echo "angry";
			break;
		case 'blue':
			echo "silent";
			break;
		case 'green':
			echo "forgive";
			break;
		default:
			echo "gun";
			break;
	}
	
 ?>