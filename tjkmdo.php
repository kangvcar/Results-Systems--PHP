<?php
	include('yzdl.php');
?>
<?php
	if(isset($_POST['sub'])){
		include('conn.php');
		$newkm = $_POST['newkm'];
		$sqlkm1 = 'SELECT * FROM kemu WHERE kmmc="'.$newkm.'"';
		$r1 = mysql_query($sqlkm1);
		$num1 = mysql_num_rows($r1);
		if($num1 > 0){
			echo "<script> alert('科目已存在,请直接使用或更换科目名称！');location.href='tjkm.php';</script>";
		}else{
			$sqlkm2 = 'INSERT INTO kemu(kmmc) VALUES ("'.$newkm.'")';
			$r2 = mysql_query($sqlkm2);
			if($r2){
				echo "<script> alert('添加科目成功');location.href='tjkm.php';</script>";
			}else{
				echo "<script> alert('添加科目失败');location.href='tjkm.php';</script>";
			}
		}
	}
?>