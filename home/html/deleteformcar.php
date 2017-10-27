<?php 	
	$id=$_GET['id'];
	$pdo=new PDO("mysql:host=localhost;dbname=test","root","123456");
	$sql="delete from shoppingcart where id='{$id}'";
	$smt=$pdo->prepare($sql);
	if ($smt->execute()) {
		echo "<script>alert('从购物车删除成功');</script>";
		echo "<script>location.href='account.php';</script>";
	}else{
		echo "<script>alert('删除失败');</script>";
		echo "<script>location.href='account.php';</script>";
	}
 ?>