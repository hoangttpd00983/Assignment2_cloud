<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<style>
#footer_quangcao
{
	border:solid 1px #666;
	margin-bottom:1px;
	margin-left:1px;
	margin-right:1px;
	margin-top:1px;
}
#tieudequangcao
{
	width:100%;
	background-image:url(images/hang.png);
	font-family:"Times New Roman", Times, serif;
	color:#FFF;
	font-weight: bold;
	margin-bottom:1px;
}
</style>
</head>

<body>
            <div id="footer_quangcao">
            <div id="tieudequangcao"><marquee behavior="scroll" direction="right" width="100%">Hàng mới cập nhật</marquee></div>
                  <marquee behavior="scroll" direction="left" width="100%">
                  <?php
				 include("dbcon.php");
                $s = "select * from sanpham ORDER BY Gia limit 0,9 ";
                $kq = mysql_query($s,$link);
                while($d = mysql_fetch_array($kq))
                {
                ?>
                  <div align="center" style="float:left; padding-right:20px; height:115px"> 
                  <img src="images/hinhchinh/<?php echo $d["UrlHinh"];?>" width="100px" height="100px"><br/> 
                  
                 </div>
                
                <?php
                }
                ?>
                  </marquee>
            </div>
</body>
</html>