<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>主页</title>
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
					 		<?php 		//用seccion传输当前用户变量
								
								echo $_SESSION['name'];
							?>
					 	</a>
				</div>
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav">
						<li class="active">
							 <a href="index.php">主页</a>
						</li>
						<li class="alert-info">
							 <a href="tjxj.php">添加学籍信息</a>
						</li>
						<li class="alert-info">
							 <a href="syxj.php">所有学籍信息</a>
						</li>
						<li class="alert-info">
							 <a href="tjkm.php">添加科目</a>
						</li>
						<li class="alert-info">
							 <a href="sykm.php">所有科目</a>
						</li>
						<li class="alert-info">
							 <a href="cxsy.php">所有成绩</a>
						</li>
					</ul>
				</div>
			</nav>
<!--	----------------------以上是导航栏------------------------------------   -->
			<h1 class="text-center text-info">
				学生成绩图表分析
			</h1><hr>
			<div class="form-group">
					<div class="col-sm-offset-5 col-sm-5">
						<a href="jpg1.php"><input type="button" class="btn btn-primary btn-lg" value="所有科目平均成绩"></a>		<!--超链接<--><br><br>
						<a href="jpg2.php"><input type="button" class="btn btn-success btn-lg" value="所有科目的最高分"></a>		<!--超链接--><br><br>
						<a href="jpg3.php"><input type="button" class="btn btn-danger btn-lg" value="所有科目的最低分"></a>		<!--超链接--><br><br>
						<a href="jpg4.php"><input type="button" class="btn btn-warning btn-lg" value="学生所有科目平均成绩"></a>		<!--超链接--><br><br>
					</div>
				</div>
			
			
			
			
<!--	----------------------以上是------------------------------------   -->
		</div>
	</div>
</div>

</body>
</html>