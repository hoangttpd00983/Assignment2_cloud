<?php ob_start();?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<div id="kt">
<?php
include("../dbcon.php");

if(isset($_POST['un'])) 
    { 
        $username=($_POST['un']); 
        $password =($_POST['pa']); 
        $sql = sprintf("SELECT * FROM admin WHERE usename='%s' AND password ='%s'", $username, $password);         
        $user = mysql_query($sql);     
         
        if (mysql_num_rows($user)==1) //Thành công
		{     
          $row_user = mysql_fetch_assoc($user); 
    
          	$_SESSION['UserName'] = $row_user['UserName']; 
			$_SESSION['PassWord'] = $row_user['PassWord']; 
         	$_SESSION['HoTen'] = $row_user['HoTen'];
			$_SESSION['DiaChi'] = $row_user['DiaChi']; 
		
         }
		 
		 
         else { 
            $thongbao = "<p><font color='red'><b>Đăng nhập thất bại. Vui lòng kiểm tra lại Username và Password</b></font></p><br>"; 
        } 
     } 
?>
</div>
</body>
</html>