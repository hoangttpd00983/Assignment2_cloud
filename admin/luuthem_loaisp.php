<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>lưu thêm loại sản phẩm</title>
</head>

<body>
<?php
  require_once("../dbcon.php");
  $idloai=$_POST["idloai"];
  $idcloai=$_POST["idchungloai"];
  $tenloai=$_POST["tenloai"];
  //$hinh=$_FILES["txthinh"]["name"]; // $_FILES[" ten doi tuong"][" name"] la lay ten thui
  									// $_FILES[" ten doi tuong"][" tmp_name"] lay ca duong dan:C:/../h1.jpg
  
  $sql="INSERT INTO loaisp (idCL, idLoai, TenLoai ) VALUES ('$idcloai', '$idloai', '$tenloai')"; // $phai ko can ''
  $kq=mysql_query($sql,$link);
  if ($kq)
  {
  	echo "<script>alert('Them thanh cong');location.href='index.php?act=loaisp';</script>";
  }
  else
  {
  	echo "<script>alert('Them khong thanh cong');location.href='index.php?act=loaisp';</script>";
  }
?>

</body>
</html>