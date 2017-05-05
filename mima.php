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
					 <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> <span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button> 
					 	<a class="navbar-brand" href="#">
					 		当前用户：
					 		<?php 
								session_start();
								$_SESSION['passwd'];
								echo $_SESSION['name'];
							?>
					 	</a>
				</div>
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav">
						<li class="active">
							 <a href="index.php"><<返回</a>
						</li>
					</ul>
					<ul class="nav navbar-nav navbar-right">
						<li>
							 <a href="denglv.php">退出登录</a>
						</li>
					</ul>
				</div>
			</nav>
			<h1 align="center">修改密码</h1>
			<form action="" method="post" class="form-horizontal" role="form">
				<div class="form-group">
					 <label for="inputEmail3" class="col-sm-5 control-label">用户名</label>
					<div class="col-sm-3">
						<input type="text" name="name" value="" class="form-control" id="inputEmail3" />
					</div>
				</div>
				<div class="form-group">
					 <label for="inputPassword3" class="col-sm-5 control-label">原密码</label>
					<div class="col-sm-3">
						<input type="text" name="passwd1" class="form-control" id="inputPassword3" />
					</div>
				</div>
				<div class="form-group">
					 <label for="inputPassword3" class="col-sm-5 control-label">新密码</label>
					<div class="col-sm-3">
						<input type="text" name="passwd2" class="form-control" id="inputPassword3" />
					</div>
				</div>
				<div class="form-group">
					<div class="col-sm-offset-5 col-sm-5">
						 <input type="submit" name="sub" class="btn btn-info" value="修改密码">
					</div>
				</div>
			</form>
		</div>
	</div>
</div>		

<?php
	if(isset($_POST['sub'])){
		include('conn.php');
		$name = $_POST['name'];
		$sqlmima = 'SELECT passwd FROM user WHERE name="'.$name.'"';
		$r1 = mysql_query($sqlmima);
		if(mysql_num_rows($r1) > 0){
			while($r2 = mysql_fetch_array($r1)){
				$passwd = $r2[0];
			}
		}else{
			echo "<script>alert('用户名不存在');</script>";
			exit;
		}

		$id = $_SESSION['id'];
		if(empty($_POST['passwd1']) or empty($_POST['passwd2'])){
			echo "<script>alert('请输入密码');</script>";
			exit;
		}

		if($_POST['passwd1'] == $_POST['passwd2']){
			echo "<script>alert('新密码与旧密码相同');</script>";
			exit;

		}
		
		if($passwd !== $_POST['passwd1']){
			echo "<script>alert('原密码不正确');</script>";
			exit;
		}
		
		$newpasswd = $_POST['passwd2'];
		$sql= 'UPDATE user SET passwd="'.$newpasswd.'"where name="'.$name.'"';
		$row=mysql_query($sql);
		if($row){
			echo '<script>alert("修改成功");location.href="denglv.php";</script>';
			
		}else{
			echo '<script>alert("修改失败");location.href="mima.php?name="'.$name.'";</script>';
		}
		
	}
?>
</body>
</html>