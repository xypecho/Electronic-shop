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
				<li><a href="adduser.php">添加用户</a></li>
			</ul>
			<h4>商品管理</h4>
			<ul>
				<li><a href="javascript:;">查看商品</a></li>
				<li><a href="addshop.php">添加商品</a></li>
			</ul>
			<h4>退出</h4>
		</div>
		<div class="right">
			<table class="layui-table adduser">
			  <colgroup>
			    <col width="150">
			    <col width="200">
			    <col>
			  </colgroup>
			  <thead>
			    <tr>
			      <th>商品ID</th>
			      <th>商品名称</th>
			      <th>图片</th>
			      <th>价格</th>
			      <th>库存</th>
			      <th>操作</th>
			    </tr> 
			  </thead>
			  <tbody>
			    <tr>
			      <td>1</td>
				  <td contenteditable="true">小黑裙</td>
			      <td contenteditable="true"><img src="../../home/img/goods.jpg"></td>
			      <td>199元</td>
			      <td>99</td>
			      <td><a href="">增加</a><a href="">删除</a></td>
			    </tr>
			  </tbody>
			</table>
		</div>
		</div>
	</div>
</body>
</html>