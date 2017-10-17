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
	  	<td>商品名</td>
	  	<td>图片</td>
	  	<td>价格</td>
	  	<td>数量</td>
	  	<td>操作</td>
	  </tr>
	  <tr>
	  	<td>小黑裙连衣裙</td>
	  	<td><img src="../img/goods.jpg"></td>
	  	<td>199元</td>
	  	<td><a href="javascript:;" class="layui-btn layui-btn-mini">-</a> 1<a href="javascript:;" class="layui-btn layui-btn-mini">+</a></td>
	  	<td><a href="javascript:;" class="shop-car delete">删除</a></td>
	  </tr>
	  <tr>
	  	<td>小黑裙连衣裙</td>
	  	<td><img src="../img/goods.jpg"></td>
	  	<td>199元</td>
	  	<td><a href="javascript:;" class="layui-btn layui-btn-mini">-</a> 1<a href="javascript:;" class="layui-btn layui-btn-mini">+</a></td>
	  	<td><a href="javascript:;" class="shop-car delete">删除</a></td>
	  </tr>
	  <tr>
	  	<td>合计</td>
	  	<td colspan="4">399元</td>
	  </tr>
	</table>
	</div>
	<?php include "foot.php" ?>
</body>
</html>