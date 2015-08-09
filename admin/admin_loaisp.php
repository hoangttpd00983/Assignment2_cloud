<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Loại sản phẩm</title>
</head>

<body>
<table width="100%" border="1" align="center" cellpadding="0" cellspacing="0">
<tr>
<td colspan="10">
<p align="center">Danh Sách Loại Sản Phẩm</p><br>
<center><a href="index.php?act=themloaisp">Thêm Loại Sản Phẩm</a></center>
</td>
</tr>
  <tr bgcolor="#FFFFCC">
    <td width="5%"><div align="center" class="style1">STT</div></td>
    <td width="10%"><div align="center" class="style1">Mã loại </div></td>
    <td width="10%"><div align="center" class="style1">Chủng loại</div></td>
    <td width="65%"><div align="center" class="style1">Loại sản phẩm </div></td>
	<td width="5%"><div align="center" class="style1">Sửa</div></td>
	<td width="5%"><div align="center" class="style1">Xóa</div></td>
    </tr>
  <?php
     require_once("../dbcon.php");
  $sql="select * from loaisp";
  $kq=mysql_query($sql,$link);
  $i=0;
  while($dong=mysql_fetch_array($kq))
  {	$i++;
  ?>
  <tr>
    <td width="50"><div align="center"><?php echo $i; ?></div></td>
    <td width="75"><div align="center"><?php echo $dong["idLoai"]; ?></div></td>
    <td width="70"><div align="center"><?php echo $dong["idCL"]; ?></div></td>
    <td width="125"><div align="center"><?php echo $dong["TenLoai"]; ?></div></td>
	<td width="50"><div align="center"><a href="index.php?act=sualoaisp&id=<?php echo $dong["idLoai"]; ?>">Sửa</a></div></td>
	<td width="50"><div align="center"><a href="xoa_loaisp.php?id=<?php echo $dong["idLoai"]; ?>">Xóa</a></div></td>
  </tr>
  <?php
  }
  ?>

</table>
</body>
</html>