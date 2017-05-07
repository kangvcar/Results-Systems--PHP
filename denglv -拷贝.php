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
	<form action="denglvdo.php" method="post">
		<table>
			<tr>
				<td colspan="2">
					<h1>欢迎使用登录系统<h1>
				</td>
			</tr>
		<tr><td>&nbsp;</td></tr>
		<tr><td>&nbsp;</td></tr>
		<tr>
			<td> 用 户：</td>
			<td>
				<input name="yh" type="text" value="请输入您的用户名"/>
			</td>
		</tr>
		<tr><td>&nbsp;</td></tr>
		<tr>
			<td> 密 码：</td>
			<td>
				<input name="mm" type="password" value="请输入您的密码"/>
			</td>
		</tr>
		<tr><td>&nbsp;</td></tr>
		<tr>
			<td height="50px">验证码：</td>
			<td height="50px">
				<input name="yzm" type="text"/>&nbsp;&nbsp;
				<img src="png.php"  onClick="this.src=this.src+'?'+Math.random()"/>
			</td>
		</tr>
		<tr><td>&nbsp;</td></tr>
		<tr>
			<td align="center">
				<input type="submit" name="sub" value="登录">
			</td>
			<td align="center">
				<input type="button" name="zc" value="注册" onClick="location.href='zhuce.php'">
			</td>
		</tr>
		</table>
	</form>
</body>
</html>