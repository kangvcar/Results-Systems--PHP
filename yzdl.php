<?php
	session_start();		//开始seccion
	if(!isset($_SESSION['dl']) or isset($_GET['tuichu'])){		//判断是否登录或是否点击退出
		unset($_SESSION['dl']);		//如果已点击退出则unset($_SESSION['dl'])变量
		echo "<script>alert('请先登录');location.href='denglv.php';</script>";		//提示重新登录
		exit;		//中断程序
	}
?>