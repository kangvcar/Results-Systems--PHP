<?php
	include("conn.php");
	session_start();
	if(isset($_POST['sub'])){		//判读是否点击了登录按钮
		$user = $_POST['yh'];		//赋值给变量
		if(empty($user)){		//判断用户名是否为空
					echo "<script>alert('请输入用户名');location.href='denglv.php';</script>"	;
		}
		$passwd = $_POST['mm'];		//赋值给变量
		if(empty($passwd)){		//判断密码是否为空
					echo "<script>alert('请输入密码');location.href='denglv.php';</script>"	;
		}
		$yzm = $_POST['yzm'];
		if(empty($yzm)){		//判断验证码是否为空
				$s=$_SESSION['r'];
			if($yzm!=$s){
					echo "<script>alert('验证码错误！');location.href='denglv.php';</script>";
						exit;
			}
		}
		@$sql="select id, name, passwd, mail, iphone, address from user where name='$user' and passwd =  '$passwd'";		//SQL查询是否存在用户名和密码
		@$rw=mysql_query($sql);
		$row = mysql_num_rows($rw);
		$ro = mysql_fetch_array($rw);
		$_SESSION['name'] = $ro['name'];
		$_SESSION['passwd'] = $ro['passwd'];
		$_SESSION['id']=$ro['id'];
		if($row>=1){
			$_SESSION['dl']   = '1';
			echo "<script> alert('登录成功');location.href='index.php';</script>";
		}else{
			echo "<script>alert('用户名或密码错误');location.href='denglv.php';</script>";
			}
	}
?>
