<?php 
	$pdo=new PDO("mysql:host=localhost;dbname=test","root","123456");
	$username=$_POST['username'];
	$password=$_POST['password'];
	$registdate=$_POST['registdate'];
	$sql="insert into user(username,password,registdate) values('{$username}','{$password}','{$registdate}')";
	$smt=$pdo->prepare($sql);
	if ($smt->execute()) {
		echo "<script>alert('添加成功');location.href='/admin.php'</script>";
	}else{
		echo "<script>alert('添加未遂');location.href='adduser.php'</script>";
	}
 ?>