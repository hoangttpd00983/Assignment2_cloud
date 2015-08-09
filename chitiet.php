<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<style>
#sanpham {
	
	padding: 5px 10px;
	width: 555px;
	margin-top: 0px;
	margin-right: auto;
	margin-bottom: 10px;
	margin-left: 3px;
	padding: 20px;
	background-color: #FFF;
	box-shadow: 1px 2px 20px #ccc;
	font-size:14px;
	font-family:arial
}
div .right span {margin-top:5px}
.left {float:left}
-->
</style>
</head>
<body>
<div id="sanpham">
     <?php
	include("dbcon.php");
	$idsp=$_GET["idSP"];
	$sp="select * from sanpham where idSP='$idsp'";
	$kqsp=mysql_query($sp,$link);
	while($dsp=mysql_fetch_array($kqsp))
		{	
?>
	<div> 
	<div class="left"><a href="#"><img src="images/hinhchinh/<?php echo $dsp["UrlHinh"];?> "width="120px" height="180px" /></a><br></div>
    <div class="right">	
		<span style="font-size:18px;"><?php echo $dsp['TenSP'] ?></span><br><br>
   	 	<span >Mã SP:</span><?php echo $dsp["idSP"]; ?></br></br>
    	<span >Giá:</span><?php echo $dsp["Gia"]; ?></br></br>
        <span >Mô tả:</span><?php echo $dsp["MoTa"]; ?></br>
        
</div>
    </div>
    <?php } ?> 
    <!--<input type="button" name="muahang" onClick="location.href=''" value="Mua hàng"> -->
	<a href="muahang.php?act=muahang&idSP=<?php echo $idsp; ?>"><img src="images/icon/add-to-cart.png" width="200" height="50" /></a></div>

</body>
</html>