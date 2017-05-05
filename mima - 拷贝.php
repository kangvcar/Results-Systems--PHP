<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>无标题文档</title>

</head>

<body>
<div id="top">
	<p><b>修 改 密 码</b></p>
</div>
<div id="center">
	
</div>
<form action="" method="post">
	<table >
		<tr>
			<td>用 户：</td>
			<td><input type="text" name="name" value="<?php
					session_start();
				echo $_SESSION['name'];
				?>">
			</td>
		</tr>
		<tr><td>&nbsp;</td></tr>
		<tr>
			<td>原密码：</td>
			<td><input type="password" name="passwd1"></td>
		</tr>
			<tr><td>&nbsp;</td></tr>
		<tr>
			<td>新密码</td>
			<td><input type="password" name="passwd2"></td>
		</tr>
			<tr><td>&nbsp;</td></tr>
			<tr><td>&nbsp;</td></tr>
		<tr>
			<td align="center"><input type="submit" name="sub" value="修改"></td>
			<td align="center"><input type="button" name="but" value="返回" onClick="location.href='index.php'"</td>
		</tr>
	</table>
</form>
<?php
	if(isset($_POST['sub'])){
		$id = $_SESSION['id'];
		if(empty($_POST['passwd1']) or empty($_POST['passwd2'])){
			echo "<script>alert('密码不能留空;');</script>";
				exit;
		}
		$passwd = $_POST['passwd2'];
			if($_POST['passwd1']==$_POST['passwd2']){
				echo "<script>alert('两个密码一样;');</script>";
				exit;
			}
			if($_SERVER['passwd']!==$_POST['passwd1']){
				echo "<script>alert('原密码不正确;');</script>";
					exit;
			}
		$sql= 'update user set passwd="'.$passwd.'"where id="'.$id;
		$row=mysql_query($sql);
		if($row){
			echo '<script>alert("修改成功");location.href="denglv.php";</script>';
			
		}else{
			echo '<script>alert("修改失败");location.href="mima.php?id='.$id.'";</script>';
		}
		
	}
?>
</body>
</html>