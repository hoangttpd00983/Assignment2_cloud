<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Linh kiện</title>
<script type="text/javascript" src="js/toolTip/jquery.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){
    $('#laptop>div').each(function(){
        var $img=$(this).children().attr('src');
        //alert($img)
        var $title=$(this).find('p.name').text()
        //alert($title)
        $(this).find('div.info').prepend('<img src='+$img+' /><p class="title">'+$title+'</p>')
    })
    $('#laptop>div>img').hover(function(){
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
<style>
#laptop 	
	{
		width: 100%; 
		margin:17px 0 0 50px;
		float:left;
		background:#ffffff; 
		font-family:helveticaneue;
		padding-bottom: 50px;
	}
#laptop>div
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
#laptop>div:hover
	{
		-moz-border-radius: 10px;
		-webkit-border-radius: 10px;
	}

#laptop>div>img
	{
		width:100px;
		height:100px;
		webkit-border-radius:4px;
		-moz-border-radius: 4px;
		border-radius: 4px; 
	}
#laptop>div>p{
	color:#DE7401;
	font-weight:bold;
	height:20px;
	overflow:hidden;
}
#laptop div.info{
	position:fixed;
	top:0;
	left:200px;
	width:300px;
	background:white;
	border:2px solid #333;
	display:none;
}
#laptop div.info img{
	float:left;
	width:139px;
	height:184px;
	border:1px solid black;
	margin:5px;
}
#laptop div.info span,#main_phim div.info p{
	color:black;
	font-weight:bold;
	text-align:left;
	margin:2px 4px;
}
#laptop div.info span{
	font-weight:normal;
}
#laptop div.info p.title{
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
<div id="laptop">
 <?php
	include("dbcon.php");
	$sodong=15;
    $sonhom=5;
	$s="select * from sanpham,loaisp where sanpham.idLoai=loaisp.idLoai and idCL='3'";
	$kq=mysql_query($s,$link);
	
	$tongsotrang=ceil(mysql_num_rows($kq)/$sodong);
	if (!isset($_GET["p"]))
  { $p=1;
  }
  else
  {
  	$p=intval($_GET["p"]);
  }
  $x=($p-1)*$sodong;
  $s="select * from sanpham,loaisp where sanpham.idloai=loaisp.idloai and idCL=3 limit $x,$sodong";
  $kq=mysql_query($s,$link);
	while($d=mysql_fetch_array($kq))
	{	
	
?>
	<div>

	<img src="images/hinhchinh/<?php echo $d["UrlHinh"];?>" width="120px" height="100px" /><br />
	<p style="font-size:14px;font-family:arial;color:#1B191A;"><?php echo $d["TenSP"];?></p><br />
    <p style="font-size:18px; color:#77BC1A;">Giá:<?php echo $d["Gia"];?> đ</p> </br></br></br>
    <a href="index.php?act=chitiet&idSP=<?php echo $d["idSP"];?>" style="font-size:20px;font-family:arial;color:#000; background:#EFEFEF;border: 1px solid #E1E1E1; padding:5px; margin-top:10px">Xem Chi Tiết</a>
    <div class="info">
    <span >Mã SP:</span><?php echo $d["idSP"];?></br>
    <span >Giá :</span><?php echo $d["Gia"];?></br>
    <span >Mô tả :</span><?php echo $d["MoTa"];?></br>
    </div>
    <br />
</div>
    <?php } ?> 
</div>
<p align="center" class="pagenavi" style="clear:both">

<?php 

$dau = $p-2;
if($dau<1)
{$dau=1;}

$cuoi = $dau + $sonhom - 1;
if($cuoi>$tongsotrang)
{$cuoi=$tongsotrang;}
?>
<!-- trang hien tai cua tong so trang -->
            <span>Page <?php echo $p; ?> of <?php echo $tongsotrang;?></span>
        
        <!-- hien trang dau -->
            <a href="index.php?act=mayanh&p=1">Trang đầu</a>
<!-- hien trang sau -->
<?php if ($p>1) {
	$p1=$p-1;
?>
<a href="index.php?act=mayanh&p=<?php echo $p1; ?>"><img src="images/icon/1328101938_Arrow-Right.png" width="40" height="20"/></a>&nbsp;
<?php } ?>	


<!-- liet ke thu tu cac trang trong nhom -->
<?php

for($i=$dau;$i<=$cuoi;$i++)
{ 

if ($i<=$tongsotrang)
{

if ($i==$p)
   { echo $i."&nbsp;";
   }
   else
   {
 ?>
 <a href="index.php?act=mayanh&p=<?php echo $i; ?>"><?php echo $i; ?></a>
<?php
   }
}
}
?>   



<!-- hien trang sau -->
<?php if ($p<$tongsotrang) {
	$p2=$p+1;
?>
<a href="index.php?act=mayanh&p=<?php echo $p2; ?>"><img src="images/icon/1328101938_Arrow-left.png" width="40" height="20" /></a>&nbsp;
<?php } ?>
<?php
               if($p=$tongsotrang)
               { 
                   $trangcuoi=$p;
           ?>
                   <a href="index.php?act=mayanh&p=<?php echo $trangcuoi; ?>">Trang cuối</a>
               <?php } ?>
</p>
</body>
</html>