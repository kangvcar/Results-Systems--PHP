<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>无标题文档</title>
</head>

<body>
<?php
	include('conn.php');
	$pltjxh = $_POST['pltjxh'];
	$pltjkm = $_POST['pltjkm'];
	$pltjcj = $_POST['pltjcj'];

	echo '<br>学号数组<br>';
	print_r($pltjxh);
	echo '<br>科目id数组<br>';
	print_r($pltjkm);
	echo '<br>成绩数组<br>';
	print_r($pltjcj);
	
	$n = count($pltjxh);
	var_dump($n);
	for($i=0; $i<count($pltjxh); $i++){
		//echo '<br>'.$pltjcj[$i]}.';
		mysql_query('INSERT INTO cj(xuehao, kmid, cj) VALUES ("'.$pltjxh[$i].'","'.$pltjkm[$i].'","'.$pltjcj[$i].'")');
		//mysql_query('UPDATE cj SET cj="'.$pltjcj[$i].'"  WHERE xuehao="'.$pltjxh[$i].'" AND kmid="'.$pltjkm[$i].'"');
	}
	//$sql4 = 'INSERT INTO cj(xuehao, kmid, cj) VALUES ("'.$pltjxh.'","'.$pltjkm.'","'.$pltjcj.'")';
	
	
?>
</body>
</html>