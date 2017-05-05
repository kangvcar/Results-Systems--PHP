<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>无标题文档</title>
</head>

<body>
<?php
	include('conn.php');
	$tjxh = $_POST['tjxh'];
	$tjkmid = $_POST['tjkmid'];
	$tjcj = $_POST['tjcj'];
	$sq1 = 'INSERT INTO cj(xuehao,kmid,cj) VALUES ("'.$tjxh.'","'.$tjkmid.'","'.$tjcj.'")';
	$h2 = mysql_query($sq1);
	if($h2){
		echo '<script>alert("添加成绩成功！");location.href="tjcj.php";</script>';
	}else{
		echo '<script>alert("添加成绩失败！");location.href="tjcj.php";</script>';
	}
?>
</body>
</html>