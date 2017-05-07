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
		$kmid = $_GET['kmid'];
		$page = $_GET['page'];
		$sql = 'delete from cj where xuehao='.$xuehao.' and kmid='.$kmid.'';		
		$r = mysql_query($sql);
		if($r){
			echo '<script>alert("删除成功");</script>';
			if($page == "2"){
				echo "<script>location.href='cxsy.php';</script>";
			}elseif($page == "1"){
				echo "<script>location.href='index.php';</script>";
			}
			
		}else{
			echo '<script>alert("删除失败");location.href="index.php";</script>';
		}
	
	}else{
		echo '<script>alert("请先选择需要删除的条目");location.href="index.php";</script>';
		
	}
?>
</body>
</html>