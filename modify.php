<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>修改信息</title>
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
					 <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> <span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button> <a class="navbar-brand" href="index.php">首页</a>
				</div>
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav">
						<li class="active">
							 <a href="cxsy.php">所有成绩</a>
						</li>
					</ul>
				</div>
				
			</nav>
			<h1 align="center">
				修改成绩条目
			</h1>
			
			<?php
				include('conn.php');
				if(isset($_GET['xuehao'])){
					$xuehao = $_GET['xuehao'];
					$page = $_GET['page'];
					$kmid = $_GET['kmid'];
					if($page == 1){
						$page1 = 11;
					}elseif($page == 2){
						$page1 = 22;
					}
					$sql = 'SELECT cj.xuehao, kemu.kmid, kemu.kmmc, cj.cj FROM cj,kemu WHERE cj.xuehao="'.$xuehao.'" AND cj.kmid="'.$kmid.'"  AND cj.kmid=kemu.kmid';		
					$r = mysql_query($sql);
					$row = mysql_fetch_object($r);
					$xuehao = $row->xuehao;
					$kmmc = $row->kmmc;
					$kmid = $row->kmid;
					$cj = $row->cj;
					//mysql_free_result($r);
					//mysql_close($conn);
					echo '<form action="modifydo.php" method="post" class="form-horizontal" role="form">';
					echo '<div class="form-group">';
					echo '<input type="hidden" name="page1" value="'.$page1.'">';
					echo '<input type="hidden" name="xuehao" value="'.$xuehao.'"/>';
					echo '<label for="inputEmail3" class="col-sm-5 control-label">学号</label>';
					echo '<div class="col-sm-3">';
					echo '<label for="inputEmail3" class="col-sm-5 control-label">'.$xuehao.'</label>';
					echo '</div>';
					echo '</div>';
					echo '<div class="form-group">';
					echo '<label for="inputEmail3" class="col-sm-5 control-label">科目ID</label>';
					echo '<div class="col-sm-3">';
					echo '<input type="hidden" name="kmid" value="'.$kmid.'">';
					echo '<label for="inputEmail3" class="col-sm-5 control-label">'.$kmmc.'</label>';
					echo '</div>';
					echo '</div>';
					echo '<div class="form-group">';
					echo '<label for="inputEmail3" class="col-sm-5 control-label">成绩</label>';
					echo '<div class="col-sm-3">';
					echo '<input type="text" name="cj" value="'.$cj.'" class="form-control"  />';
					echo '</div>';
					echo '</div>';
					echo '<div class="form-group">';
					echo '<div class="col-sm-offset-5 col-sm-5">';
					echo '<input type="submit" name="sub" class="btn btn-info" value="修改成绩">';
					echo '</div>';
					echo '</div>';
					echo '<form>';
				}else{
					echo '<script>alert("请先选择需要修改的成绩");location.href="index.php";</script>';
				}
			?>
</html>