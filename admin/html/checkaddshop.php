<?php 
	$pdo=new PDO("mysql:host=localhost;dbname=test","root","123456");
	$name=$_POST['name'];
	$price=$_POST['price'];
	$count=$_POST['count'];
	$img_path=$_FILES['img_path'];
	echo $name;
	echo $price;
	echo $count;
	echo $img_path;
	die;
	$sql="insert into shop(name,img_path,price,count) values('{$name}','{$img_path}','{$price}','{$count}') ";
	$smt=$pdo->prepare($sql);
	if ($smt->execute()) {
		echo "<script>alert('商品添加成功');</script>";
		echo "<script>location.href='addshop.php';</script>";
	}else{
		echo "<script>alert('商品添加失败');</script>";
		echo "<script>location.href='addshop.php';</script>";
	}
 ?>