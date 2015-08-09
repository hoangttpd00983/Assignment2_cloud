<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Lưu sửa chủng loại</title>
</head>

<body>
<?php
  require_once("../dbcon.php");
 
	
  $idcl=$_POST["idcl1"];
  $thutu=$_POST["thutu"];
  $tencl=$_POST["tencl"];
  $anhien=intval($_POST["anhien"]);
  $sql="update chungloai set ThuTu='$thutu', TenCL='$tencl', AnHien=$anhien where idCL='$idcl'";
  
  $kq=mysql_query($sql,$link);
  if ($kq)
  {
  	echo "<script>alert('Sua thanh cong');location.href='index.php?act=chungloai';</script>";
  }
  else
  {
  	echo "<script>alert('Sua khong thanh cong');location.href='index.php?act=chungloai';</script>";
  }
?>
</body>
</html>
