<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Sản phẩm nhóm</title>
<!-- <script src="jquery.min.js" type="text/javascript"></script> -->
<script type="text/javascript">
$(document).ready(function(){
    $('#sanpham>div').each(function(){
        var $img=$(this).children().attr('src');
        //alert($img)
        var $title=$(this).find('p.name').text()
        //alert($title)
        $(this).find('div.info').prepend('<img src='+$img+' /><p class="title">'+$title+'</p>')
    })
    $('#sanpham>div>img').hover(function(){
        $(this).parent().find('div.info').show()
    },function(){
        $(this).parent().find('div.info').hide()
    }).mousemove(function(e){
        var $X=e.clientX
        var $Y=e.clientY
        $(this).parent().find('div.info').css({'left':$X+20,'top':$Y})
    }).click(function(){
        var $link=$(this).parent().find('a').attr('href')
        window.open($link,'')
    })
})
</script>
<style type="text/css">
<!--
#sanpham 	
	{
		width: 100%; 
		margin:17px 0 0 50px;
		float:left;
		background:#ffffff; 
		font-family:helveticaneue;
		padding-bottom: 50px;
		
	}
#sanpham>div
	{
		width: 21%; 
		min-height: 200px; 
		text-align:center; 
		margin: 2px 12px; 
		float: left; 
		padding: 40px 36px;
		font-size:12px;
		color:#436451;
		border: 1px solid #E8E8E8

		
	}
#sanpham>div:hover
	{
		-moz-border-radius: 10px;
		-webkit-border-radius: 10px;
	}

#sanpham>div>img
	{
		width:100px;
		height:100px;
		webkit-border-radius:4px;
		-moz-border-radius: 4px;
		border-radius: 4px; 
		
	}
#sanpham>div>p{
	color:#DE7401;
	font-weight:bold;
	height:20px;
	overflow:hidden;
}
#sanpham div.info{
	position:fixed;
	top:0;
	left:200px;
	width:300px;
	background:white;
	border:2px solid #333;
	display:none;
}
#sanpham div.info img{
	float:left;
	width:139px;
	height:184px;
	border:1px solid black;
	margin:5px;
}
#sanpham div.info span,#main_phim div.info p{
	color:black;
	font-weight:bold;
	text-align:left;
	margin:2px 4px;
}
#sanpham div.info span{
	font-weight:normal;
}
#sanpham div.info p.title{
	color:#DE7401;
	margin:5px;
	text-align:center;
	font-size:17px;
}
<!-- css phan trang -- >
.pagenavi{clear:both;text-align:right;margin:25px 0 10px 0;font-size:.714em;font-weight:600;line-height:1.4em}
.pagenavi span,.pagenavi a{background:#e1e1e1;border:1px solid #555;-moz-border-radius:3px;-webkit-border-radius:3px;border-radius:3px;-moz-box-shadow:0 1px 0 #FFF;-webkit-box-shadow:0 1px 0 #FFF;box-shadow:0 1px 0 #FFF;color:#555;margin-left:5px;padding:4px 6px 3px;text-shadow:0 1px 0 #C2C2C2}
.pagenavi span{color:#3a3a3a}
.pagenavi a:hover,.pagenavi .current{background:-moz-linear-gradient(center top,#45bc3f,#1c6318) repeat scroll 0 0 transparent;border:1px solid #00203B;text-shadow:0 -1px 0 #00203B;color:#fff;text-decoration:none}
.pagenavi .pages{background:none;border:none}
</style>
</head>

<body>
<div id="sanpham">
<?php
	include("dbcon.php");
	$idloai=$_GET["idLoai"];
	$sodong=12; // 12 san pham
 	$sonhom=5; // 5 trang
 	$sp="select * from sanpham"; 
  	$kqsp=mysql_query($sp,$link);
 	$tongsotrang=ceil(mysql_num_rows($kqsp)/$sodong); 
  
  	if(!isset($_GET["tst"]))
		{
 	$kqsp=mysql_query("select * from sanpham where idLoai=$idloai",$link);
  	$tongsotrang=ceil(mysql_num_rows($kqsp)/$sodong);
  		}
  	else
  		{
  	$tongsotrang=intval($_GET["tst"]);
  		}
  
  	if (!isset($_GET["trang"]))
  		{ 
		$trang=1;
		}
 	else
  		{
  	$p=intval($_GET["trang"]); //intval: chuyen chuoi thanh so
 		}
  	
	$x=($trang-1)*$sodong;
	$sp="select * from sanpham where idLoai=$idloai ORDER BY Gia limit $x,$sodong ";
	$kqsp=mysql_query($sp,$link);
	while($dsp=mysql_fetch_array($kqsp))
	{
?>
<div>

	<img src="images/hinhchinh/<?php echo $dsp["UrlHinh"];?>" width="120px" height="100px" /><br />
	<p style="font-size:14px;font-family:arial;color:#1B191A;"><?php echo $dsp["TenSP"];?></p><br />
    <p style="font-size:18px; color:#77BC1A;">Giá:<?php echo $dsp["Gia"];?> đ</p> </br></br></br>
    <a href="index.php?act=chitiet&idSP=<?php echo $dsp["idSP"];?>" style="font-size:20px;font-family:arial;color:#000; background:#EFEFEF;border: 1px solid #E1E1E1; padding:5px; margin-top:10px">Xem Chi Tiết</a>
    <div class="info">
    <span >Mã SP:</span><?php echo $dsp["idSP"];?></br>
    <span >Giá :</span><?php echo $dsp["Gia"];?></br>
    <span >Mô tả :</span><?php echo $dsp["MoTa"];?></br>
    </div>
    <br />
</div>
<?php } ?>
</div>
<p align="center" class="pagenavi" style="clear:both">
<?php
	$dau=$trang-2;
	if($dau<1)
		{ 
		$dau=1;
		}
	
	$cuoi=$dau+($sonhom-1);
	if ($cuoi>$tongsotrang)
		{
		$cuoi=$tongsotrang;
		}
?>
   <!-- trang hien tai cua tong so trang -->
            <span>Page <?php echo $trang; ?> of <?php echo $tongsotrang;?></span>
        
        <!-- hien trang dau -->
            <a href="index.php?act=sanphamnhom&trang=1&idLoai=<?php echo $idloai; ?>">Trang đầu</a>

  <!-- hien trang truoc -->
  <?php
	if($trang>1)
		{
	$truoc=$trang-1;
?>
  <a href="index.php?act=sanphamnhom&trang=<?php echo $truoc; ?>&idLoai=<?php echo $idloai; ?>"><img src="images/icon/1328101938_Arrow-Right.png" width="40" height="20" /></a>
  <?php } ?>
  
  <!-- liet ke thu tu cac trang trong nhom -->
  <?php
for($i=$dau;$i<=$cuoi;$i++)
	{ 
	if ($i==$trang)
   		{ 
		echo $i."&nbsp;";
  		}
   else
   		{
?>	
  <a href="index.php?act=sanphamnhom&trang=<?php echo $i; ?>&idLoai=<?php echo $idloai; ?>"><?php echo $i; ?></a>
  <?php } ?>  
  <?php } ?>   
  
  <!-- hien trang sau -->
  <?php
 if($trang<$tongsotrang)
 	{ 
	$sau=$trang+1;
?>
  <a href="index.php?act=sanphamnhom&trang=<?php echo $sau; ?>&idLoai=<?php echo $idloai; ?>"><img src="images/icon/1328101938_Arrow-left.png" width="40" height="20" /></a>
  <?php } ?>
  <?php
               if($trang=$tongsotrang)
               { 
                   $trangcuoi=$trang;
           ?>
                   <a href="index.php?act=sanphamnhom&trang=<?php echo $trangcuoi; ?>&idLoai=<?php echo $idloai; ?>">Trang cuối</a>
               <?php } ?>
</p>
</body>
</html>