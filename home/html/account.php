<?php
	$pdo=new PDO("mysql:host=localhost;dbname=test","root","123456");
	$sql="select * from shoppingcart";
	$smt=$pdo->prepare($sql);
	$smt->execute();
	$rows=$smt->fetchAll();
?>
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
	  <?php
		foreach($rows as $row){
			echo "<tr>";
			echo "<td>{$row['name']}</td>";
			echo "<td><img src='/admin/html/{$row["img_path"]}'></td>";
			echo "<td class='price'>{$row['price']}</td>";
			echo '<td><a href="javascript:;" class="layui-btn layui-btn-mini cut" onclick="cut(this)">-</a><input type="text" name="count" class="count" value="1"><a href="javascript:;" class="layui-btn layui-btn-mini add" onclick="add(this)">+</a></td>';
			echo "<td class='jisuan'><a href='deleteformcar.php?id={$row["id"]}' class='shop-car'>从购物车删除</a></td>";
			echo "</tr>";
		}
	  ?>
<!-- 	  <tr>
	  	<td>小黑裙连衣裙</td>
	  	<td><img src="../img/goods.jpg"></td>
	  	<td>199元</td>
	  	<td><a href="javascript:;" class="layui-btn layui-btn-mini">-</a> 1<a href="javascript:;" class="layui-btn layui-btn-mini">+</a></td>
	  	<td><a href="javascript:;" class="shop-car delete">删除</a></td>
	  </tr> -->
	  <tr>
	  	<td class="layui-btn tj">合计</td>
	  	<td colspan="4" class="total"></td>
	  </tr>
	</table>
	</div>
	<?php include "foot.php" ?>
</body>
	<script type="text/javascript">
		function cut(cut){
			var count=$(cut).parent().find(".count").val();
				count=count-1;
				if (count>=0) {
					$(cut).parent().find(".count").val(count);
				}else{
					return false;
				}
		}
		function add(add){
			var count=$(add).parent().find(".count").val();
			count++;
			$(add).parent().find(".count").val(count);
		}
		$(".cut,.add").click(function(){
			var price=$(this).parent().parent().find(".price").text();
			var count=$(this).parent().parent().find(".count").val();
			var total=price*count;
			$(this).parent().parent().find(".jisuan").attr("data-total",total);
			var jisuan=$(this).parent().parent().find(".jisuan").attr("data-total");
			$('tableId .jisuan').each(function() { 
			$(this).find('.jisuan:eq(columnIndex)').each(function() { 
			totalAmount += parseFloat($(this).text());
			})
			});
			console.log(arr);
			$(".total").text(jisuan+=jisuan);
		})
	</script>
</html>