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
	$tjxm = $_POST['tjxm'];
	$tjkmid = $_POST['tjkmid'];
	$tjcj = $_POST['tjcj'];
	$sq1 = 'INSERT INTO cj(xuehao,kmid,cj) VALUES ("'.$tjxh.'","'.$tjkmid.'","'.$tjcj.'")';
	$h2 = mysql_query($sq1);
	$sq3 = 'SELECT xuehao FROM student WHERE xuehao="'.$tjxh.'"';
	$fh1 = mysql_query($sq3);
	$p1 = mysql_num_rows($fh1);
	if($p1 == 0){
		$sq2 = 'INSERT INTO student(xuehao,name) VALUES ("'.$tjxh.'","'.$tjxm.'")';
		$fh2 = mysql_query($sq2);
		//$p2 = mysql_num_rows($fh2);
		if($fh2 != false){
			echo '<script>alert("添加成绩成功！");location.href="tjcj.php";</script>';
		}else{
			echo '<script>alert("添加成绩失败！");location.href="tjcj.php";</script>';
		}
	}else{
			echo '<script>alert("添加成绩成功！");location.href="tjcj.php";</script>';
		}
?>
</body>
</html>