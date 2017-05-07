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
							 <a href="syxj.php">所有学籍信息</a>
						</li>
					</ul>
				</div>
			</nav>
<!--	----------------------以上是导航栏------------------------------------   -->
			<h1 align="center">批量添加学籍信息</h1>
			<hr>	
			<?php
				include('conn.php');
				echo '<form action="tjxjdo.php" method="post" class="form-horizontal" role="form">';
				for($i=0; $i<4; $i++){
					echo '<div class="form-group">';
					echo '<label for="inputEmail3" class="col-sm-5 control-label">学号：</label>';
					echo '<div class="col-sm-3">';
					echo '<input type="text" name="pltjxh[]" class="form-control"  placeholder="请输入学号" />';
					echo '</div>';
					echo '</div>';
					echo '<div class="form-group">';
					echo '<label for="inputEmail3" class="col-sm-5 control-label">姓名：</label>';
					echo '<div class="col-sm-3">';
					echo '<input type="text" name="pltjxm[]" class="form-control" placeholder="请输入姓名" />';
					echo '</div>';
					echo '</div>';
					echo '<div class="form-group">';
					echo '<label for="inputEmail3" class="col-sm-5 control-label">性别：</label>';
					echo '<div class="col-sm-3">';
					echo '<input type="text" name="pltjxb[]" class="form-control" placeholder="请输入性别" />';
					echo '</div>';
					echo '</div>';
					echo '<div class="form-group">';
					echo '<label for="inputEmail3" class="col-sm-5 control-label">班级：</label>';
					echo '<div class="col-sm-3">';
					echo '<input type="text" name="pltjbj[]" class="form-control" placeholder="请输入班级" />';
					echo '</div>';
					echo '</div>';
					echo '<hr>';
				}
				echo '<div class="form-group">';
				echo '<div class="col-sm-offset-5 col-sm-5">';
				echo '<input type="submit" name="sub2" value="批量添加" class="btn btn-default"/>&nbsp;&nbsp;&nbsp;&nbsp;';
				echo '</div>';
				echo '</div>';
				echo '</form>';
			?>
		</div>
	</div>
</div>
</body>
</html>