<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Form login</title>
<style>
#login
{
	margin-bottom:10px;
	color:#000;
	width:100%;
	font-family: arial;
	font-size:14px;
}
td {padding:10px}
</style>
</head>

<body>

<?php  
if(isset($thongbao)) 
    echo $thongbao;  
?>
<div id="login">
<form name="form1" method="POST" action="">    
 <table  width="100%"  align="center" border="0">
    <tr>
        <h1>Đăng nhập hệ thống</h1>
    </tr>
    <tr>
        <td colspan="2" class="label">&nbsp;</td>
    </tr>
        
    <tr>
        <td class="label">Tài khoản:</td>
        <td><input type="text" value="" name="un" size="40"/></td>
    </tr>
    <tr>
        <td class="label">Mật khẩu:</td>
        <td><input type="password" value="" name="pa" size="40"" /></td>
    </tr>
	<tr>
	<td></td>
	<td class="label"><input type="checkbox" name="nho" value="ON" />Nhớ mật khẩu</td>
	</tr>
    <tr>
        
        <td></td>
        <td><input type="submit" value="Đăng nhập" /><a href="">Quên mật khẩu?</a></td>
    </tr>

  <!-- Dang ky -->
 
  </table>
 </form>
</div>
</body>
</html>