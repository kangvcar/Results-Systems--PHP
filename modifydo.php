<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>修改信息</title>
</head>

<body>
<?php
	include('yzdl.php');
?>
<?php
	include('conn.php');
	if(isset($_POST['xuehao'])){
		$xuehao = $_POST['xuehao'];
		$kmid = $_POST['kmid'];
		$cj = $_POST['cj'];
		$page2 = $_POST['page1'];
		if($page2 == 11){
			$page3 = 'index.php';
		}elseif($page2 == 22){
			$page3 = 'cxsy.php';
		}
		$sql = 'UPDATE cj SET cj="'.$cj.'"  WHERE xuehao="'.$xuehao.'" AND kmid="'.$kmid.'"';	
		$r = mysql_query($sql);
		if($r==true){
			echo '<script>alert("修改成功");location.href="'.$page3.'";</script>';
		}else{
			echo '<script>alert("修改失败");location.href="index.php";</script>';
		}
	}else{
		echo '<script>alert("请先选择需要修改的条目");location.href="index.php";</script>';
	}
?>
</body>
</html>