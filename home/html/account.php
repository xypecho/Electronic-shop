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
	  <tr>
	  	<td>合计</td>
	  	<td colspan="4" class="total"></td>
	  </tr>
	</table>
	</div>
	<?php include "foot.php" ?>
</body>
	<script type="text/javascript">
	var price=$(".price");
	var count=$(".count");
		function cut(cut){
			var count=$(cut).parent().find(".count").val();
				count=count-1;
				if (count>=0) {
					$(cut).parent().find(".count").val(count);
				}else{
					return false;
				}
			getTotal();
		}
		function add(add){
			var count=$(add).parent().find(".count").val();
			count++;
			$(add).parent().find(".count").val(count);
			getTotal();
		}
		function getTotal(){
			var total=0;
			var arr=new Array();
			for (var i = 0; i < price.length; i++) {
				total=price.eq(i).text()*count.eq(i).val();
				arr.push(total);
			}
			console.log(arr);
			var sum=0;
			for (var i = 0; i < arr.length; i++) {
				sum+=arr[i];
			}
			$(".total").text(sum);
		}
	</script>
</html>