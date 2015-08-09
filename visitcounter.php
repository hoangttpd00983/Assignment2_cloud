<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<style>
#visitcounter
{
	margin-bottom:10px;
	border-bottom:1px solid #999;
	border-left:1px solid #999;
	border-top:1px solid #999;
	color:#436451;
	
}

</style>
</head>

<body>
    <div id="visitcounter">
     <table  width="100%" align="center" class="title"  bgcolor="#FFFFFF">
   		<tr>
        <td colspan="2" width="150" height="28" background="images/icon/toptitle.jpg"><font color="#FFFFFF"><b>&nbsp;Lượt truy cập</b></font>						        </td>
    </tr>
   <!--  Thong ke so nguoi online --> 
    <tr>
    	<td>  
        <!--  Tong so luot truy cap --> 
        <div style="margin: 10px 0;"> 
			<?php
				include("truycap/a.php");
				echo "<center>";
				displayHits(); 
            ?>
        </div>
        
        <!--  So nguoi dang onlien gom thanh vien va khach --> 
        <div>
            <table width="100%" align="center">
				<?php
					$uo_sessionTime = 10; 
					include("dbcon.php");
					$uo_ip = $_SERVER['REMOTE_ADDR'];
					$uo_query = "DELETE FROM users_online WHERE unix_timestamp() - lastvisit >= $uo_sessionTime * 60";
					mysql_query($uo_query);
					$uo_query = "SELECT lastvisit FROM users_online WHERE visitor = '$uo_ip'";
					$un=$_SESSION['UserName'];
					$uo_result = mysql_query($uo_query) or die (mysql_error());
						if(mysql_num_rows($uo_result) == 0) 
						{ //no match
							$uo_query = "INSERT INTO users_online VALUES('$uo_ip', unix_timestamp(),'$un' )";
							mysql_query($uo_query) or die(mysql_error());
						} 
						else 
						{ //matched, update them
							$uo_query = "UPDATE users_online SET lastvisit = unix_timestamp(), username='$un' WHERE visitor = '$uo_ip'";
							mysql_query($uo_query);
						}
                ?>
                <!--  Tong SO NGUOI dang onlone --> 
                <tr >
                    <td align="right">
                   		<img src="images/truycap/chu.png" width="16" height="16" alt="tongsonguoi" />
                    </td>
                    <td>
                    	Đang online
                    </td>
                    <td align="left">
						<?php
							$uo_query = "SELECT count(*) FROM users_online";
							$uo_result = mysql_query($uo_query);
							$uo_count = mysql_fetch_row($uo_result);
							echo "<font color='#EC16AA'>$uo_count[0]</font>";
                        ?>
                    </td>
                    
                <!--  Tong THANH VIEN dang onlone --> 
                </tr>
                <tr>
                    <td align="right">
                    	<img src="images/truycap/thanhvien.png" width="16" height="16" alt="thanhvien" />
                    </td>
                    <td>
                    	Thành viên
                    </td>
                    <td align="left">
						<?php
							$uo_query = "SELECT count(*) FROM users_online where username <>''";
							$uo_result = mysql_query($uo_query);
							$uo_count = mysql_fetch_row($uo_result);
							echo "<font color='#EC16AA'>$uo_count[0]</font>";
                        ?>
                    </td>
                </tr>
                
                <!--  Tong so KHACH dang onlone --> 
                <tr>
                    <td align="right">
                    	<img src="images/truycap/khach.png" width="16" height="16" alt="khach" />
                    </td>
                    <td>
                   		Khách
                    </td>
                    <td align="left">
						<?php
							$uo_query = "SELECT count(*) FROM users_online where username =''";
							$uo_result = mysql_query($uo_query);
							$uo_count = mysql_fetch_row($uo_result);
							echo "<font color='#EC16AA'>$uo_count[0]</font>";
                        ?>
                    </td>
                </tr>
            </table>
        </div>
    </div>
    </td>
  </tr>
</table>
</div>
</body>
</html>