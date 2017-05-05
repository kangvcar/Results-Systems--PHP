<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>登录</title>
<link type="text/css" rel="stylesheet" href="bootstrap-3.3.7-dist/css/bootstrap.css">
<script type="text/javascript" src="bootstrap-3.3.7-dist/js/bootstrap.js"></script>
<script type="text/javascript" src="jquery-3.2.1.min.js"></script>
</head>

<body>

<div class="container">
	<div class="row clearfix">
		<div class="col-md-12 column">
			<h1 class="text-center text-info">
				登录教务系统
			</h1>
			<h1>&nbsp;</h1>
			<div class="row clearfix">
				<div class="col-md-3 column">
				</div>
				<div class="col-md-6 column">
					<form action="denglvdo.php" method="post" class="form-horizontal" role="form">
						<div class="form-group">
							 <label for="inputEmail3" class="col-sm-2 control-label">用户名</label>
							<div class="col-sm-10">
								<input type="text" name="yh" class="form-control" id="inputEmail3" />		<!--name=yh-->
							</div>
						</div>
						<div class="form-group">
							 <label for="inputPassword3" class="col-sm-2 control-label">密码</label>
							<div class="col-sm-10">
								<input type="password" name="mm" class="form-control" id="inputPassword3" />		<!--name=mm-->
							</div>
						</div>
						<div class="form-group">
							<label for="inputEmail3" class="col-sm-2 control-label">验证码</label>
							<div class="col-sm-10">
								<input type="text" name="yzm" class="form-control" id="inputPassword3" />		<!--name=yzm-->
							</div>
							<div class="col-sm-offset-2 col-sm-10">
								<img src="png.php" onClick="this.src=this.src+'?'+Math.random()"/>		<!--验证码-->
							</div>
						</div>
						<div class="form-group">
							<div class="col-sm-offset-2 col-sm-10">
								 <input type="submit" name="sub" value="登录" class="btn btn-default"/>&nbsp;&nbsp;&nbsp;&nbsp;
								 <a href="zhuce.php"><input type="button" value="注册" class="btn btn-default"/></a>
							</div>
						</div>
					</form>
				</div>
				<div class="col-md-3 column">
				</div>
			</div>
		</div>
	</div>
</div>
</body>
</html>