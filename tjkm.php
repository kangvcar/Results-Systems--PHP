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
					 <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> <span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button> 
					 	<a class="navbar-brand" href="#">
					 		当前用户：
					 		<?php 
								//session_start();
								$_SESSION['passwd'];
								echo $_SESSION['name'];
							?>
					 	</a>
				</div>
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav">
						<li class="active">
							 <a href="index.php">首页</a>
						</li>
						<li class="alert-info">
							 <a href="cxsy.php">所有成绩</a>
						</li>
						<li class="alert-info">
							 <a href="sykm.php">所有科目</a>
						</li>
					</ul>
				</div>
			</nav>
			<h1 align="center">添加科目</h1>
			<form action="tjkmdo.php" method="post" class="form-horizontal" role="form">
				<div class="form-group">
					 <label for="inputPassword3" class="col-sm-5 control-label">科目名称</label>
					<div class="col-sm-3">
						<input type="text" name="newkm" class="form-control" id="inputPassword3" />
					</div>
				</div>
				<div class="form-group">
					<div class="col-sm-offset-5 col-sm-5">
						 <input type="submit" name="sub" class="btn btn-success btn-lg" value="添加科目">
					</div>
				</div>
			</form>
		</div>
	</div>
</div>		
</body>
</html>