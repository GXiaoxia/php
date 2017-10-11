<?php include "./inc/header.php" ?>
<?php include "./inc/header.php" ?>
<h1>Home</h1>
<?php include "./inc/footer.php" ?>

<!-- 
	引入方式: 
		include: 上面报错,下面依然显示,连续引入两次相同的文件,显示两次
		require: 上面报错,下面不显示 
		include_once: 连续引入两次相同的文件,只显示一次
-->
<!-- 
	include & require的区别:
		如果有报错信息,include会显示报错信息,但不影响后面的代码执行
		如果有报错信息,require会显示报错信息,但后面的代码不会执行
		
	include_once & require_once的作用:
		重复引入,只识别一次
 -->
	
<!-- &copy; -->
<!-- &times; -->