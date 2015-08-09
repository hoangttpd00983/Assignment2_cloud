<?php
	session_start(); ob_start();
	include("../dbcon.php");
 	include("../admin/test_username.php");
	if(!isset($_SESSION["UserName"]))
		echo "<script>location.href='index.php';</script>"; 
?>