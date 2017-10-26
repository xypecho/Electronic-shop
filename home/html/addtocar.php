<?php 
	$id=$_GET['id'];
	$pdo=new PDO("mysql:host=localhost;dbname=test","root","123456");
	$sql="insert into shoppingcart(name,img_path,price) select name,img_path,price from shop where id='{$id}'";
	$smt=$pdo->prepare($sql);
	if ($smt->execute()) {
		echo "<script>alert('添加购物车成功');</script>";
		echo "<script>location.href='account.php';</script>";
	}else{
		echo "<script>alert('添加购物车失败');</script>";
	}
 ?>