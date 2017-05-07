<?php
	//unset($_POST['sub']);		//使用禁止注册功能请取消注释
	if(isset($_POST['sub'])){
		include('conn.php');
		$name = $_POST['yh'];
		$passwd = $_POST['mm'];
		$mail = $_POST['yx'];
		$iphone = $_POST['hm'];
		$adderss = $_POST['dz'];
		if(!empty($name) and !empty($passwd)){
			$sql="INSERT INTO user(name, passwd, mail, iphone, address) VALUES ('$name','$passwd','$mail','$iphone','$adderss')";
			$row=mysql_query($sql);
			if($row){
				echo "<script> alert('注册成功');location.href='denglv.php';</script>"; 
			}else{
				echo "<script> alert('注册失败');location.href='zhuce.php';</script>"; 
			}
		}else{
			echo "<script> alert('用户名或密码不能为空');location.href='zhuce.php';</script>"; 
		}
	}else{
			echo "<script> alert('禁止注册');location.href='denglv.php';</script>";
	}
?>