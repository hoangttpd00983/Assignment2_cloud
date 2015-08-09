<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Lưu sửa chủng loại</title>
</head>

<body>
<?php
  require_once("../dbcon.php");
  $idcl=$_POST["idcl"];
  $thutu=$_POST["thutu"];
  $tencl=$_POST["tencl"];
  //$hinh=$_FILES["txthinh"]["name"]; // $_FILES[" ten doi tuong"][" name"] la lay ten thui
  									// $_FILES[" ten doi tuong"][" tmp_name"] lay ca duong dan:C:/../h1.jpg
  $anhien=intval($_POST["anhien"]);
  
  $sql="insert into chungloai(idcl, thutu, tencl, anhien) values('$idcl', '$thutu', '$tencl',$anhien)"; // $phai ko can ''
  $kq=mysql_query($sql,$link);
  if ($kq)
  {
  	echo "<script>alert('Them thanh cong');location.href='index.php?act=chungloai';</script>";
  }
  else
  {
  	echo "<script>alert('Them khong thanh cong');location.href='index.php?act=chungloai';</script>";
  }
?>

</body>
</html>