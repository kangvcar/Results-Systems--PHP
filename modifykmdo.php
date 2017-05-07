<?php
	include('yzdl.php');
?>
<?php
	include('conn.php');
	if(isset($_POST['kmid'])){
		$kmid = $_POST['kmid'];
		$kmmc = $_POST['kmmc'];
		$sql = 'UPDATE kemu SET kmmc="'.$kmmc.'"  WHERE kmid="'.$kmid.'"';	
		$r = mysql_query($sql);
		if($r==true){
			echo '<script>alert("修改成功");location.href="sykm.php";</script>';
		}else{
			echo '<script>alert("修改失败");location.href="modifykm.php?kmid='.$kmid.'";</script>';
		}
	}else{
		echo '<script>alert("请先选择需要修改的条目");location.href="sykm.php";</script>';
	}
?>
