<?php 
	$username=$_POST['username'];
	$password=$_POST['password'];
	$pdo=new PDO("mysql:host=localhost;dbname=test","root","123456");
	$sql="select * from user where username='{$username}' and password='{$password}' and isadmin=1";

	$smt=$pdo->prepare($sql);
	$smt->execute();
	// $row=$smt->fetch();
	// echo "<pre>";
	// print_r($row);
	// echo "</pre>";
	if ($smt->execute()) {
		echo "<script>location.href='admin.php';</script>";
	}else{
		echo "<script>alert('该帐号没有权限登录后台');</script>";
		echo "<script>location.href='login.php';</script>";
	}
 ?>