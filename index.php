<?php
	session_start();ob_start();
	if (!isset($_SESSION["somathang"])){ //$_SESSION["somathang"] - so mat hang trong gio hang
	$_SESSION["somathang"]=0;}
	
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Siêu Thị Điên Tử BizMart</title>
<link href="images\logo\md.jpg" rel="shortcut icon" type="images/x-icon" /> 

<style type="text/css">
<!--
#top
{
    background-position: center top;
    background-repeat: no-repeat;
        height: 30px;
         margin: 0px auto;
     width: 100%;
        background-color: #1B191A;
	
}
#TopMenu {
    margin: auto;
    width: 1200px;
    padding: 0px;
}
#TopMenu ul {
    float: right;
    margin-bottom: 0px;
	margin-top:3px;
}
#TopMenu li:first-child {
    background-image: none;
}
#TopMenu li {
    background-image: url("images/top_sep.gif");
    background-position: left center;
    background-repeat: no-repeat;
    float: left;
    list-style: outside none none;
    margin: 0px;
    padding: 0px;
    line-height: 26px;
}
#TopMenu li a {
    color: #D6D6D6;
    display: block;
    font-size: 12px;
    font-family: Arial;
    padding: 0px 10px;
    text-decoration: none;
}
#TopMenu li a:hover {color:#77BC1A; text-decoration: underline}
#header  
{
	width: 1200px;
	background-color:#fff;
	float:right;
}
#bg_header  
{
	    background: transparent url("sdmennu/header_bg.jpg") repeat-x scroll 0% 0%;
		height: 103px;
}
}
#timkiem  
{
	width: 960px;
	float: right;
	height: 30px;
}
#content  
{
	width: 1200px;
	background-color:#FFF;
	margin:auto;
	padding:0px
		
}
#left   
{
	width: 230px;
	float: left;
	margin-left:0;
	margin-right:2px;
}

#center  
{
	width: 800px;
float: left;
margin: 2px 0px 0px 20px;
padding: 0px;
background: #fff;
}
#center-son
{
	width:100%;
	float:left;
}
#right   
{
	width: 204px;
	float:right;
	margin:auto;
}
#footer  
{
	margin:auto;
	clear: both;
	width: 100%;
	background:#003;
	display:block;
	background-image:url(footer/Untitled-1.jpg);

}
#quangcao  
{
	width: 960px;
	float:left;
}
body 
{
	background-image:url(images/giaodien/body.jpg);
	height: auto;
	background-repeat: repeat;
	width: auto;
	margin:0;
	padding:0;
	font-family: Tahoma, Arial, Helvetica, sans-serif;
    font-family:roboto-regular;
    font-size: 12px;
    height: 100%;
    background-image:url(images/bg.gif);
    background-repeat:repeat-x;
    min-width: 961px;
    background-color:#f6f5f5 !important;
}
#mota_menu{width:225px; border:1px solid #ccc; padding:2px}
-->
</style>
</head>

<body>
	<div id="top">
	<div id="TopMenu">
                    
<ul>
    
    <li class="First topMenu_Account">
        <a href="/account/personal.html">
            Tài khoản của tôi
        </a>
    </li>
    <li class="topMenu_Order">
        <a href="/account/order-status.html">
            Quản lý đơn hàng
        </a>
    </li>
    <li class="topMenu_Wishlist">
        <a href="/account/wishlist.html">
            Danh sách ưa thích
        </a>
    </li>
    <li class="CartLink topMenu_Cart">
        <a href="/account/cart.html">
            Giỏ hàng
            <span id="pInTop"></span>
        </a>
    </li>
    
    <li class="topMenu_Login">
        <a href="index.php?act=login">
            Đăng nhập
        </a>
    </li>
    <li class="topMenu_Register">
        <a href="index.php?act=dangki">
            Đăng ký
        </a>
    </li>
    
</ul>

                </div>
	</div>
	<div id="bg_header">
    <?php include("menu.php");?>
    </div> 
    <div id="content">
    
	
    
    <div id="header">
	<?php include("movie.php");?>
    <?php include("header.php");?>
    </div>
    
    
    
    <div class="timkiem">
    <?php include("timkiem.php");?>
    </div>
   
    
    	<div id="left">
		<form id="formtim" name="formtim" method="POST" action="index.php?act=timmenu">
                <div id="mota_menu" >
                      <div class="left_se" style="float:left"><input type="text" name="motamenu" id="motamenu" value="" placeholder="Tìm kiếm sản phẩm" style="border:none"/></div>
                      <!-- <input type="submit" id="xem" name="xem" value="Tìm"/>-->
					  <div class="right_se" style="float:right; padding-top:5px">
                      <img src="images/icon/search100.png" width="20" height="20" onclick="timkiem()"/>
					  </div>
             	 </div> 
                </form>
        <?php include("sdmenu.php");?>
       <?php include ("giohang.php"); ?>
        </div>
        <div id="center">
        &nbsp;
        	<div id="center-son">
        	<?php
				if(!isset($_GET["act"]))
						{
						include("sanpham.php");
						}
						else
							{
							switch($_GET["act"])
						    {
								case "sanphamnhom":
								include("sanphamnhom.php");
								break;
								case "sanphamtim":
								include("sanphamtim.php");
								break;
								case "chitiet":
								include("chitiet.php");
								break;
								case "dangki":
								include("dangki.php");
								break;						
								case "login":
								include("login.php");
								break;
								case "ketquabinhchon":
								include("ketquabinhchon.php");
								break;
								case "xemgiohang":
								include("xemgiohang.php");
								break;
								case "xemhoadon":
								include("xemhoadon.php");
								break;
								case "dathang":
								include("donhang.php");
								break;
								case "xemhoadon":
								include ("xemhoadon.php");
								break;
								case "timmenu":
								include ("sanphammenutim.php");
								break;
								case "dienthoai":
								include ("dienthoai.php");
								break;
								case "laptop":
								include ("laptop.php");
								break;
								case "mayanh":
								include ("mayanh.php");
								break;
								case "lienhe":
								include ("lienhe.php");
								break;
								case "gioithieu":
								include ("gioithieu.php");
								break;
								case "thanhtoan":
								include ("thanhtoan.php");
								break;
						   }
						}
			?>
            </div>
        </div>
        <div id="right"> 
		 
        
        </div>
       	<div id="quangcao">
        
        </div>
        <div style="clear:both"></div>
     	</div>
</div>
	<div id="footer">
    <?php include("footer.php");?>
    </div>
	



</body>
</html>