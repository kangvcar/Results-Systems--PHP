<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>无标题文档</title>
</head>
<body>
<form action="zhucedo.php" method="post">
	<table>
		<tr>
			<td colspan="2"><h1>欢迎你来到注册页面</h1></td>
		</tr>
		<tr><td>&nbsp;</td></tr>
		<tr>
			<td>用 户：</td>
			<td><input name="yh" type="text" value="请输入您的用户名" onfocus="if (value =='请输入您的用户名'){value =''}" onblur="if (value ==''){value='请输入您的用户名'}"/></td>
		</tr>
		<tr><td>&nbsp;</td></tr>
		<tr>
			<td>密 码：</td>
			<td><input name="mm" type="text" value="请输入您的密码" onfocus="if (value =='请输入您的密码'){value =''}" onblur="if (value ==''){value='请输入您的密码'}"/></td>
		</tr>
		<tr><td>&nbsp;</td></tr>
		<tr>
			<td>邮 箱：</td>
			<td><input name="yx" type="text" value="请输入邮箱" onfocus="if (value =='请输入邮箱'){value =''}" onblur="if (value ==''){value='请输入邮箱'}"/></td>
		</tr>
		<tr><td>&nbsp;</td></tr>
		<tr>
			<td>手机号码：</td>
			<td><input name="hm" type="text" value="请输入手机号码" onfocus="if (value =='请输入手机号码'){value =''}" onblur="if (value ==''){value='请输入手机号码'}"/></td>
		</tr>
		<tr><td>&nbsp;</td></tr>
		<tr>
			<td>地 址：</td>
			<td><input name="dz" type="text" value="请输入地址" onfocus="if (value =='请输入地址'){value =''}" onblur="if (value ==''){value='请输入地址'}"/></td>
		</tr>
		<tr><td>&nbsp;</td></tr>
		<tr>
			<td align="center"><input type="submit" name="sub" value="注册"</td>
			<td align="center"><input type="button" name="fh" value="返回" onClick="location.href='denglv.php'"></td>
		</tr>
	</table>
</form>
</body>
</html>