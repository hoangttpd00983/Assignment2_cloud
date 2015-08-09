<?php 
session_start();
$_SESSION["somathang"]=0;
header("location:".$_SERVER['HTTP_REFERER']);
?>