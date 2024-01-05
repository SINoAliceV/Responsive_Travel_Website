<html>
	<head>
		<meta charset="utf-8">
		<title></title>
	</head>
	<body>
		<?php
			session_start();
			
			require('conn.php');
			$username=$_POST['username'];
			$password=$_POST["password"];
				
			$sql="select * from user where username='$username' and password='$password'";
			$result=mysql_query($sql);
			
			if(mysql_num_rows($result)==0){       //如果查不到记录
				unset($_SESSION['username']);
				echo "<script>
						alert('输入的用户名或密码不正确!');
						history.go(-1)
					</script>";
				exit();
			}else{
				$row=mysql_fetch_assoc($result);
				$_SESSION['username']=$row['username'];     //保存到session
				echo "<script>
						alert('登录成功!');
					</script>";
				echo "<script>
						location.href='index-in.php'
					</script>";
			}
			
		?>
	</body>
</html>