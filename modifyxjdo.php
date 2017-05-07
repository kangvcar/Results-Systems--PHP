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
		$name = $_POST['name'];
		$xingbie = $_POST['xingbie'];
		$banji = $_POST['banji'];
		$sql = 'UPDATE student SET xuehao="'.$xuehao.'",name="'.$name.'",xingbie="'.$xingbie.'", banji="'.$banji.'"  WHERE xuehao="'.$xuehao.'"';	
		$r = mysql_query($sql);
		if($r==true){
			echo '<script>alert("修改成功");location.href="syxj.php";</script>';
		}else{
			echo '<script>alert("修改失败");location.href="modifyxj.php?xuehao='.$xuehao.'";</script>';
		}
	}else{
		echo '<script>alert("请先选择需要修改的条目");location.href="syxj.php";</script>';
	}
?>
</body>
</html>