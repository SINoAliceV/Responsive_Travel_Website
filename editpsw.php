<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title></title>
	</head>
	<body>
		<?php
			require('conn.php');
			$username=$_POST['username'];
			$password=$_POST["password"];
			
			$sql="update user set password='$password' where username='$username';";
			mysql_query($sql) or die('执行失败');
			echo "<script>
						alert('修改成功!');
						location.href='login.html';
				  </script>";	
		?>
	</body>
</html>