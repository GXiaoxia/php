<?php 

	session_start();

	// unset($_SESSION['name']);		// 将服务器中的name删除(删除某一个属性)
	session_destroy();				// 将所有session都删除
	
 ?>