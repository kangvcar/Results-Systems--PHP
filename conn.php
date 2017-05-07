<?php
	@header("content-type:text/html;charset=utf-8");
	@$conn = mysql_connect("localhost","root","") or die(mysql_error());
	mysql_select_db("qimo");
	mysql_query("set names utf8");
?>