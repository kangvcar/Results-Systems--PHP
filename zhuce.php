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
			<h1 class="text-center text-info">
				注册帐号
			</h1>
			<p align="center">(注意：注册管理员帐号，非学生帐号)</p>
			<div class="row clearfix">
				<div class="col-md-3 column">
				</div>
				<div class="col-md-6 column">
					<form action="zhucedo.php" method="post" class="form-horizontal" role="form">
						<div class="form-group">
							 <label for="inputEmail3" class="col-sm-2 control-label">用户名</label>
							<div class="col-sm-10">
								<input type="text" name="yh" class="form-control" placeholder="请输入你的用户名" />		<!--name=yh-->
							</div>
						</div>
						<div class="form-group">
							 <label for="inputPassword3" class="col-sm-2 control-label">密码</label>
							<div class="col-sm-10">
								<input type="password" name="mm" class="form-control" id="inputPassword3" placeholder="请输入你的密码"/>		<!--name=mm-->
							</div>
						</div>
						<div class="form-group">
							 <label for="inputEmail3" class="col-sm-2 control-label">Email</label>
							<div class="col-sm-10">
								<input type="email" ng-model="userid" name="yx" class="form-control" placeholder="请输入你的邮箱地址"  />		<!--name=yh-->
							</div>
						</div>
						<div class="form-group">
							 <label for="inputEmail3" class="col-sm-2 control-label">手机号码</label>
							<div class="col-sm-10">
								<input type="number" name="hm" class="form-control" placeholder="请输入你的手机号码" />		<!--name=yh-->
							</div>
						</div>
						<div class="form-group">
							 <label for="inputEmail3" class="col-sm-2 control-label">地址</label>
							<div class="col-sm-10">
								<input type="text" name="dz" class="form-control" placeholder="请输入你的地址" />		<!--name=yh-->
							</div>
						</div>
						<div class="form-group">
							<div class="col-sm-offset-2 col-sm-10">
								 <input type="submit" name="sub" value="注册" class="btn btn-default"/>&nbsp;&nbsp;&nbsp;&nbsp;
								 <a href="denglv.php"><input type="button" value="登录" class="btn btn-default"/></a>
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