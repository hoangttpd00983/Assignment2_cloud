<?php
session_start();
if (!isset($_SESSION["username"]))
	{
		header("location:dangnhap.php");	
	}
?>



<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<style>
	#container
	{
		width:960px;
		margin:auto;
		
	}
	#header
	{
		width:960px;
		background-color:#F00;
	}
	#content
	{
	width:960px;
	background-color:#99FFCC;
	overflow:hidden;

	}
	#left
	{
		width:255px;
		float:left;
		border:#000 1px solid;
		margin:2px;
	}
	#right
	{
		width:695px;
		float:left;
		margin:2px;
		
	}
	#footer
	{
	width:auto;
	clear:both;
	background-color:#def4ff;
	margin-top: 150px;
	}
</style>
</head>

<body>

<div id="container">
	<div id="header">
   	<?php include("header.php");?>
    </div>
    <div id="content">
    	<div id="left">
        <table border="0" width="100%">
        <tr><td>
        <div><p><center><b>Thông tin</b><center></p> </div>
        </tr></td> 
        <tr>           
        <td><a href="index.php?act=chungloai">Chủng loại sản phẩm</a><br /></td>
        </tr>
		<tr>			
        <td><a href="index.php?act=loaisp">Loại sản phẩm</a><br /></td>
        </tr>
        <tr>          	
        <td><a href="index.php?act=sanpham">Các sản phẩm</a><br /></td>
        </tr>
        <tr>
        <td><a href="index.php?act=donhang">Đơn hàng</a><br /></td>
        </tr>
		<tr>
		<td> <a href="thoat.php"> Thoát </a> 
		</tr>
		</table>           
        </div>
        <div id="right">
						<?php
            if(!isset($_GET["act"]))
                    {
                include("admin_chungloai.php");
                    }
            else
                    {
                switch($_GET["act"])
                       {
                    case "chungloai":
                    include("admin_chungloai.php");
                    break;
					case "loaisp":
                    include("admin_loaisp.php");
                    break;
					case "sanpham":
                    include("admin_sanpham.php");
                    break;
					case "themchungloai":
                    include("them_chungloai.php");
                    break;
					case "suachungloail":
                    include("sua_chungloai.php");
                    break;
					case "themloaisp":
                    include("them_loaisp.php");
                    break;
					case "sualoaisp":
                    include("sua_loaisp.php");
                    break;
					case "themsanpham":
                    include("them_sanpham.php");
                    break;
					case "suasanpham":
                    include("sua_sanpham.php");
                    break;
					case "donhang":
                    include("admin_donhang.php");
                    break;
					   }
					}
					?>
          </div>
    </div>
   
   
    <div id="footer">
 	<hr />
	<font color="#CC0000">Copyright © Công Ty Trách Nhiệm Hữu Hạn Tin Học Minh Đức </font>
    
    </div>


</div>

</body>
</html>