<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<script language="javascript" src="kt.js"></script>
<style type="text/css">
<!--
#xemgiohang {
	width: 100%;
	margin-top: 0px;
	margin-right: auto;
	margin-bottom: 0px;
	margin-left: auto;
	overflow: auto;
	float:left;
}
strong {font-size:14px; font-family:arial; padding:10px; color:#77BC1B}
table tr td {padding:10px}
-->
</style>
</head>

<body>
<div id="xemgiohang">
<?php
if (isset($_SESSION["somathang"]) && $_SESSION["somathang"]>0) // 101 den het la hien gio hang
{ 
?>
<form method="post" action="capnhatgiohang.php">
<table width="100%" border="0" align="center" cellpadding="0" cellspacing="0" >

<div align="center"><strong style="float:left; color:#000">GIỎ HÀNG CỦA BẠN</strong></div></br>

  <tr bgcolor="">
    <td width="45"><div align="center" ><strong>STT</strong></div></td>
    <td width="150"><div align="center" ><strong>Sản phẩm</strong></div></td>
    <td width="75"><div align="center" ><strong>Giá</strong></div></td>
    <td width="75"><div align="center" ><strong>Số Lượng</strong></div></td>
    <td width="100"><div align="center" ><strong>Tổng Tiền</strong></div></td>
    <td width="50"><div align="center" ><strong>Xóa</strong></div></td>
  </tr>
<?php
$tongtien=0;
for($i=1;$i<=$_SESSION["somathang"];$i++) {
?>  
  <tr>
    <td width="45"><div align="center"><?php echo $i ?></div></td>
    <td width="175" bgcolor="#FFFFFF"><div align="center"><img src="images/hinhchinh/<?php echo $_SESSION["UrlHinh".$i] ?>" width="50" height="70" /></div></td>
    <td width="50"><div align="right"><?php echo $_SESSION["Gia".$i] ?></div></td>
    <td width="75"><div align="center"><input type="text" size="5" onKeyUp="CheckNumber(this)" name="C<?php echo $i ?>" value="<?php echo $_SESSION["SoLuong".$i] ?>"></div></td>
    <td width="100"><div align="right"><?php echo $_SESSION["Gia".$i]*$_SESSION["SoLuong".$i] ?></div></td>
    <td width="50"><div align="center"><input type="checkbox" name="X<?php echo $i;?>" value="ON"></div></td>
  </tr>

<?php
$tongtien=$tongtien+$_SESSION["Gia".$i]*$_SESSION["SoLuong".$i] ;
	}
?>
<tr>
<td colspan="6" align="right">
Tong Cong Tien: <?php echo $tongtien; ?>
</td>
</tr>
</table>

<div align="center">
  <input name="B1" type="submit"  value="Cập Nhật">
  &nbsp;
  <input name="B3" type="submit"  value="Xóa">
   &nbsp;
 <input name="B4" type="button"  onClick="location.href='xoatatca.php'" value="Xóa tất cả">
   &nbsp; 
  <input name="B2" type="button"  onClick="location.href='index.php?act=dathang'" value="Đặt hàng">
</div>
</form>
<?php } ?>
</div>
</body>
</html>