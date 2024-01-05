<meta charset="utf-8">
<?php

	require('conn.php');
	
	$title=$_POST['title'];
	$author=$_POST['author'];
	$number=$_POST['number'];
	$content=$_POST['content'];
	$email=$_POST['email'];
	$ct=date("Y-m-d h:i:s");
	
	
	$sql="insert into lyb(title,author,number,content,email,date) values('$title','$author','$number','$content','$email','$ct')";
	
	
	mysql_query($sql) or die('执行失败');
	echo "<script>
				alert('留言成功!');
				location.href='index-in.php';
		  </script>";
	
?>