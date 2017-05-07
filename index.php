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
					 		<?php 		//用seccion传输当前用户变量
								
								echo $_SESSION['name'];
							?>
					 	</a>
				</div>
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav">
						<li class="alert-info">
							 <a href="mima.php">修改密码</a>
						</li>
						<li class="alert-info">
							 <a href="tjxj.php">添加学籍信息</a>
						</li>
						<li class="alert-info">
							 <a href="syxj.php">所有学籍信息</a>
						</li>
						<li class="alert-info">
							 <a href="tjkm.php">添加科目</a>
						</li>
						<li class="alert-info">
							 <a href="sykm.php">所有科目</a>
						</li>
						<li class="alert-info">
							 <a href="cxsy.php">所有成绩</a>
						</li>
						<li class="alert-danger">
							 <a href="tblist.php">成绩图表分析</a>
						</li>
					</ul>
					<ul class="nav navbar-nav navbar-right">
						<li class="alert-danger">
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
				<!--<div class="form-group">
					 <label for="inputEmail3" class="col-sm-5 control-label">学号</label>
					<div class="col-sm-3">
						<input type="text" name="cxxh" class="form-control"  />	
					</div>
				</div>-->
				<div class="form-group">
					<label for="inputPassword3" class="col-sm-5 control-label">学号</label>
					<div class="col-sm-3">
						<select class="input-lg form-control" name="cxxh"  id="select" onkeydown="Select.del(this,event)" onkeypress="Select.write(this,event)" >
							<?php
								include('conn.php');
								$sqlkm = "select distinct xuehao from student;";	//查询科目语句
								$relkm = mysql_query($sqlkm);	//查询科目结果
								echo '<option value="" ></option>';
								while($r = mysql_fetch_array($relkm)){
									echo "<option value=".$r[0].">".$r[0]."</option>";
								}
								mysql_close($conn);
							?>
						</select>
				</div>
				</div>
				<div class="form-group">
					<label for="inputPassword3" class="col-sm-5 control-label">科目名称</label>
					<div class="col-sm-3">
						<select class="input-lg form-control" name="cxkm">
							
							<?php
								include('conn.php');
								$sqlkm = "select distinct kmmc,kmid from kemu;";	//查询科目语句
								$relkm = mysql_query($sqlkm);	//查询科目结果
								echo '<option value="k">选择科目</option>';
								while($r = mysql_fetch_array($relkm)){
									echo "<option value=".$r[1].">".$r[0]."</option>";
								}
								mysql_close($conn);
							?>
						</select>
					</div>
				</div>
				<!--<div class="form-group">
					 <label for="inputPassword3" class="col-sm-5 control-label">科目</label>
					<div class="col-sm-3">
						<input type="text" name="cxkm" class="form-control" id="inputPassword3" />		name=cxkm
					</div>
				</div>-->
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
		if(isset($submit) ){		//判断是否点击了查询成绩按钮且学号不为空
			include('conn.php');
			$cxkm = $_POST['cxkm'];		//如有填入查询科目则赋值给变量$cxkm
			if(!empty($cxxh) and $cxkm == 'k'){		//判断是否点击了查询成绩按钮且学号和科目不为空
				$sql = 'SELECT cj.xuehao, cj.kmid,student.name, kemu.kmmc, cj.cj FROM cj LEFT JOIN student ON cj.xuehao=student.xuehao LEFT JOIN kemu ON kemu.kmid=cj.kmid WHERE cj.xuehao="'.$cxxh.'";';		//SQL查询语句，重点！！！
			}
			if(!empty($cxxh) and $cxkm != 'k'){
				$sql = 'SELECT cj.xuehao, cj.kmid, student.name, kemu.kmmc, cj.cj FROM cj LEFT JOIN student ON cj.xuehao=student.xuehao LEFT JOIN kemu ON kemu.kmid=cj.kmid WHERE cj.xuehao="'.$cxxh.'" AND kemu.kmid="'.$cxkm.'";';		//SQL查询语句，重点！！！			
			}
			if(($cxxh == null) and isset($cxkm) and $cxkm != 'k'){
				$sql = 'SELECT cj.xuehao, cj.kmid, student.name, kemu.kmmc, cj.cj FROM cj LEFT JOIN student ON cj.xuehao=student.xuehao LEFT JOIN kemu ON kemu.kmid=cj.kmid WHERE kemu.kmid="'.$cxkm.'"';
			}
			@$r = mysql_query($sql);
			@$row = mysql_fetch_object($r);
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
					echo '<td width="40"><a href="modify.php?xuehao='.$row->xuehao.'&kmid='.$row->kmid.'&page=1"><img src="update.gif"/></a></td>';
					echo '<td  width="40"><a href="del.php?xuehao='.$row->xuehao.'&kmid='.$row->kmid.'&page=1"><img src="delete.gif"/></a></td>';
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