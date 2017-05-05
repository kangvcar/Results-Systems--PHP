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
<div class="container">
	<div class="row clearfix">
		<div class="col-md-12 column">
			<nav class="navbar navbar-default" role="navigation">
				<div class="navbar-header">
					 <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> <span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button> <a class="navbar-brand" href="index.php"><<返回</a>
				</div>
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav">
						<li class="active">
							 <a href="tjcj.php">添加成绩</a>
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
		$sql = 'select distinct cj.xuehao,cj.kmid,student.name,kemu.kmmc,cj.cj from cj,student,kemu where student.xuehao=cj.xuehao and kemu.kmid=cj.kmid';
		$r = mysql_query($sql);
		$row = mysql_fetch_object($r);
			if(!$row){
				echo '无查询结果';
			}else{
				echo '<table class="table table-bordered table-hover">';   
				echo '<thead>';
				echo '<tr>';
				echo '<th>学号</th>';
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
					echo '<td>'.$row->name.'</td>';
					echo '<td>'.$row->kmmc.'</td>';
					echo '<td>'.$row->cj.'</td>';
					echo '<td width="40"><a href="modify.php?xuehao='.$row->xuehao.'&kmid='.$row->kmid.'"><img src="update.gif"/></a></td>';
					echo '<td  width="40"><a href="del.php?xuehao='.$row->xuehao.'&kmid='.$row->kmid.'" onclick="return cform();"><img src="delete.gif"/></a></td>';
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