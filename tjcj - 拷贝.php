<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>无标题文档</title>
<link type="text/css" rel="stylesheet" href="bootstrap-3.3.7-dist/css/bootstrap.css">
<script type="text/javascript" src="bootstrap-3.3.7-dist/js/bootstrap.js"></script>
<script type="text/javascript" src="jquery-3.2.1.min.js"></script>
</head>

<body>
<div>
	<p>
		<a href="index.php"><<返回</a>
		<a href="cxsy.php">查看所有成绩</a>
	</p>
</div>
<div align="center">
<h1>添加成绩信息</h1>
<form action="tjcjdo.php" method="post">
	学号：<input type="text" name="tjxh">
	姓名：<input type="text" name="tjxm">
	科目名称：
		<select name="tjkmid">
			<?php
				include('conn.php');
				$sqlkm = "select distinct kmmc,kmid from kemu;";	//查询科目语句
				$relkm = mysql_query($sqlkm);	//查询科目结果
				while($r = mysql_fetch_array($relkm)){
					echo "<option value=".$r[1].">".$r[0]."</option>";
				}
				mysql_close($conn);
			?>
		</select>
	成绩：<input type="text" name="tjcj">
	<input type="submit" name="tj" value="添加">
</form>

</div>
</body>
</html>