<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>主页</title>
<link type="text/css" rel="stylesheet" href="bootstrap-3.3.7-dist/css/bootstrap.css">
<script type="text/javascript" src="bootstrap-3.3.7-dist/js/bootstrap.js"></script>
<script type="text/javascript" src="jquery-3.2.1.min.js"></script>
</head>	

<body>
<?php
	session_start();		//开始seccion
	if(!isset($_SESSION['dl']) or isset($_GET['tuichu'])){		//判断是否登录或是否点击退出
		unset($_SESSION['dl']);		//如果已点击退出则unset($_SESSION['dl'])变量
		echo "<script>alert('请先登录');location.href='denglv.php';</script>";		//提示重新登录
		exit;		//中断程序
	}
?>
<div class="container">
	<div class="row clearfix">
		<div class="col-md-12 column">
			<nav class="navbar navbar-default" role="navigation">
				<div class="navbar-header">
					 <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> <span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button> 
					 	<a class="navbar-brand" href="#">
					 		当前用户：
					 		<?php 		//用seccion传输当前用户变量
								$_SESSION['passwd'];
								echo $_SESSION['name'];
							?>
					 	</a>
				</div>
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav">
						<li class="active">
							 <a href="mima.php">修改密码</a>
						</li>
					</ul>
					<ul class="nav navbar-nav navbar-right">
						<li>
							 <a href="index.php?tuichu=1">退出登录</a>
						</li>
					</ul>
				</div>
			</nav>
<!--	----------------------以上是导航栏------------------------------------   -->
			<h1 class="text-center text-info">
				欢迎使用教务管理系统
			</h1>
			<h3 class="text-center text-info">成绩管理中心</h3>
			<form action="" method="post" class="form-horizontal" role="form">
				<div class="form-group">
					 <label for="inputEmail3" class="col-sm-5 control-label">学号</label>
					<div class="col-sm-3">
						<input type="text" name="cxxh" class="form-control" id="inputEmail3" />		<!--name=cxxh-->
					</div>
				</div>
				<div class="form-group">
					 <label for="inputPassword3" class="col-sm-5 control-label">科目</label>
					<div class="col-sm-3">
						<input type="text" name="cxkm" class="form-control" id="inputPassword3" />		<!--name=cxkm-->
					</div>
				</div>
				<div class="form-group">
					<div class="col-sm-offset-5 col-sm-5">
						 <input type="submit" name="submit" class="btn btn-info" value="查询成绩">		<!--name=submit-->
						<a href="cxsy.php"><input type="button" class="btn btn-primary" value="所有成绩"></a>		<!--超链接-->
						<a href="tjcj.php"><input type="button" class="btn btn-success" value="添加成绩"></a>		<!--超链接-->
					</div>
				</div>
			</form>
<!--	----------------------以上是表单------------------------------------   -->
<?php
		@$submit = $_POST['submit'];
		@$cxxh = $_POST['cxxh'];
		@$cxkm = $_POST['cxkm'];	
		if(isset($submit) and !empty($cxxh)){		//判断是否点击了查询成绩按钮且学号不为空
			include('conn.php');
			$cxkm = $_POST['cxkm'];		//如有填入查询科目则赋值给变量$cxkm
			if(!empty($cxxh) and empty($cxkm)){		//判断是否点击了查询成绩按钮且学号和科目不为空
				$sql = 'SELECT cj.xuehao, cj.kmid,student.name, kemu.kmmc, cj.cj FROM cj LEFT JOIN student ON cj.xuehao=student.xuehao LEFT JOIN kemu ON kemu.kmid=cj.kmid WHERE cj.xuehao="'.$cxxh.'";';		//SQL查询语句，重点！！！
			}
			if(!empty($cxxh) and !empty($cxkm)){
				$sql = 'SELECT cj.xuehao, cj.kmid, student.name,kemu.kmmc,cj.cj FROM cj LEFT JOIN student ON cj.xuehao=student.xuehao LEFT JOIN kemu ON kemu.kmid=cj.kmid WHERE cj.xuehao="'.$cxxh.'" AND kemu.kmmc="'.$cxkm.'";';		//SQL查询语句，重点！！！
			}
			$r = mysql_query($sql);
			$row = mysql_fetch_object($r);
			if(!$row){
				echo '<p align="center">无查询结果</p>';
			}else{
				echo '<table class="table table-bordered table-hover">';   
				echo '<thead>';
				echo '<tr>';
				echo '<th>学号</th>';
				echo '<th>姓名</th>';
				echo '<th>科目</th>';
				echo '<th>成绩</th>';
				echo '<th>修改</th>';
				echo '<th>删除</th>';
				echo '</tr>';
				echo '</thead>';
				echo '<tbody>';
				do{
					echo '<tr class="success">';
					echo '<td>'.$row->xuehao.'</td>';
					echo '<td>'.$row->name.'</td>';
					echo '<td>'.$row->kmmc.'</td>';
					echo '<td>'.$row->cj.'</td>';
					echo '<td width="40"><a href="modify.php?xuehao='.$row->xuehao.'&kmid='.$row->kmid.'"><img src="update.gif"/></a></td>';
					echo '<td  width="40"><a href="del.php?xuehao='.$row->xuehao.'&kmid='.$row->kmid.'" onclick="return cform();"><img src="delete.gif"/></a></td>';
					echo '</tr>';
				}while($row=mysql_fetch_object($r));
				echo '</tbody>';
			}
		}
?>
<!--	----------------------以上是php处理------------------------------------   -->
		</div>
	</div>
</div>

</body>
</html>