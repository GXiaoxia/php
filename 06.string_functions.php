<?php 
	header('content-type:text/html;charset=utf-8');
// string function: 处理字符串的函数
	# 返回字符串的一部分 substr
	$output = "helloworld";
	// $output = substr($output,1);
	// $output = substr($output,1,5);
	// echo $output;
	
	# 返回给定的字符串 string 的长度  strlen
	// echo strlen($output)."<br>";

	# 查找字符串首次出现的位置 strpos
	// $output = strpos($output,"lo");
	// echo $output."<br>";
	
	# 计算指定字符串在目标字符串中最后一次出现的位置 strrpos
	// $output = strrpos($output,"l");
	// echo $output;
	
	# 去除首尾空格trim
	/*$output = "  hello world  ";
	// echo strlen($output);	//15
	$newSting = trim($output);
	echo strlen($newSting);		//11*/
	
	/*# 将字符串转为大写 strtoupper
	$str = "hello world";
	$newStr = strtoupper($str);
	echo $newStr;

	# 将字符串转为小写 strtolower
	$lowerStr = strtolower($newStr);
	echo $lowerStr;
	
	# 将每个单词首字母大写 ucwords
	$ucwords = ucwords($str);
	echo $ucwords;
	
	# 替换所有匹配的内容  str_replace
	$text = "hello world";
	$output = str_replace("world","everybody",$text);
	echo $output;
	
	# 判断是否是字符串  is_string
	$val = "22";
	$output = is_string($val);
	echo $output;	//真为1,假不打印*/
	
	# 过滤掉数组中非字符串的值
	$values = array(true,false,"hello",23,11,"66"," ",0,"0");
	foreach($values as $value){
		# 判断value是否是字符串,如果是,则输出
		if(is_string($value)){
			echo $value."is a string<br>";
		}
	}
	
	# 压缩字符串  gzcompress
	$string = "内容";
	$compressed = gzcompress($string);
	echo $compressed;

	# 解压字符串
	$unCompressed = gzuncompress($compressed);
	echo $unCompressed;
 ?>