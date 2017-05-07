<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>主页</title>
<link type="text/css" rel="stylesheet" href="bootstrap-3.3.7-dist/css/bootstrap.css">
<script type="text/javascript" src="bootstrap-3.3.7-dist/js/bootstrap.js"></script>
<script type="text/javascript" src="jquery-3.2.1.min.js"></script>
<style type="text/css">
	#to {
		font-size: 30px;
		text-align: center;
	}
	#us{
		font-size: 20px;
	}
	#too a{
		float:right;
		font-size: 20px;
		padding: 0 10px;
		margin: 0px;
	}
</style>
</head>	

<body>
<div id="too">
	<p id="us">当前用户：
		<?php 
			session_start();
			$_SESSION['passwd'];
			echo $_SESSION['name'];
		?>
		<a href="denglv.php">退出登录</a>&nbsp;
		<a href="mima.php">修改密码</a>
	</p>
	<p id="to">成绩查询中心</p>
</div>
<div align="center">
	<form action="" method="post">
		学号：<input type="text" name="cxxh">
		科目：<input type="text" name="cxkm">
		<input type="submit" name="submit" value="查询">
		<a href="cxsy.php"><input type="button" value="查看所有成绩"></a>
		<a href="tjcj.php"><input type="button" value="添加学生成绩"></a>
	</form>	
	<?php
		@$submit = $_POST['submit'];
		include('conn.php');
		if(isset($submit)){
			$cxxh = $_POST['cxxh'];
			$cxkm = $_POST['cxkm'];
			if(!empty($cxxh) and empty($cxkm)){
				$sql = 'SELECT cj.xuehao, student.name, kemu.kmmc, cj.cj FROM cj LEFT JOIN student ON cj.xuehao=student.xuehao LEFT JOIN kemu ON kemu.kmid=cj.kmid WHERE cj.xuehao="'.$cxxh.'";';
				//$sql = 'SELECT cj.xuehao,student.name,kemu.kmmc,cj.cj FROM cj,student,kemu WHERE cj.xuehao="'.$cxxh.'" AND student.xuehao="'.$cxxh.'";';
			}
			if(!empty($cxxh) and !empty($cxkm)){
				$sql = 'SELECT cj.xuehao, cj.kmid, student.name,kemu.kmmc,cj.cj FROM cj LEFT JOIN student ON cj.xuehao=student.xuehao LEFT JOIN kemu ON kemu.kmid=cj.kmid WHERE cj.xuehao="'.$cxxh.'" AND kemu.kmmc="'.$cxkm.'";';
				//$sql = 'SELECT cj.xuehao,student.name,kemu.kmmc,cj.cj FROM cj,student,kemu WHERE cj.xuehao=student.xuehao AND cj.xuehao='.$cxxh.' and kemu.kmmc="'.$cxkm.'";';
			}
			$r = mysql_query($sql);
			$row = mysql_fetch_object($r);
			if(!$row){
				echo '无查询结果';
			}else{
				echo '<table align="center" width="70%" border="1" cellpadding="5">';   
				echo '<tr>';
				echo '<td>学号</td>';
				echo '<td>姓名</td>';
				echo '<td>科目</td>';
				echo '<td>成绩</td>';
				echo '<td>修改</td>';
				echo '<td>删除</td>';
				echo '</tr>';
				/*while($row = mysql_fetch_array($r)){
					echo '<tr>';
					echo '<td>'.$row[0].'</td>';
					echo '<td>'.$row[1].'</td>';
					echo '<td>'.$row[2].'</td>';
					echo '<td>'.$row[3].'</td>';
					echo '<td width="40"><a href="modify.php?xuehao='.$row[1].'"><img src="update.gif"/></a></td>';
					echo '<td  width="40"><a href="del.php?xuehao='.$row[1].'" onclick="return cform();"><img src="delete.gif"/></a></td>';
					echo '</tr>';	
				}*/
				do{
					echo '<tr>';
					echo '<td>'.$row->xuehao.'</td>';
					echo '<td>'.$row->name.'</td>';
					echo '<td>'.$row->kmmc.'</td>';
					echo '<td>'.$row->cj.'</td>';
					echo '<td width="40"><a href="modify.php?xuehao='.$row->xuehao.'&kmid='.$row->kmid.'"><img src="update.gif"/></a></td>';
					echo '<td  width="40"><a href="del.php?xuehao='.$row->xuehao.'&kmid='.$row->kmid.'" onclick="return cform();"><img src="delete.gif"/></a></td>';
					echo '</tr>';

				}while($row=mysql_fetch_object($r));
			}
		}
?>
</div>











</body>
</html>