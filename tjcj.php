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
<!--	----------------------以上是导航栏------------------------------------   -->
			<h1 align="center">添加成绩</h1>
			
<!--	----------------------按班级科目批量添加成绩------------------------------------   -->		
			<hr>	
			<h2 align="left">按班级科目批量添加成绩</h2>
			<form action="tjcjdoa.php" method="post" class="form-horizontal" role="form">
				<div class="form-group">
					 <label for="inputPassword3" class="col-sm-5 control-label">班级</label>
					<div class="col-sm-3">
						<select class="input-lg form-control" name="tjbja">
							<?php
								include('conn.php');
								$sqlkm = "select distinct banji from student;";	//查询班级语句
								$relkm = mysql_query($sqlkm);	//查询班级结果
								while($r = mysql_fetch_array($relkm)){
									echo "<option value=".$r[0].">".$r[0]."</option>";
								}
								mysql_close($conn);
							?>
						</select>
					</div>
				</div>
				<div class="form-group">
					 <label for="inputPassword3" class="col-sm-5 control-label">科目名称</label>
					<div class="col-sm-3">
						<select class="input-lg form-control" name="tjkmida">
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
					</div>
				</div>
				<div class="form-group">
					<div class="col-sm-offset-5 col-sm-5">
						 <input type="submit" name="tj" class="btn btn-info  btn-lg" value="添加成绩">
					</div>
				</div>
			</form>
<!--	----------------------按单个学号科目添加成绩------------------------------------   -->	
			<br><br><hr>					
			<h2 align="left">按单个学号科目添加成绩</h2>
			<form action="tjcjdo.php" method="post" class="form-horizontal" role="form">
				<div class="form-group">
					 <label for="inputPassword3" class="col-sm-5 control-label">学号</label>
					<div class="col-sm-3">
						<select class="input-lg form-control" name="tjxh">
							<?php
								include('conn.php');
								$sqlkm = "select distinct xuehao from student;";	//查询学号语句
								$relkm = mysql_query($sqlkm);	//查询学号结果
								while($r = mysql_fetch_array($relkm)){
									echo "<option value=".$r[0].">".$r[0]."</option>";
								}
								mysql_close($conn);
							?>
						</select>
					</div>
				</div>
				<div class="form-group">
					 <label for="inputPassword3" class="col-sm-5 control-label">科目名称</label>
					<div class="col-sm-3">
						<select class="input-lg form-control" name="tjkmid">
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
					</div>
				</div>
				<div class="form-group">
					 <label for="inputEmail3" class="col-sm-5 control-label">成绩</label>
					<div class="col-sm-3">
						<input type="text" name="tjcj" class="form-control" placeholder="请输入指定科目的成绩" />
					</div>
				</div>
				<div class="form-group">
					<div class="col-sm-offset-5 col-sm-5">
						 <input type="submit" name="tj" class="btn btn-info  btn-lg" value="添加成绩">
					</div>
				</div>
			</form>		
		</div>
	</div>
</div>
</body>
</html>