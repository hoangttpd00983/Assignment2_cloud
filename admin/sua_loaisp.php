<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Sửa loại sản phẩm</title>
</head>

<body>
<?php
  require_once("../dbcon.php");
  $idloai=$_GET["id"];
  $sql="select * from loaisp where idLoai='$idloai'";
  $kq=mysql_query($sql,$link);
  if (mysql_num_rows($kq)>0)
  {
  	$dong=mysql_fetch_array($kq);
	$idcl=$dong["idCL"];
	$idloai=$dong["idLoai"];
	$tenloai=$dong["TenLoai"];
  }
  else
  {
	$idcl="";
	$idloai="";
	$tenloai="";
  }
  ?>
<form action="luusua_loaisp.php" method="post" enctype="multipart/form-data" name="f">
<table width="350" border="1" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td colspan="2"><div align="center">Thay Đổi Thông tin Loai SP</div></td>
  </tr>
  <tr>
    <td width="100">Mã Loại SP</td>
    <td width="250">
	<input name="idloai" type="text" id="idloai" value="<?php echo $idloai; ?>" disabled > 
    <!-- disable thi ko submit qua dc -->
	<input name="idloai1" type="hidden" value="<?php echo $idloai; ?>">
	</td>
  </tr>
  <tr>
    <td width="100">Tên Loại</td>
    <td width="250"><input name="tenloai" type="text" id="tenloai" value="<?php echo $tenloai; ?>"></td>
  </tr>
   <tr>
   <td width="100">Chủng Loại</td>
    <td width="100"><select name="idchungloai" id="idchungloai">
<?php 
	$idcloai="select * from chungloai";
	$kqcloai=mysql_query($idcloai,$link);
	while($dongcl=mysql_fetch_array($kqcloai))
  		{ 
?>
    	<option <?php if($dongcl["idCL"] == $idcl) echo "selected" ;?> value="<?php echo $dongcl["idCL"];?>"> <?php echo $dongcl["TenCL"];?> </option> <!-- bo cl_ -->

     	<?php } ?>
</select></td>
  </tr>
  <tr>
    <td colspan="2"><div align="center">
        <input type="submit" name="Submit" value="Lưu">
        <input type="button" name="Submit2" value="Quay Về" onClick="history.back()">
    </div></td>
  </tr>
</table>
</form>
</body>
</html>