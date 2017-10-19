 <?php 
	session_start();
	$pdo=new PDO("mysql:host=localhost;dbname=test","root","123456");
	$username=$_POST['username'];
	$password=$_POST['password'];
	$registdate=$_POST['registdate'];
	$sql="insert into user(username,password,registdate) values('{$username}','{$password}','{$registdate}') ";
	$smt=$pdo->prepare($sql);
	if ($smt->execute()) {
		echo "<script>alert('注册成功');location.href='login.php';</script>";
	}else{
		echo "<script>alert('发生错误，请重新注册');return false;</script>";
	}	
 ?>