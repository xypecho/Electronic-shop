<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>商城后台</title>
	<link rel="stylesheet" type="text/css" href="../../public/css/layui.css">
	<link rel="stylesheet" type="text/css" href="../css/admin.css">
	<script type="text/javascript" src="../../public/js/jquery-3.2.1.min.js"></script>
	<script type="text/javascript" src="../../public/js/layer.js"></script>
	<script type="text/javascript" src="../../public/js/layui.js"></script>
	<script type="text/javascript" src="../../public/js/upload.js"></script>
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
				<li><a href="shop.php">查看商品</a></li>
				<li><a href="javascript:;">添加商品</a></li>
			</ul>
			<h4>退出</h4>
		</div>
		<div class="right">
			<form class="layui-form" action="checkaddshop.php" method="post" enctype="multipart/form-data">
			  <div class="layui-form-item">
			    <label class="layui-form-label">商品名称</label>
			    <div class="layui-input-inline">
			      <input type="text" name="name" class="layui-input">
			    </div>
			  </div>
			  <div class="layui-form-item">
			    <label class="layui-form-label">价格</label>
			    <div class="layui-input-inline">
			      <input type="text" name="price" class="layui-input">
			    </div>
			  </div>
			  <div class="layui-form-item">
			    <label class="layui-form-label">库存</label>
			    <div class="layui-input-inline">
			      <input type="text" name="count" class="layui-input">
			    </div>
			  </div>
			  <div class="layui-form-item">
			    <label class="layui-form-label">上传图片</label>
			  	<input class="layui-btn" id="test1" name="img_path" type="file">
			  </div>
			  <div class="layui-form-item">
			    <div class="layui-input-block">
			      <button class="layui-btn" lay-submit lay-filter="formDemo">上架</button>
			      <button type="reset" class="layui-btn layui-btn-primary">重置</button>
			    </div>
			  </div>
			</form>
		</div>
		</div>
	</div>
<!-- 	<script>
	layui.use('upload', function(){
	  var upload = layui.upload;
	  //执行实例
	  var uploadInst = upload.render({
	    elem: '#test1' //绑定元素
	    ,url: 'checkaddshop.php' //上传接口
	    ,done: function(res){
	      console.log(res);
	      return false;
	    }
	    ,error: function(){
	      alert($("input[name='img_path']").text());
	    }
	  });
	});
	</script> -->
</body>
</html>