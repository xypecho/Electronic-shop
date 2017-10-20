<?php 
	echo "<script>alert(1);</script>";
	session_start();
	session_unset();
	session_destroy();
	echo "<script>location.href='login.php'</script>";
 ?>