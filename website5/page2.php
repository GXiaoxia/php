<?php 
	header('content-type:text/html;charset=utf-8');
	# 重新赋值
	setcookie('userName','Franch',time()+86400);
	# 删除cookie(设置过期时间)
	// setcookie('userName','aa',time()-3600);

	if(count($_COOKIE) > 0){
		echo '一共有'.count($_COOKIE)."个COOKIE";
	}else{
		echo '没有设置任何COOKIE';
	}

	if(isset($_COOKIE['userName'])){
		echo 'your username is '.$_COOKIE['userName'];
	}else{
		echo 'username is not exist';
	}

 ?>