<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>修改公告</title>
</head>

<body>
<?php
	include('yzdl.php');
?>
<?php
	include('conn.php');
	if(isset($_GET['xuehao'])){
		$xuehao = $_GET['xuehao'];
		$sql = 'delete from student where xuehao='.$xuehao.'';		
		$r = mysql_query($sql);
		if($r){
			echo '<script>alert("删除成功");location.href="syxj.php";</script>';
		}else{
			echo '<script>alert("删除失败");location.href="syxj.php";</script>';
		}
	
	}else{
		echo '<script>alert("请先选择需要删除的条目");location.href="syxj.php";</script>';
		
	}
?>
</body>
</html>