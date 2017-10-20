<?php 
	session_start();
	$username=$_POST['username'];
	$password=$_POST['password'];
	$pdo=new PDO("mysql:host=localhost;dbname=test","root","123456");
	$vercode=strtolower($_SESSION['vercode']);
	$reg=$_POST['reg'];
	$sql="select * from user where username='{$username}' and password='{$password}'";
	$smt=$pdo->prepare($sql);
	if ($reg==$vercode) {
			if ($smt->execute()) {
				$_SESSION['username']=$username;
				$_SESSION['password']=$password;
				echo "<script>location.href='index.php';</script>";
			}else{
				echo "<script>alert('发生错误，请重新注册');</script>";
			}
	}else{
		echo "<script>alert('验证码错误请重新输入');location.href='login.php';</script>";
	}
 ?>