<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Lưu thêm loại sản phẩm</title>
</head>

<body>
<form action="luuthem_loaisp.php" method="post" enctype="multipart/form-data" name="f">
<!-- enctype="multipart/form-data" -->
<table width="100%" border="1" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td colspan="2"><div align="center">Thêm Loại Sản Phẩm</div></td>
  </tr>
  <tr>
    <td width="100">Mã Loại</td>
    <td width="250"><input name="idloai" type="text" id="idloai"></td>
  </tr>
  <tr>
    <td width="100">Tên Loại</td>
    <td width="250"><input name="tenloai" type="text" id="tenloai"></td>
  </tr>
  <tr>
    <td width="100">Chủng Loại</td>
    <td width="250">
    <select name="idchungloai" id="idchungloai">
<?php 
	include ("../dbcon.php");
	$idcl="select * from chungloai";
	$kqcl=mysql_query($idcl,$link);
	while($dongcl=mysql_fetch_array($kqcl))
  		{ 
?>
    	<option value="<?php echo $dongcl["idCL"];?>" > <?php echo $dongcl["TenCL"];?> </option>

     	<?php } ?>
</select>
</td>
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