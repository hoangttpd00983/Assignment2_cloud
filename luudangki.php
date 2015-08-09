<?php 
session_start();
ob_start();
?>
<title>save</title>
<?php
include("dbcon.php");
	if ($_SESSION['captcha']==$_POST['captcha'])
{
	$ten=$_POST["ten"];
	$mk=md5($_POST["matkhau"]);
	$hoten=$_POST["hoten"];
	$email=$_POST["email"];
	$diachi=$_POST["address"];
	$dienthoai=$_POST["phone"];
$s="insert into users(Username,Password,HoTen,Email,DiaChi,Dienthoai) value('$ten','$mk','$hoten','$email','$diachi','$dienthoai')";
	$kq=mysql_query($s,$link);
}
else
{
	echo "sai captcha";
}
	
	
	if($kq)
	{
		echo "<script language='javascript'>
				alert('Them thanh cong'); location.href='index.php';
				</script>";
	}
	else
	{
		echo "<script language='javascript'>
				alert('Them khong thanh cong'); history.back();
				</script>";
	}
?>
