<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
	</head>
	<body>
		<?php
			require('conn.php');
			
			$username=$_POST['username']; 
			$password=$_POST['password'];
			
			
			
			$sql="select * from user where username='$username'";
			$result=mysql_query($sql); 
			
			if(mysql_num_rows($result)>0){       //如果已经查到已注册的用户名
				echo "<script>
						alert('该用户已注册!');
						history.go(-1)
					</script>";
				exit();
			}
			$sql="insert into user(username,password) values('$username','$password')";
			$affected=mysql_query($sql);        //注册信息插入到user
			
			if($affected==1){
				echo "<script>
						alert('注册成功!');
						history.go(-2)
					</script>";
				exit();
			}
		?>
	</body>
</html>