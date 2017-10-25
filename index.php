<?php 
	session_start();
	if (!$_SESSION['username']) {
		echo "<script>location.href='login.php'</script>";
		exit();
	}

	$pdo=new PDO("mysql:host=localhost;dbname=test","root","123456");
	$sql="select * from shop";
	$smt=$pdo->prepare($sql);
	$smt->execute();
	$rows=$smt->fetchAll();
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>极简新风尚</title>
	<link rel="stylesheet" type="text/css" href="public/css/layui.css">
	<link rel="stylesheet" type="text/css" href="home/css/index.css">
	<script type="text/javascript" src="public/js/jquery-3.2.1.min.js"></script>
	<script type="text/javascript" src="public/js/layer.js"></script>
	<script type="text/javascript" src="public/js/flow.js"></script>
	<style type="text/css">
		img{
			width: 240px;
			height: 240.59px;
		}
	</style>
</head>
<body>
	<div class="container">
		<div class="content">
			<div class="head">
				<div class="nav">
					<ul>
						<li><a href="/">首页</a></li>
						<li><a href="">特产</a></li>
						<li><a href="">零食</a></li>
						<li><a href="">饮料</a></li>
						<li><a href="">干果</a></li>
					</ul>
				</div>
				<a href="home/html/account.php"><i class="layui-icon">&#xe698;</i></a>
				<a href="" style="float: right;margin-top: 30px;margin-right: 32px;padding-left: 30px">退出登录</a>
				<a href="exit.php"><span class="user" name="user"><?php echo $_SESSION['username']; ?></span></a>
			</div>
		</div>
		<div class="banner">
			<img src="home/img/banner1.jpg">
		</div>
		<div class="hot">
			<div class="content">
				<div class="hot-head">
					<p>热卖推荐~或许你会喜欢</p>
				</div>
				<div class="hot-body">
				<?php 
					foreach ($rows as $row) {
						echo "<div class='hot-goods'>";
						echo "<a href=''><img src='/admin/html/{$row['img_path']}'></a>";
						echo "<a href=''><p>{$row['name']}</p></a>";
						echo "<a href=''><p>{$row['price']}</p></a>";
						echo "<div>";
					}
				?>
					<!-- <div class="hot-goods"><a href="home/html/product.php"><img src="home/img/goods.jpg"></a><a href=""><p>小黑裙连衣裙</p></a><a href=""><p>￥199</p></a></div>
					<div class="hot-goods"><a href="home/html/product.php"><img src="home/img/goods.jpg"></a><a href=""><p>小黑裙连衣裙</p></a><a href=""><p>￥199</p></a></div>
					<div class="hot-goods"><a href="home/html/product.php"><img src="home/img/goods.jpg"></a><a href=""><p>小黑裙连衣裙</p></a><a href=""><p>￥199</p></a></div>
					<div class="hot-goods"><a href="home/html/product.php"><img src="home/img/goods.jpg"></a><a href=""><p>小黑裙连衣裙</p></a><a href=""><p>￥199</p></a></div> -->
				</div>
			</div>
		</div>
		<div class="clear"></div>
		<div class="fashion">
			<div class="content">
				<div class="fashion-head">
					<p>潮流前线</p>
					<p class="line">那些别人眼中的天真，是我们以梦为马的狂奔</p>
				</div>
				<div class="fashion-body">
					<div class="hot-goods"><a href="home/html/product.php"><img src="home/img/goods.jpg"></a><a href=""><p>小黑裙连衣裙</p></a><a href=""><p>￥199</p></a></div>
					<div class="hot-goods"><a href="home/html/product.php"><img src="home/img/goods.jpg"></a><a href=""><p>小黑裙连衣裙</p></a><a href=""><p>￥199</p></a></div>
					<div class="hot-goods"><a href="home/html/product.php"><img src="home/img/goods.jpg"></a><a href=""><p>小黑裙连衣裙</p></a><a href=""><p>￥199</p></a></div>
					<div class="hot-goods"><a href="home/html/product.php"><img src="home/img/goods.jpg"></a><a href=""><p>小黑裙连衣裙</p></a><a href=""><p>￥199</p></a></div>
					<div class="hot-goods"><a href="home/html/product.php"><img src="home/img/goods.jpg"></a><a href=""><p>小黑裙连衣裙</p></a><a href=""><p>￥199</p></a></div>
					<div class="hot-goods"><a href="home/html/product.php"><img src="home/img/goods.jpg"></a><a href=""><p>小黑裙连衣裙</p></a><a href=""><p>￥199</p></a></div>
					<div class="hot-goods"><a href="home/html/product.php"><img src="home/img/goods.jpg"></a><a href=""><p>小黑裙连衣裙</p></a><a href=""><p>￥199</p></a></div>
					<div class="hot-goods"><a href="home/html/product.php"><img src="home/img/goods.jpg"></a><a href=""><p>小黑裙连衣裙</p></a><a href=""><p>￥199</p></a></div>
					<div class="hot-goods"><a href="home/html/product.php"><img src="home/img/goods.jpg"></a><a href=""><p>小黑裙连衣裙</p></a><a href=""><p>￥199</p></a></div>
					<div class="hot-goods"><a href="home/html/product.php"><img src="home/img/goods.jpg"></a><a href=""><p>小黑裙连衣裙</p></a><a href=""><p>￥199</p></a></div>
					<div class="hot-goods"><a href="home/html/product.php"><img src="home/img/goods.jpg"></a><a href=""><p>小黑裙连衣裙</p></a><a href=""><p>￥199</p></a></div>
					<div class="hot-goods"><a href="home/html/product.php"><img src="home/img/goods.jpg"></a><a href=""><p>小黑裙连衣裙</p></a><a href=""><p>￥199</p></a></div>
					<div class="hot-goods"><a href="home/html/product.php"><img src="home/img/goods.jpg"></a><a href=""><p>小黑裙连衣裙</p></a><a href=""><p>￥199</p></a></div>
					<div class="hot-goods"><a href="home/html/product.php"><img src="home/img/goods.jpg"></a><a href=""><p>小黑裙连衣裙</p></a><a href=""><p>￥199</p></a></div>
					<div class="hot-goods"><a href="home/html/product.php"><img src="home/img/goods.jpg"></a><a href=""><p>小黑裙连衣裙</p></a><a href=""><p>￥199</p></a></div>
					<div class="hot-goods"><a href="home/html/product.php"><img src="home/img/goods.jpg"></a><a href=""><p>小黑裙连衣裙</p></a><a href=""><p>￥199</p></a></div>
					<div class="hot-goods"><a href="home/html/product.php"><img src="home/img/goods.jpg"></a><a href=""><p>小黑裙连衣裙</p></a><a href=""><p>￥199</p></a></div>
					<div class="hot-goods"><a href="home/html/product.php"><img src="home/img/goods.jpg"></a><a href=""><p>小黑裙连衣裙</p></a><a href=""><p>￥199</p></a></div>
					<div class="hot-goods"><a href="home/html/product.php"><img src="home/img/goods.jpg"></a><a href=""><p>小黑裙连衣裙</p></a><a href=""><p>￥199</p></a></div>
					<div class="hot-goods"><a href="home/html/product.php"><img src="home/img/goods.jpg"></a><a href=""><p>小黑裙连衣裙</p></a><a href=""><p>￥199</p></a></div>
				</div>
			</div>
		</div>
	</div>
	<div class="clear"></div>
	<div class="foot">
		<div class="content">
			<p>© 2017 daidai.com 呆呆有限公司出品</p>
		</div>
	</div>  
</body>
</html>