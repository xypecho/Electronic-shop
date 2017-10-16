<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>极简新风尚</title>
	<link rel="stylesheet" type="text/css" href="../../public/css/layui.css">
	<link rel="stylesheet" type="text/css" href="../css/product.css">
	<script type="text/javascript" src="../../public/js/jquery-3.2.1.min.js"></script>
	<script type="text/javascript" src="../../public/js/layer.js"></script>
</head>
<body>
	<?php include "header.php" ?>
	<div class="content">
		<table class="layui-table" lay-skin="row">
		  <tr>
		  	<td>图片</td>
		  	<td>价格</td>
		  	<td>库存</td>
		  	<td>是否加入购物车</td>
		  </tr>
		  <tr>
		  	<td><img src="../img/goods.jpg"></td>
		  	<td>199元</td>
		  	<td>99</td>
		  	<td><a href="javascript:;" class="shop-car">加入购物车</a></td>
		  </tr>
		  
		</table>
	</div>
	<?php include "foot.php" ?>
</body>
</html>