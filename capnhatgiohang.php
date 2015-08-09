<?php
session_start();
if (!isset($_POST["B3"]))
{
	//echo "cap nhat";
	for($i=1;$i<=$_SESSION["somathang"];$i++){
	if ($_POST["C".$i]=="") {
		$_SESSION["SoLuong".$i]=1;
	}else
	{
	$_SESSION["SoLuong".$i]=$_POST["C".$i];
	}
}
}
else
{
	//echo "xoa";
	for($k=$_SESSION["somathang"]; $k>=1;$k--)
	{
		if ($_POST["X".$k]=="ON")
		{
			for($i=$k;$i<$_SESSION["somathang"];$i++) // do so trong mat hang
			{
				$j=$i+1;
				$_SESSION["UrlHinh".$i]=$_SESSION["UrlHinh".$j];
				$_SESSION["idSP".$i]=$_SESSION["idSP".$j];
				$_SESSION["Gia".$i]=$_SESSION["Gia".$j];
				$_SESSION["SoLuong".$i]=$_SESSION["SoLuong".$j];
			}
			$k1=$_SESSION["somathang"];
			unset($_SESSION["UrlHinh".$k1]);;
			unset($_SESSION["idSP".$k1]);;
			unset($_SESSION["Gia".$k1]);
			unset($_SESSION["SoLuong".$k1]);
			$_SESSION["somathang"]--;
		}
	}
}
header("location:".$_SERVER['HTTP_REFERER']);
?>