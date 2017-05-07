<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>修改信息</title>
<link type="text/css" rel="stylesheet" href="bootstrap-3.3.7-dist/css/bootstrap.css">
<script type="text/javascript" src="bootstrap-3.3.7-dist/js/bootstrap.js"></script>
<script type="text/javascript" src="jquery-3.2.1.min.js"></script>
</head>

<body>
<div align="center">
<?php
	include('conn.php');
	if(isset($_GET['xuehao'])){
		$xuehao = $_GET['xuehao'];
		$kmid = $_GET['kmid'];
		$sql = 'select * from cj where xuehao='.$xuehao.' and kmid='.$kmid.'';;		
		$r = mysql_query($sql);
		$row = mysql_fetch_object($r);
		$xuehao = $row->xuehao;
		$kmid = $row->kmid;
		$cj = $row->cj;
		//mysql_free_result($r);
		//mysql_close($conn);
		echo '<form action="modifydo.php" method="post">';
		echo '<p>修改信息</p>';
		echo '<input type="hidden" name="xuehao" value="'.$xuehao.'"/>';
		echo '学号：<input type="text" name="xuehao" value="'.$xuehao.'" /><br/>';
		echo '科目ID：<input type="text" name="kmid" value="'.$kmid.'" /><br/>';
		echo '成绩：<input type="text" name="cj" value="'.$cj.'" /><br/>';
		echo '<input type="submit" value="修改" name="sub" />';
		echo '<form>';
	}else{
		echo '<script>alert("请先选择需要修改的成绩");location.href="index.php";</script>';
	}
?>
</div>
</body>
</html>