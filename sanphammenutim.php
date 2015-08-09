<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Sản phẩm menu tìm</title>
<style type="text/css">
<!-- <script src="jquery.min.js" type="text/javascript"></script> -->
<script type="text/javascript">
$(document).ready(function(){
    $('#spmenutim>div').each(function(){
        var $img=$(this).children().attr('src');
        //alert($img)
        var $title=$(this).find('p.name').text()
        //alert($title)
        $(this).find('div.info').prepend('<img src='+$img+' /><p class="title">'+$title+'</p>')
    })
    $('#spmenutim>div>img').hover(function(){
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
<!--
#spmenutim 	
	{
		width: 100%; 
		margin:0;float:left;
		background:#ffffff; 
		font-family:helveticaneue;
		border:#CCC solid 1px;
	}
#spmenutim>div
	{
		width: 22%; 
		min-height: 200px; 
		text-align:center; 
		margin: 2px 5px; 
		float: left; 
		padding: 5px 0;
		border: 0 none; 
		font-size:12px;
		color:#436451;
	}
#spmenutim>div>img
	{
		width:100px;
		height:100px;
		webkit-border-radius:4px;
		-moz-border-radius: 4px;
		border-radius: 4px; 
		border:1px solid #C0C0C0;
		box-shadow:0px 0px 5px 3px #333;
	}
#spmenutim>div>p{
	color:#DE7401;
	font-weight:bold;
	height:20px;
	overflow:hidden;
}
#spmenutim div.info{
	position:fixed;
	top:0;
	left:200px;
	width:300px;
	background:white;
	border:2px solid #333;
	display:none;
}
#spmenutim div.info img{
	float:left;
	width:139px;
	height:184px;
	border:1px solid black;
	margin:5px;
}
#spmenutim div.info span,#main_phim div.info p{
	color:black;
	font-weight:bold;
	text-align:left;
	margin:2px 4px;
}
#spmenutim div.info span{
	font-weight:normal;
}
#spmenutim div.info p.title{
	color:#DE7401;
	margin:5px;
	text-align:center;
	font-size:17px;
}
</style>
</head>

<body>
<div id="spmenutim">
<?php
include("dbcon.php");
$sodong=15;
$sonhom=5;
$mota=$_POST["motamenu"];
$spmenutim="select * from sanpham where Mota like '%$mota%'";
$kqspmenutim=mysql_query($spmenutim,$link);
$tongsotrang=ceil(mysql_num_rows($kqspmenutim)/$sodong);
	if (!isset($_GET["p"]))
  { $p=1;
  }
  else
  {
  	$p=intval($_GET["p"]);
  }
  $x=($p-1)*$sodong;
  $spmenutim="select * from sanpham where Mota like '%$mota%' limit $x,$sodong";
  $kqspmenutim=mysql_query($spmenutim,$link);
	while($dspmenutim=mysql_fetch_array($kqspmenutim))
{
?>
<div>
	<img src="images/hinhchinh/<?php echo $dspmenutim["UrlHinh"];?>" width="100" height="100"/><br />
	<?php echo $dspmenutim["TenSP"];?><br />
    Giá:<?php echo $dspmenutim["Gia"];?> VND
    <div class="info">
    <span >Mã SP:</span><?php echo $dspmenutim["idSP"];?></br>
    <span >Giá :</span><?php echo $dspmenutim["Gia"];?></br>
    <span >Mô tả :</span><?php echo $dspmenutim["MoTa"];?></br>
    </div>
    <br />
     <a href="index.php?act=chitiet&idSP=<?php echo $dspmenutim["idSP"];?>" ><img src="images/icon/xemtiep.gif"/></a>
</div>
<?php } ?>
</div>
<p align="center">

<?php 

$dau = $p-2;
if($dau<1)
{$dau=1;}

$cuoi = $dau + $sonhom - 1;
if($cuoi>$tongsotrang)
{$cuoi=$tongsotrang;}
?>

<!-- hien trang sau -->
<?php if ($p>1) {
	$p1=$p-1;
?>
<a href="index.php?act=timmenu&p=<?php echo $p1; ?>"><img src="images/icon/1328101938_Arrow-Right.png" width="40" height="20"/></a>&nbsp;
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
 <a href="index.php?act=timmenu&p=<?php echo $i; ?>"><input type="button" value="<?php echo $i; ?>"/></a>
<?php
   }
}
}
?>   


<!-- hien trang sau -->
<?php if ($p<$tongsotrang) {
	$p2=$p+1;
?>
<a href="index.php?act=timmenu&p=<?php echo $p2; ?>"><img src="images/icon/1328101938_Arrow-left.png" width="40" height="20" /></a>&nbsp;
<?php } ?>
</p>
</body>
</html>