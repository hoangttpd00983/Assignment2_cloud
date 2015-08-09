<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Sản phẩm tìm</title>
<style type="text/css">
<!--
#sanpham 	
	{
		width: 100%; 
		margin:0;float:left;
		background:#ffffff; 
		font-family:helveticaneue;
		border:#CCC solid 1px;
	}
#sanpham>div
	{
		width: 21%; 
		min-height: 200px; 
		text-align:center; 
		margin: 2px 12px; 
		float: left; 
		padding: 5px 0;
		font-size:12px;
		color:#436451;
		
	}
#sanpham>div>img
	{
		width:100px;
		height:100px;
		webkit-border-radius:4px;
		-moz-border-radius: 4px;
		border-radius: 4px; 
		border:1px solid #C0C0C0;
		box-shadow:0px 0px 5px 3px #333;
	}
#sanpham>div>p{
	color:#DE7401;
	font-weight:bold;
	height:20px;
	overflow:hidden;
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
require_once("dbcon.php");
if(isset($_POST["sptim"]))
  	{
		 $id=$_POST["sptim"];
		 $tensp=$_POST["mota"];
		 $giadau=$_POST["Giadau"];
		 $giacuoi=$_POST["Giacuoi"];
	}
else
	{
		 $id=$_GET["sptim"];
		 $tensp=$_GET["mota"];
		 $giadau=$_GET["Giadau"];
		 $giacuoi=$_GET["Giacuoi"];
	}
		 $idLoai=$id;
		 $sodong=12; // 12 san pham
		 $sonhom=5; // 5 trang
 
if (substr($id,0,2)=="cl")
 	{ 
 		$idCL=substr($id,3,strlen($id)-3);
 		$t="select * from sanpham,loaisp where sanpham.idLoai=loaisp.idLoai and idCL=$idCL and (Gia between $giadau and $giacuoi)";
 		$kqtim=mysql_query($t,$link);
	 }
else
 	 {
 		$t="select * from sanpham where idLoai=$idLoai and (Gia between $giadau and $giacuoi)";
		$kqtim=mysql_query($t,$link);
 	 }
 		$tongsotrang=ceil(mysql_num_rows($kqtim)/$sodong); 

// Phan trang
if (!isset($_GET["trang"]))
  	 { 
	 	$trang=1;
	 }
else
     {
  		$trang=intval($_GET["trang"]); //intval: chuyen chuoi thanh so
  	 }
  		$x=($trang-1)*$sodong;
		
// Bam nut
if (substr($id,0,2)=="cl")
	 {	 
	 	$idCL=substr($id,3,strlen($id)-3);
	 	$sptim="select * from sanpham,loaisp where sanpham.idLoai=loaisp.idLoai and idCL=$idCL and (Gia between $giadau and $giacuoi) and TenSP like'%$tensp%' limit $x,$sodong";
	 }
else 
	 {
		$sptim="select * from sanpham where idLoai=$idLoai and (Gia between $giadau and $giacuoi) and TenSP like'%$tensp%' limit $x,$sodong";
 	 }
		$kqtim=mysql_query($sptim,$link);
		while($dt=mysql_fetch_array($kqtim))
				{
?>
  
  <!-- San pham -->
    
    <div>
    	<img src="images/hinhchinh/<?php echo $dt["UrlHinh"];?>" width=55 height=75 /><br />
        <?php echo $dt["TenSP"];?></br>
   		Giá:<?php echo $dt["Gia"];?> VND</br>
    	<div class="info">
    		<span >Gia:</span><?php echo $dt["Gia"];?></br>
    	</div>
    	<a href="index.php?act=chitiet&idSP=<?php echo $dt["idSP"];?>" ><img src="images/icon/xemtiep.gif"/></a>
    </div> 
			<?php } ?>  
</div>
<p align="center" class="pagenavi" style="clear:both">
<!-- hien trang truoc -->
<?php
if($trang>1)
{ 
$truoc=$trang-1; 
?>
<a href="index.php?act=sanphamtim&trang=<?php echo $truoc;?>&sptim=<?php echo $id;?>&Giadau=<?php echo $giadau;?>&Giacuoi=<?php echo $giacuoi;?>&tensp=<?php echo $tensp;?>">Truoc </a>&nbsp;
<?php } ?>

<!-- liet ke thu tu cac trang trong nhom -->

<?php
	$dau=$trang-3;
	if($dau<1)
	{ $dau=1;}
	$cuoi=$dau +($sonhom-1);
	if($cuoi>$tongsotrang)
	{$cuoi=$tongsotrang;}
?>
<!-- trang hien tai cua tong so trang -->
            <span>Page <?php echo $p; ?> of <?php echo $tongsotrang;?></span>
        
        <!-- hien trang dau -->
            <a href="index.php?act=sanphamtim&trang=1&sptim=<?php echo $id;?>&Giadau=<?php echo $giadau;?>&Giacuoi=<?php echo $giacuoi;?>&tensp=<?php echo $tensp;?>">Trang đầu</a>
<?php
for($i=$dau;$i<=$cuoi;$i++)
{ if ($i==$trang)
   { echo $i."&nbsp;";
   }
   else
   {
 ?>
 <a href="index.php?act=sanphamtim&trang=<?php echo $i;?>&sptim=<?php echo $id;?>&Giadau=<?php echo $giadau;?>&Giacuoi=<?php echo $giacuoi;?>&tensp=<?php echo $tensp;?>"><?php echo $i; ?></a>
<?php }} ?>   

<!-- hien trang sau -->
<?php
if($trang<$tongsotrang)
{ $sau=$trang+1; 
?>
<a href="index.php?act=sanphamtim&trang=<?php echo $sau;?>&sptim=<?php echo $id;?>&Giadau=<?php echo $giadau;?>&Giacuoi=<?php echo $giacuoi;?>&tensp=<?php echo $tensp;?>">Sau</a>&nbsp;
<?php } ?>
<?php
               if($trang=$tongsotrang)
               { 
                   $trangcuoi=$trang;
           ?>
                   <a href="index.php?act=sanphamtim&trang=<?php echo $trangcuoi; ?>&sptim=<?php echo $id;?>&Giadau=<?php echo $giadau;?>&Giacuoi=<?php echo $giacuoi;?>&tensp=<?php echo $tensp;?>">Trang cuối</a>
               <?php } ?>
</p>
</body>
</html>