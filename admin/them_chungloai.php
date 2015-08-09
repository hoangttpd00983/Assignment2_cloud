<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Thêm chủng loại</title>
</head>

<body>
<form action="luuthem_chungloai.php" method="post" enctype="multipart/form-data" name="f">
<!-- enctype="multipart/form-data" -->
<table width="100%" border="1" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td colspan="2"><div align="center">Thêm Chủng Loại Sản Phẩm</div></td>
  </tr>
  <tr>
    <td width="100">Mã chủng loại</td>
    <td width="250"><input name="idcl" type="text" id="idcl"></td>
  </tr>
  <tr>
    <td width="100">Thứ tự</td>
    <td width="250"><input name="thutu" type="text" id="thutu"></td>
  </tr>
  <tr>
    <td width="100">Tên chủng loại</td>
    <td width="250"><input name="tencl" type="text" id="tencl"></td>
  </tr>
  <tr>
    <td width="100">Ẩn hiện</td>
    <td width="250">
    	Hiển 
      <input name="anhien" type="radio" value="1" checked="checked" />
      	Ẩn
      <input name="anhien" type="radio" value="0" /></td>
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