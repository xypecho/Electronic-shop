<?php 
	$id=$_GET['id'];
	$pdo=new PDO("mysql:host=localhost;dbname=test","root","123456");
	// $sql="delete from user where id='{$id}'";
	$sql="delete from user where id={$id} ";
	$smt=$pdo->prepare($sql);
	if ($smt->execute()) {
		echo "<script>location.href='users.php';</script>";
	}else{
		echo "<script>alert('删除错误');</script>";
		echo "<script>location.href='users.php';</script>";
	}
 ?>