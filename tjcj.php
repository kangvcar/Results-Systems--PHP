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
							 <a href="cxsy.php">所有成绩</a>
						</li>
					</ul>
				</div>
				
			</nav>
			<h1 align="center">
				添加成绩条目
			</h1>
			<form action="tjcjdo.php" method="post" class="form-horizontal" role="form">
				<div class="form-group">
					 <label for="inputEmail3" class="col-sm-5 control-label">学号</label>
					<div class="col-sm-3">
						<input type="text" name="tjxh" class="form-control" id="inputEmail3" />
					</div>
				</div>
				<div class="form-group">
					 <label for="inputEmail3" class="col-sm-5 control-label">姓名</label>
					<div class="col-sm-3">
						<input type="text" name="tjxm" class="form-control" id="inputEmail3" />
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
						<input type="text" name="tjcj" class="form-control" id="inputEmail3" />
					</div>
				</div>
				<div class="form-group">
					<div class="col-sm-offset-5 col-sm-5">
						 <input type="submit" name="tj" class="btn btn-info" value="添加成绩">
					</div>
				</div>
			</form>		
		</div>
	</div>
</div>
</body>
</html>