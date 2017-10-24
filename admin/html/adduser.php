<?php 
	date_default_timezone_set ('PRC');
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>商城后台</title>
	<link rel="stylesheet" type="text/css" href="../../public/css/layui.css">
	<link rel="stylesheet" type="text/css" href="../css/admin.css">
	<script type="text/javascript" src="../../public/js/jquery-3.2.1.min.js"></script>
	<script type="text/javascript" src="../../public/js/layer.js"></script>
</head>
<body>
	<div class="container">
		<div class="content">
			<div class="page-header">
				欢迎登录商城后台
			</div>
		<div class="left">
			<h4>用户管理</h4>
			<ul>
				<li><a href="users.php">查看用户</a></li>
				<li><a href="javascript:;">添加用户</a></li>
			</ul>
			<h4>商品管理</h4>
			<ul>
				<li><a href="shop.php">查看商品</a></li>
				<li><a href="addshop.php">添加商品</a></li>
			</ul>
			<h4>退出</h4>
		</div>
		<div class="right">
			<form action="add.php" method="post">
			<div class="layui-form-item">
				<label class="layui-form-label">用户名</label>
				<div class="layui-input-inline">
					<input type="text" name="username" class="layui-input"></div>
			</div>
				  <div class="layui-form-item">
				  	<label class="layui-form-label">密码</label>
				  	<div class="layui-input-inline">
				  		<input type="text" name="password"  class="layui-input"></div>
				  </div>
				  <input type="hidden" name="registdate" value="<?php echo strtotime('now'); ?>" class="time">
				  <button type="submit" class="layui-btn">提交</button>
			</form>
		</div>
		</div>
	</div>
</body>
	<script type="text/javascript">
		
	</script>
</html>