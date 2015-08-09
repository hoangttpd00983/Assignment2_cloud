<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Đơn hàng</title>
</head>

<body>
<?php 
if(!isset($_SESSION['UserName']))
{
echo "<script language='javascript'>alert(' Ban phai dang nhap'); </script>";
include "formlogin.php"; 

}
else
{
	echo "Chào bạn ".$_SESSION['UserName']."<a href='xoagiohang.php'>Thoát.</a>";
	include "formdonhang.php";
}

?>
</body>
</html>