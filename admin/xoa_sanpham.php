<?php include("kt.php"); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Xóa sản phẩm</title>
</head>

<body>
<?php
  require_once("../dbcon.php");
  $idsp=$_GET["id"];
  $sql="delete from sanpham where idSP='$idsp'";
  $kq=mysql_query($sql,$link);
  if ($kq)
  {
  	echo "<script>alert('Xoa thanh cong');location.href='index.php?act=sanpham';</script>";
  }
  else
  {
  	echo "<script>alert('Xoa khong thanh cong');location.href='index.php?act=sanpham';</script>";
  }
?>

</body>
</html>
