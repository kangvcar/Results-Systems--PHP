<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>无标题文档</title>
</head>

<body>
<?php
	include('yzdl.php');
?>
<?php
	include('conn.php');
	$pltjxh = $_POST['pltjxh'];
	$pltjxm = $_POST['pltjxm'];
	$pltjxb = $_POST['pltjxb'];
	$pltjbj = $_POST['pltjbj'];

	//echo '<br>学号数组<br>';
	//print_r($pltjxh);
	//echo '<br>科目id数组<br>';
	//print_r($pltjkm);
	//echo '<br>成绩数组<br>';
	//print_r($pltjcj);
	
	$n = count($pltjxh);
	//var_dump($n);
	for($i=0; $i<count($pltjxh); $i++){
		//echo '<br>'.$pltjcj[$i]}.';
		if($pltjxh[$i] != ""){
		$a = mysql_query('INSERT INTO student(xuehao, name, xingbie, banji) VALUES ("'.$pltjxh[$i].'","'.$pltjxm[$i].'","'.$pltjxb[$i].'","'.$pltjbj[$i].'")');
		//mysql_query('UPDATE cj SET cj="'.$pltjcj[$i].'"  WHERE xuehao="'.$pltjxh[$i].'" AND kmid="'.$pltjkm[$i].'"');
		}
		//$num = mysql_affected_rows();
	}
	//$sql4 = 'INSERT INTO cj(xuehao, kmid, cj) VALUES ("'.$pltjxh.'","'.$pltjkm.'","'.$pltjcj.'")';
	if($a){
		echo "<script>alert('批量添加成功');location.href='tjxj.php';</script>";
	}else{
		echo "<script>alert('批量添加失败');location.href='syxj.php';</script>";
	}
?>
	

</body>
</html>