
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Kiểm tra login</title>
</head>

<body>
<?php
	include("dbcon.php");
if(isset($_POST['un'])) 
    { 
        $username=$_POST['un']; 
        $password =md5($_POST['pa']); 
		
	
		//if (isset($_POST['nho'])=="ON")
		//{
		//setcookie("u",$_POST['un'],time()+60*60*24*7 );
		//setcookie("p",$_POST['pa'],time()+60*60*24*7 );
		//} 
		//else 
		//{
			//setcookie("u",$_POST['un'],time()-1);
			//setcookie("p",$_POST['pa'],time()-1);
		//}

         $sql = sprintf(" SELECT * FROM users 
                    WHERE Username='%s' AND Password ='%s'", 
                    $username, $password); 
                     
        $user = mysql_query($sql);     
         
        if (mysql_num_rows($user)==1) 
		{//Thành công  nhap dung la 1 dong   
          $row_user = mysql_fetch_assoc($user); //assoc = array
          $_SESSION['HoTen'] = $row_user['HoTen']; 
          $_SESSION['UserName'] = $row_user['Username'];
		  $_SESSION['DiaChi'] = $row_user['DiaChi']; 
         }
		 else 
		 	{ 
            	$thongbao = "<p><font color='red'><b>Đăng nhập thất bại. Vui lòng kiểm tra lại Username và Password</b></font></p><br>"; 
        	} 
     } 
?>
</body>
</html>