<?php 
	$pdo=new PDO("mysql:host=localhost;dbname=test","root","123456");
	$id=$_GET['id'];
	$sql="delete from shop where id='{$id}'";
	$smt=$pdo->prepare($sql);
	if ($smt->execute()) {
		echo "<script>alert('删除成功');</script>";
		echo "<script>location.href='shop.php';</script>";
	}else{
		echo "<script>alert('删除失败');</script>";
		echo "<script>location.href='shop.php';</script>";
	}
 ?>