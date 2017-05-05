<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>修改信息</title>
</head>

<body>
<?php
	include('conn.php');
	if(isset($_POST['xuehao'])){
		$xuehao = $_POST['xuehao'];
		$kmid = $_POST['kmid'];
		$cj = $_POST['cj'];
		$sql = 'update cj set xuehao="'.$xuehao.'",kmid="'.$kmid.'",cj="'.$cj.'"  where xuehao="'.$xuehao.'"';	
		$r = mysql_query($sql);
		if($r==true){
			echo '<script>alert("修改成功");location.href="index.php";</script>';
		}else{
			echo '<script>alert("修改失败");location.href="modify.php?xuehao='.$xuehao.'";</script>';
		}
	}else{
		echo '<script>alert("请先选择需要修改的条目");location.href="index.php";</script>';
	}
?>
</body>
</html>