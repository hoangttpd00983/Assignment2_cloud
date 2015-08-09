<?php
session_start();
for($i=$_GET["id"];$i<$_SESSION["somathang"];$i++)
{
	$j=$i+1;
	$_SESSION["idSP".$i]=$_SESSION["idSP".$j];
	$_SESSION["SoLuong".$i]=$_SESSION["SoLuong".$j];
	$_SESSION["Gia".$i]=$_SESSION["Gia".$j];
	
}
$k=$_SESSION["somathang"];
unset($_SESSION["idSP".$k]);
unset($_SESSION["SoLuong".$k]);
unset($_SESSION["Gia".$k]);
$_SESSION["somathang"]--;
header("location:".$_SERVER['HTTP_REFERER']);
?>