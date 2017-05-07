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
<script>
	function del() {
		var msg = "您真的确定要删除所有成绩吗？\n\n请确认!!!!!";
		if (confirm(msg)==true){
			return true;
		}else{
			return false;
		}
	}
</script>
<?php
	include('yzdl.php');
?>
<div class="container">
	<div class="row clearfix">
		<div class="col-md-12 column">
			<nav class="navbar navbar-default" role="navigation">
				<div class="navbar-header">
					 <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> <span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button> <a class="navbar-brand" href="index.php">首页</a>
				</div>
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav">
						<li class="alert-success">
							 <a href="tjcj.php">添加成绩</a>
						</li>
						<li class="alert-danger">
							 <a href="delall.php" onclick="javascript:return del();">删除所有成绩</a>
						</li>
						<li class="alert-danger">
							 <a href="tblist.php">成绩图表分析</a>
						</li>
					</ul>
				</div>
				
			</nav>
			<h1 align="center">
				所有学生的成绩
			</h1>
<!--	----------------------黄金分割线------------------------------------   -->			
<?php
		include('conn.php');
		$sql = 'select distinct cj.xuehao,cj.kmid,student.name, student.banji, kemu.kmmc,cj.cj from cj,student,kemu where student.xuehao=cj.xuehao and kemu.kmid=cj.kmid';
		$r = mysql_query($sql);
		$row = mysql_fetch_object($r);
			if(!$row){
				echo '<p align="center">无查询结果</p>';
			}else{
				echo '<table class="table table-bordered table-hover">';   
				echo '<thead>';
				echo '<tr>';
				echo '<th>学号</th>';
				echo '<th>班级</th>';
				echo '<th>姓名</th>';
				echo '<th>科目</th>';
				echo '<th>成绩</th>';
				echo '<th>修改</th>';
				echo '<th>删除</th>';
				echo '</tr>';
				echo '</thead>';
				echo '<tbody>';
				do{
					echo '<tr class="success">';
					echo '<td>'.$row->xuehao.'</td>';
					echo '<td>'.$row->banji.'</td>';
					echo '<td>'.$row->name.'</td>';
					echo '<td>'.$row->kmmc.'</td>';
					echo '<td>'.$row->cj.'</td>';
					echo '<td width="40"><a href="modify.php?xuehao='.$row->xuehao.'&kmid='.$row->kmid.'&page=2"><img src="update.gif"/></a></td>';
					echo '<td  width="40"><a href="del.php?xuehao='.$row->xuehao.'&kmid='.$row->kmid.'&page=2"><img src="delete.gif"/></a></td>';
					echo '</tr>';
				}while($row=mysql_fetch_object($r));
				echo '</tbody>';
			}
?>
		</div>
	</div>
</div>
</body>
</html>