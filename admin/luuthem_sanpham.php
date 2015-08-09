<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
  require_once("../dbcon.php");
  $idsp=$_POST["idsp"];
  $tensp=$_POST["tensp"];
  $idloai=$_POST["idloai"];
  $d=$_POST["f_date_b"];
  $hinh=$_FILES["hinh"]["name"];
  $gia=$_POST["gia"];
  $mota=$_POST["mota"];

			$ngay=substr($d,0,2);
			
			$thang=substr($d,3,2);
			
			$nam=substr($d,6,4);
			
			$gio=substr($d,11,2);
			
			$phut=substr($d,14,2);
			
			$giay=substr($d,17,2);
			$d1=$nam."-".$thang."-".$ngay." ".$gio.":".$phut.":".$giay;
  //$hinh=$_FILES["txthinh"]["name"]; // $_FILES[" ten doi tuong"][" name"] la lay ten thui
  									// $_FILES[" ten doi tuong"][" tmp_name"] lay ca duong dan:C:/../h1.jpg
  
  $sql="INSERT INTO sanpham (idSP, TenSP, idLoai, NgayCapNhat, UrlHinh, Gia, Mota ) VALUES ('$idsp', '$tensp', '$idloai', '$d1', '$hinh', '$gia', '$mota')"; // $phai ko can ''
  $kq=mysql_query($sql,$link);
  if ($kq)
  {
  	echo "<script>alert('Them thanh cong');location.href='index.php?act=sanpham';</script>";
	move_uploaded_file($_FILES["hinh"]["tmp_name"],"../images/hinhchinh/".$_FILES["hinh"]["name"]); // chep du lieu tu may tinh cua user len may sever 
  }
  else
  {
  	echo "<script>alert('Them khong thanh cong');location.href='index.php?act=sanpham';</script>";
  }
?>

</body>
</html>