<?php
session_start();
require_once("dbcon.php");
$username=$_SESSION["UserName"];
$iddh=$username.date("U"); // tinh tu 0gio 0 phut 0 giay  1970 

$tennguoinhan=$_POST["tennguoinhan"];
$diadiemgiaohang=$_POST["diadiem"];

$Query = "insert into donhang(idDH, username, ThoiDiemDatHang, ThoiDiemGiaoHang, TenNguoiNhan, DiaDiemGiaoHang) 
values('$iddh','$username',CURRENT_DATE(),ADDDATE(CURRENT_DATE(),3),'$tennguoinhan','$diadiemgiaohang')"; //giao sau 3 ngay ne
$kq = mysql_query($Query);// thanh cong thi dua vao table

if ($kq)
{ 	  $max = $_SESSION['somathang']; 
      for ($i = 1; $i <= $max; $i++) { // lap tu 1 den het so mat hang
	  	$idsp=$_SESSION['idSP'.$i]; // lap het tat ca cac mat hang
		$soluong=$_SESSION['SoLuong'.$i]; ;
		$gia=$_SESSION['Gia'.$i]; 

		$Query = "insert into donhangchitiet(idDH, idSP, SoLuong, DonGia ) 
		values('$iddh','$idsp',$soluong,$gia)";
		$Result = mysql_query($Query);
	  }
	  
	  echo "<script language='javascript'>
	  		alert(' Dat hang thanh cong');
			location.href='index.php'
			</script>";
	  		
}
else
{
	echo "<script language='javascript'>
	  		alert(' Dat hang khong thanh cong'); 
			</script>";//thong bao loi
}



?>