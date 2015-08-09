<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
  require_once("../dbcon.php");
  $idcl=$_GET["id"];
  $sql="select * from chungloai where idCL='$idcl'";
  $kq=mysql_query($sql,$link);
  if (mysql_num_rows($kq)>0)
  {
  	$dong=mysql_fetch_array($kq);
	$idCl=$dong["idCL"];
	$thutu=$dong["ThuTu"];
	$tencl=$dong["TenCL"];
	$anhien=$dong["AnHien"];
  }
  else
  {
	$idcl="";
	$thutu="";
	$tencl="";
	$anhien=1;
  }
  ?>
<form action="luusua_chungloai.php" method="post" enctype="multipart/form-data" name="f">
<table width="350" border="1" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td colspan="2"><div align="center">Thay Đổi Thông Tin Chủng Loại </div></td>
  </tr>
  <tr>
    <td width="100">Mã chủng loại</td>
    <td width="250">
	<input name="idcl" type="text" id="idcl" value="<?php echo $idcl; ?>" disabled > 
    <!-- disable thi ko submit qua dc -->
	<input name="idcl1" type="hidden" value="<?php echo $idcl; ?>">
	</td>
  </tr>
   <tr>
    <td width="100">Thứ Tự</td>
    <td width="250">
	<input name="thutu" type="text" id="thutu" value="<?php echo $thutu; ?>"  > 
    <!-- disable thi ko submit qua dc -->
	</td>
  </tr>
  <tr>
    <td width="100">Tên chủng loại</td>
    <td width="250"><input name="tencl" type="text" id="tencl" value="<?php echo $tencl; ?>"></td>
  </tr>
   <tr>
    <td width="100">Ẩn hiện</td>
    <td width="250">
	<?php 
	if ($anhien==1)
	{
	?>
	Hiện 
      <input name="anhien" type="radio" value="1" checked="checked" />
    Ẩn
      <input name="anhien" type="radio" value="0" />
	<?php
	}
	else
	{
	?>
	Hiện
      <input name="anhien" type="radio" value="1" />
    Ẩn
      <input name="anhien" type="radio" value="0"  checked="checked"/>
	  <?php
	  }
	  ?>
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