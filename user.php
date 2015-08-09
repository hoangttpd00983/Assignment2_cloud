<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>user</title>
<style>
#user
{
 	font-family:arial;

}

</style>
</head>

<body>
<div id="user">
<table>
  <tr>
    <td><h1>Xin chào 
			<?php 
            echo $_SESSION["UserName"];
            ?>
	</h1>
    </td>
  </tr>
  <tr>
    <td bgcolor="#FFFFFF">
    <a href="thoat.php" ><input type="button" value="Đăng xuất" /></a>
    </td>
  </tr>
</table>
</div>
</body>
</html>