<?php
session_start();
ob_start();
?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
include("dbcon.php");
require('library/mpdf.php');
$id=$_SESSION['UserName'];
$s="select * from users where Username='$id'";
$kq=mysql_query($s,$link);
$ngaythang = date("d/m/y", time()+1);
if($data=mysql_fetch_array($kq))
{
	
$str="<table width='600' border='1' align='center'>
  <caption>
    HÓA ĐƠN
  </caption>
  <tr>
    <td>Ngày:$ngaythang </td>
  </tr>
  <tr>
    <td>Họ tên:$data[HoTen]</td>
  </tr>
  <tr>
    <td>Địa chỉ:$data[DiaChi]</td>
  </tr>
  <tr align='center'>
    <td><table width='590'>
      <tr align='center'>
        <td width='9'>STT</td>
        <td width='91'>Mã sản phẩm</td>
        <td width='66'>Số lượng</td>
        <td width='86'>Giá</td>
        <td width='138'>Thành tiền</td>
      </tr>";

$tongsotien=0;
$thanhtien=0;
for($i=1;$i<=$_SESSION["somathang"];$i++)
{
	$tongsotien+=$_SESSION["SoLuong".$i]*$_SESSION["Gia".$i];
    $thanhtien=$_SESSION["SoLuong".$i]*$_SESSION["Gia".$i];
	
    $str .=  "<tr>
		     <td width='9'>".$i."</td>
	         <td width='91'>".$_SESSION["idSP".$i]."</td>
     		 <td width='66'>".$_SESSION["SoLuong".$i]."</td>
	         <td width='86'>".$_SESSION["Gia".$i]."</td>
     	     <td width='138'>".$thanhtien."</td>
 			 </tr>";
}
    $str .= "</table></td>
    		</tr>
  			<tr colspan=6>
    		<td>Tổng thành tiền: ".$tongsotien."</td>
	    	</tr>
    		</table>";
}
echo $str;
$_SESSION['str']=$str;
?>
<p align="center"><a href="xempdf.php"><img src="images/icon/Nuvola_devices_printer.png" width="50" height="50" alt="In hóa đơn" /></a></p>
 