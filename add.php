 <?php 
	session_start();
	$pdo=new PDO("mysql:host=localhost;dbname=test","root","123456");
	$username=$_POST['username'];
	$password=$_POST['password'];
	$vercode=strtolower($_SESSION['vercode']);
	$reg=$_POST['reg'];
	$registdate=$_POST['registdate'];
	$sql="insert into user(username,password,registdate) values('{$username}','{$password}','{$registdate}') ";
	$smt=$pdo->prepare($sql);
	if ($reg==$vercode) {
			if ($smt->execute()) {
				$_SESSION['username']=$username;
				$_SESSION['password']=$password;
		echo "<script>alert('注册成功');location.href='login.php';</script>";
			}else{
				echo "<script>alert('发生错误，请重新注册');return false;</script>";
			}
	}
	else{
		echo "<script>alert('验证码错误请重新输入');location.href='login.php#login';</script>";
	}
	
 ?>
 	
 </body>
 </html>