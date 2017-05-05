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
		<a href="index.php"><<返回</a>&nbsp;
		<a href="tjcj.php">添加学生成绩</a>
	</p>
</div>
<h1 align="center">所有学生成绩信息</h1>
<?php
		include('conn.php');
		$sql = 'select distinct cj.xuehao,cj.kmid,student.name,kemu.kmmc,cj.cj from cj,student,kemu where student.xuehao=cj.xuehao and kemu.kmid=cj.kmid';
		$r = mysql_query($sql);
		$row = mysql_fetch_object($r);
		if(!$row){
			echo '<p align="center">暂无成绩信息</p>';
		}else{
			echo '<table align="center" width="70%" border="1" cellpadding="5">';   
			echo '<tr>';
			echo '<td>学号</td>';
			echo '<td>姓名</td>';
			echo '<td>科目</td>';
			echo '<td>成绩</td>';
			echo '<td>修改</td>';
			echo '<td>删除</td>';
			echo '</tr>';  
			do{
				echo '<tr>';
				echo '<td>'.$row->xuehao.'</td>';
				echo '<td>'.$row->name.'</td>';
				echo '<td>'.$row->kmmc.'</td>';
				echo '<td>'.$row->cj.'</td>';
				echo '<td width="40"><a href="modify.php?xuehao='.$row->xuehao.'&kmid='.$row->kmid.'"><img src="update.gif"/></a></td>';
				echo '<td  width="40"><a href="del.php?xuehao='.$row->xuehao.'&kmid='.$row->kmid.'" onclick="return cform();"><img src="delete.gif"/></a></td>';
				echo '</tr>';

			}while($row=mysql_fetch_object($r));
		}
?>
</body>
</html>