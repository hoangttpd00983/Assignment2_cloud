<?php
session_start();
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<br />
<?php
include("../dbcon.php");
if(isset($_POST['username']))
{
	$UserName = $_POST['username'];
	$Password = $_POST['password'];
	$sql = sprintf("select * from admin where username='%s' AND password='%s'",$UserName,$Password);
	$admin = mysql_query($sql);
	if(mysql_num_rows($admin)==1)
	
	{
	//ok
		$row_admin = mysql_fetch_assoc($admin);
		$_SESSION['username'] = $row_admin['username'];
		$_SESSION['hoten'] = $row_admin['hoten'];
		//echo "ban dang nhap thanh cong";
		include("index.php");
	}
	else
	{
		$thongbao  = "<p><font color='red'></p> Đăng Nhập Thất Bại </font></p><br>";
		include("dangnhap.php");
		
	}
}

?>
</body>
</html>