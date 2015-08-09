<?php include("kt.php"); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Xóa chủng loại</title>
</head>

<body>
<?php
  include("../dbcon.php");
  $idcl=$_GET["id"];
  $sql="delete from chungloai where idCL='$idcl' AND idCL not in(select idCL from loaisp where idCL='$idcl')";
  $kq=mysql_query($sql,$link);
  if (mysql_affected_rows()>0)
  {
  	echo "<script>alert('Xoa thanh cong');location.href='index.php?act=chungloai';</script>";
  }
  else
  {
  	echo "<script>alert('Xoa khong thanh cong');location.href='index.php?act=chungloai';</script>";
  }
?>

</body>
</html>
