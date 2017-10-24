<?php 
	$pdo=new PDO("mysql:host=localhost;dbname=test","root","123456");
	$sql="select * from user";
	$smt=$pdo->prepare($sql);
	$smt->execute();
	$rows=$smt->fetchAll();
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
	<style type="text/css">
		.delete{
			display: block;
			width: 40px;
			height: 40px;
			color: #fff;
			background-color: red;
			line-height: 40px;
			cursor: pointer;
		}
	</style>
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
				<li><a href="javascript:;">查看用户</a></li>
				<li><a href="adduser.php">添加用户</a></li>
			</ul>
			<h4>商品管理</h4>
			<ul>
				<li><a href="shop.php">查看商品</a></li>
				<li><a href="addshop.php">添加商品</a></li>
			</ul>
			<h4>退出</h4>
		</div>
		<div class="right">
			<table class="layui-table">
			  <colgroup>
			    <col width="150">
			    <col width="200">
			    <col>
			  </colgroup>
			  <thead>
			    <tr>
			      <th>ID</th>
			      <th>用户名称</th>
			      <th>密码</th>
			      <th>注册时间</th>
			      <th>操作</th>
			    </tr> 
			  </thead>
			  <tbody>
				<?php 
					foreach ($rows as $row) {
						echo "<tr>";
						echo "<td>{$row['id']}</td>";
						echo "<td>{$row['username']}</td>";
						echo "<td>{$row['password']}</td>";
						$row['registdate']=date('Y-m-d H:i:s',$row['registdate']);
						echo "<td>{$row['registdate']}</td>";
						echo "<td><a href='delete.php?id={$row['id']}' class='delete' deleteid='{$row['id']}'>删除</a></td>";
						echo "</tr>";
					}
				 ?>
			  </tbody>
			</table>
		</div>
		</div>
	</div>
</body>
</html>