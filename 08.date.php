<?php 
# echo date();	//至少要给一个参数
	echo date('d');		// day
	echo date('m');		// month
	echo date('Y');		// Year 2017 
	echo date('y');		// year 17
	echo date('l');		// day of week

	echo date('Y/m/d');	// 年月日
	echo date('d-m-Y')."<br>";	// 日月年

	# 时分秒
	echo date('h');		// hour,格林尼治时间
	echo date('i');		// minutes
	echo date('s');		// seconds
	echo date('a')."<br>";		// AM or PM

	# 设置时区
	date_default_timezone_set("Asia/Shanghai");
	echo date('h:i:sp')."<br>";

	# mktime
	$timestamp = mktime(07,00,12,1,24,1988);
	echo $timestamp."<br>";

	# 完整时间
	echo date('m/d/Y h:i:sa',$timestamp)."<br>";

	# 字符串转时间
	$timestamp2 = strtotime("7:00pm June 3 1996");
	$timestamp3 = strtotime("tomorrow");
	$timestamp4 = strtotime("next sunday");
	$timestamp5 = strtotime("+2 Days");
	echo $timestamp2."<br>";
	echo date('m/d/Y h:i:sa',$timestamp3)."<br>";
	echo date('m/d/Y h:i:sa',$timestamp4)."<br>";
	echo date('m/d/Y h:i:sa',$timestamp5)."<br>";
 ?>