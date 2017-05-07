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
								//$_SESSION['passwd'];
								echo $_SESSION['name'];
							?>
					 	</a>
				</div>
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav">
						<li class="active">
							 <a href="index.php">首页</a>
						</li>
					</ul>
					<ul class="nav navbar-nav navbar-right">
						<li class="alert-danger">
							 <a href="index.php?tuichu=1">退出登录</a>
						</li>
					</ul>
				</div>
			</nav>
			<h1 align="center">修改密码</h1>
			<form action="" method="post" class="form-horizontal" role="form">
				<!--<div class="form-group">
					 <label for="inputEmail3" class="col-sm-5 control-label">用户名</label>
					<div class="col-sm-3">
						<input type="text" name="name" value="" class="form-control" placeholder="请当前用户名" />
					</div>
				</div>-->
				<input type="hidden" name="name" value="<?php echo $_SESSION['name'];?>">
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
						 <input type="submit" name="sub" class="btn btn-success btn-lg" value="修改密码">
					</div>
				</div>
			</form>
		</div>
	</div>
</div>
<?php
	if(isset($_POST['sub'])){
		include('conn.php');
		$id = $_SESSION['id'];
		$sqlmm = 'SELECT passwd FROM user WHERE id="'.$id.'"';
		$r = mysql_query($sqlmm);
		while($rel = mysql_fetch_array($r)){
			$oldpasswd = $rel[0];
		}
		//var_dump($new);
		//exit;
		if(empty($_POST['passwd1']) or empty($_POST['passwd2'])){
			echo "<script>alert('密码不能为空！');</script>";
			exit;
		}
		$newpasswd = $_POST['passwd2'];
			if($_POST['passwd1'] == $newpasswd){
				echo "<script>alert('新密码不能与旧密码一致！');</script>";
				exit;
			}
			if($oldpasswd != $_POST['passwd1']){
				echo "<script>alert('原密码不正确');</script>";
				exit;
			}
		$sql= 'UPDATE user SET passwd="'.$newpasswd.'" WHERE id="'.$id.'"';
		$row=mysql_query($sql);
		if($row){
			echo '<script>alert("修改成功");location.href="index.php?tuichu=1";</script>';
			
		}else{
			echo '<script>alert("修改失败");location.href="mima.php?id='.id.'";</script>';
		}
		
	}
?>		
</body>
</html>