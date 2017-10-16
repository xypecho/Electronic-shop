<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>极简新风尚</title>
	<link rel="stylesheet" type="text/css" href="public/css/layui.css">
	<link rel="stylesheet" type="text/css" href="home/css/login.css">
	<script type="text/javascript" src="public/js/jquery-3.2.1.min.js"></script>
	<script type="text/javascript" src="public/js/layer.js"></script>
</head>
<body>
	<div class="content">
		<div class="login"><p>登录</p></div>
		<div class="regist"><p>注册</p></div>
		<form class="layui-form" action="" id="login">
		  <div class="layui-form-item">
		    <label class="layui-form-label">用户名</label>
		    <div class="layui-input-block">
		      <input type="text" name="title" required  lay-verify="required" placeholder="请输入用户名" autocomplete="off" class="layui-input">
		    </div>
		  </div>
		  <div class="layui-form-item">
		    <label class="layui-form-label">密码</label>
		    <div class="layui-input-inline">
		      <input type="password" name="password" required lay-verify="required" placeholder="请输入密码" autocomplete="off" class="layui-input">
		    </div>
		  </div>
		  <div class="layui-form-item">
		    <label class="layui-form-label">验证码</label>
		    <div class="layui-input-inline reg">
		      
		    </div>
		  </div>
		  <div class="layui-form-item">
		    <div class="layui-input-block">
		      <button class="layui-btn" type="submit">登录</button>
		      <button type="reset" class="layui-btn layui-btn-primary">重置</button>
		    </div>
		  </div>
		</form>
		<form class="layui-form" action="" id="regist">
		  <div class="layui-form-item">
		    <label class="layui-form-label">用户名</label>
		    <div class="layui-input-block">
		      <input type="text" name="title" required  lay-verify="required" placeholder="请输入用户名" autocomplete="off" class="layui-input">
		    </div>
		  </div>
		  <div class="layui-form-item">
		    <label class="layui-form-label">密码</label>
		    <div class="layui-input-inline">
		      <input type="password" name="password" required lay-verify="required" placeholder="请输入密码" autocomplete="off" class="layui-input">
		    </div>
		  </div>
		  <div class="layui-form-item">
		    <label class="layui-form-label">确认密码</label>
		    <div class="layui-input-inline">
		      <input type="password" name="password" required lay-verify="required" placeholder="请再次输入密码" autocomplete="off" class="layui-input">
		    </div>
		  </div>
		  <div class="layui-form-item">
		    <label class="layui-form-label">验证码</label>
		    <div class="layui-input-inline reg">
		      
		    </div>
		  </div>
		  <div class="layui-form-item">
		    <div class="layui-input-block">
		      <button class="layui-btn" type="submit">注册</button>
		      <button type="reset" class="layui-btn layui-btn-primary">重置</button>
		    </div>
		  </div>
		</form>
	</div>
</body>
	<script type="text/javascript">
		$(".login").click(function(){
			$("#login").show();
			$("#regist").hide();
		})
		$(".regist").click(function(){
			$("#login").hide();
			$("#regist").show();
		})
	</script>
</html>