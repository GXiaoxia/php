<?php 
	require("config/config.php");
	require("config/db.php");

	# 实现删除博客
	if(isset($_POST['delete'])){
		$delete_id = mysqli_real_escape_string($conn,$_POST['delete_id']);
		// var_dump($delete_id);
		# sql语句
		$query = "DELETE FROM posts WHERE id= '$delete_id'";
		if(mysqli_query($conn,$query)){
			header("Location: index.php");
		}else{
			echo "error".mysqli_error($conn);
		}
	}


	# 查询单条博客
	mysqli_query($conn,"set names utf8");
	// 获取id
	// $id = $_GET['id'];	//php中一般不使用,从其他页面跳转后才可以取到值,从浏览器中拿
	# 指定要查找的数据库,转义一些特殊字符
	$id = mysqli_real_escape_string($conn,$_GET['id']);		// 当前页面拿到参数,传过来数据后才取到id值
	# 设置sql语句
	$sql = "SELECT * FROM posts WHERE id={$id}";	// 将变量传值用{variables}
	# 执行语句
	$result = mysqli_query($conn,$sql);
	# 获取数据(关联数组)
	$post = mysqli_fetch_assoc($result);
	// var_dump($post);
	# 释放数据
	mysqli_free_result($result);
	mysqli_close($conn);

?>


<?php include("inc/header.php"); ?>
	<div class="container">
		<h1>博客详情</h1>
		<div class="well">
			<h3><?php echo $post['title']; ?></h3>
			<p>
				<strong>ID: </strong>
				<?php echo $post['id']; ?>
			</p>
			<p>
				<strong>作者: </strong>
				<?php echo $post['author']; ?>
			</p>
			<p>
				<strong>时间: </strong>
				<?php echo $post['created_at']; ?>
			</p>
			<p>
				<?php echo $post['body']; ?>
			</p>
			<br>
			<form class="pull-right" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
				<input type="hidden" name="delete_id" value="<?php echo $post['id']; ?>">
				<input class="btn btn-danger" type="submit" name="delete" value="删除">
			</form>
			<a class="btn btn-info" href="<?php echo ROOT_URL; ?>/editpost.php?id=<?php echo $post['id']; ?>">编辑</a>
		</div>	
		<a class="btn btn-primary" href="<?php echo ROOT_URL; ?>">返回主页</a>
	</div>
<?php include("inc/footer.php"); ?>