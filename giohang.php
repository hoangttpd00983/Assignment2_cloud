<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<style type="text/css">

#giohang{
	
	margin-bottom:10px;
	clear:both;
	color:#436451;
	margin-top:10px;
	float:left;
	width:232px;
	font-size: 14px;
	font-family: arial;
}
.mau { background:#1B191A;}
</style>
</head>

<body>
<div id="giohang">
<table width="100%" border="0" bgcolor="#FFFFFF" align="center">
  
     <tr class="mau">
        <td colspan="2" width="150" height="28"><font color="#FFFFFF"><b style=" padding: 5px 25px">Giỏ Hàng</b></font></td>
    </tr>
  	<tr>
    <td>Bạn đang có:
	
	<?php 
	if($_SESSION["somathang"]==0)
	{
		echo ("0");
	}
	else
	{
	echo $_SESSION["somathang"];}?>&nbsp; Sản Phẩm</td>
  	
    </tr>
 	<tr>
    <td>
	<?php
		$tongtien=0;
		for($i=1;$i<=$_SESSION["somathang"];$i++)
		{
			$tongtien+=$_SESSION["Gia".$i]*$_SESSION["SoLuong".$i];
		}
	?>
  	Tổng Tiền : <?php echo $tongtien;?>
    </td>
	</tr>
    <tr>
    <td align="center">
    <!-- <input type="button" name="xem" id="xem" value="Giỏ hàng" onClick="location.href='index.php?act=xemgiohang'"/>-->
    <a href="index.php?act=xemgiohang"><img src="images/icon/cart.png" width="50" height="50" alt="Giỏ hàng của bạn" /></a>
    <!-- <input type="button" name="dathang" id="dathang" value="Đặt hàng" onClick="location.href=''"/>-->
    <a href="index.php?act=dathang"><img src="images/icon/buy_now_button_aqua_glass.gif" width="80" height="50" /></a>
   	<!-- <input type="button" name="xemhoadon" id="xemhoadon" value="Hóa đơn" onClick="location.href=''"/>-->
    <a href="index.php?act=xemhoadon"><img src="images/icon/iOS-Bills-Icon.png" width="50" height="50" /></a>
    </td>
    </tr>
</table>
</div>
</body>
</html>