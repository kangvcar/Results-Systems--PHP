<html>
<head>
	
</head>
<body>
	<?php
	include('yzdl.php');
?>
<?php
	include('conn.php');
	$sqldelall = 'TRUNCATE TABLE cj';
	mysql_query($sqldelall);
?>
<script>location.href='cxsy.php';</script>
</body>
</html>

