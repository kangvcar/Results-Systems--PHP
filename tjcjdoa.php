<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>批量添加成绩</title>
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
						<li class="active">
							 <a href="cxsy.php">所有成绩</a>
						</li>
					</ul>
				</div>
				
			</nav>
			<h1 align="center">批量添加成绩</h1>
			<hr>
<!--	----------------------以上是导航栏------------------------------------   -->
			<?php
				include('conn.php');
				@$tjkmida = $_POST['tjkmida'];
				$sqlkm = 'select distinct kmmc from kemu where kmid="'.$tjkmida.'";';	//查询班级语句
				$relkm = mysql_query($sqlkm);	//查询班级结果
				while($r = mysql_fetch_array($relkm)){
					$kmmca = $r[0];
				}
				@$tjbja = $_POST['tjbja'];
				echo '<p align="center" style="font-size: 20px; color: brown;">批量添加  '.$tjbja.'  班的  '.$kmmca.'  成绩</p>';
				$sql3 = 'SELECT name,xuehao FROM student WHERE banji="'.$tjbja.'"';
				$r = mysql_query($sql3);
				echo '<form action="tjcjdoab.php" method="post" class="form-horizontal" role="form">';
				while($row = mysql_fetch_array($r)){
					echo '<div class="form-group">';
					echo '<label for="inputEmail3" class="col-sm-5 control-label">姓名：'.$row[0].'&nbsp;&nbsp;&nbsp;&nbsp;学号：'.$row[1].'  &nbsp;&nbsp;&nbsp;&nbsp;'.$kmmca.'成绩：</label>';
					echo '<div class="col-sm-3">';
					echo '<input type="hidden" name="pltjxh[]" value="'.$row[1].'">';
					echo '<input type="hidden" name="pltjkm[]" value="'.$tjkmida.'">';
					echo '<input type="text" name="pltjcj[]" class="form-control"  placeholder="请输入对应科目的成绩" />';
					echo '</div>';
					echo '</div>';
				}
				echo '<div class="form-group">';
				echo '<div class="col-sm-offset-5 col-sm-5">';
				echo '<input type="submit" name="sub2" value="批量添加" class="btn btn-success btn-lg"/>&nbsp;&nbsp;&nbsp;&nbsp;';
				echo '</div>';
				echo '</div>';
				echo '</form>';
				
				
			?>
			
</html>