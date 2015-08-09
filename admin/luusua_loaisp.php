<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Lưu sửa loại sản phẩm</title>
</head>

<body>
<?php
  require_once("../dbcon.php");
 
  $idloai=$_POST["idloai1"];
  $tenloai=$_POST["tenloai"];
   $chungloai=$_POST["idchungloai"];
  $sql="update loaisp set TenLoai='$tenloai', idCL = $chungloai  where idLoai='$idloai'";
  
  $kq=mysql_query($sql,$link);
  if ($kq)
  {
  	echo "<script>alert('Sua thanh cong');location.href='index.php?loaisp';</script>";
  }
  else
  {
  	echo "<script>alert('Sua khong thanh cong');location.href='index.php?loaisp';</script>";
  }
?>
</body>
</html>
