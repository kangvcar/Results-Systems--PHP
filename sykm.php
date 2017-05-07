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
						<li class="alert-info">
							 <a href="cxsy.php">所有成绩</a>
						</li>
						<li class="alert-info">
							 <a href="tjkm.php">添加科目</a>
						</li>
					</ul>
				</div>
				
			</nav>
			<h1 align="center">
				管理所有科目
			</h1>
<!--	----------------------黄金分割线------------------------------------   -->			
<?php
		include('conn.php');
		$sql = 'select distinct kmid, kmmc from kemu';
		$r = mysql_query($sql);
		$row = mysql_fetch_object($r);
			if(!$row){
				echo '无查询结果';
			}else{
				echo '<table class="table table-bordered table-hover">';   
				echo '<thead>';
				echo '<tr>';
				echo '<th>科目ID</th>';
				echo '<th>科目名称</th>';
				echo '<th>修改</th>';
				echo '<th>删除</th>';
				echo '</tr>';
				echo '</thead>';
				echo '<tbody>';
				do{
					echo '<tr class="success">';
					echo '<td>'.$row->kmid.'</td>';
					echo '<td>'.$row->kmmc.'</td>';
					echo '<td width="40"><a href="modifykm.php?kmid='.$row->kmid.'"><img src="update.gif"/></a></td>';
					echo '<td  width="40"><a href="delkm.php?kmid='.$row->kmid.'"><img src="delete.gif"/></a></td>';
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