<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Admin sản phẩm</title>
<style>
 <!-- css phan trang -- >
.pagenavi{clear:both;text-align:right;margin:25px 0 10px 0;font-size:.714em;font-weight:600;line-height:1.4em}
.pagenavi span,.pagenavi a{background:#e1e1e1;border:1px solid #555;-moz-border-radius:3px;-webkit-border-radius:3px;border-radius:3px;-moz-box-shadow:0 1px 0 #FFF;-webkit-box-shadow:0 1px 0 #FFF;box-shadow:0 1px 0 #FFF;color:#555;margin-left:5px;padding:4px 6px 3px;text-shadow:0 1px 0 #C2C2C2}
.pagenavi span{color:#3a3a3a}
.pagenavi a:hover,.pagenavi .current{background:-moz-linear-gradient(center top,#45bc3f,#1c6318) repeat scroll 0 0 transparent;border:1px solid #00203B;text-shadow:0 -1px 0 #00203B;color:#fff;text-decoration:none}
.pagenavi .pages{background:none;border:none}
</style>
</head>

<body>
	<table width="100%" border="1" align="center" cellpadding="0" cellspacing="0">
    <tr>
    <td colspan="10"><p align="center">Danh Sách Sản Phẩm</p><br>
  	<center><a href="index.php?act=themsanpham">Thêm</a></center>    
    </tr>
	<tr bgcolor="#FFFFCC">
    <td width="5%"><div align="center">STT</div></td>
    <td width="10%"><div align="center">ID sản phẩm</div></td>
    <td width="5%"><div align="center">ID Loại</div></td>
    <td width="10%"><div align="center">Tên sản phẩm </div></td>
    <td width="15%"><div align="center">Ngày cập nhật</div></td>
    <td width="15%"><div align="center">Hình</div></td>
    <td width="10%"><div align="center">Giá</div></td>
    <td width="30%"><div align="center">Mô tả</div></td>
	<td width="5%"><div align="center">Sửa</div></td>
	<td width="5%"><div align="center">Xóa</div></td>
    </tr>
  <?php
	include("../dbcon.php");
	$sodong=5; // 12 san pham
 	$sonhom=5; // 5 trang
 	$sp="select * from sanpham"; 
  	$kqsp=mysql_query($sp,$link);
 	$tongsotrang=ceil(mysql_num_rows($kqsp)/$sodong); 
	
  
			if (!isset($_GET["p"]))
		  { $p=1;
		  }
		  else
		  {
			$p=intval($_GET["p"]);
		  }
		  $x=($p-1)*$sodong;
  	
	$x=($p-1)*$sodong;
	 $sp="select * from sanpham limit $x,$sodong";
	$kqsp=mysql_query($sp,$link);
	
	while($dsp=mysql_fetch_array($kqsp))
	{
?>
  <tr>
    <td width="5%"><div align="center"><?php echo $i; ?></div></td>
    <td width="10%"><div align="center"><?php echo $dsp["idSP"]; ?></div></td>
    <td width="5%"><div align="center"><?php echo $dsp["idLoai"]; ?></div></td>
    <td width="10%"><div align="center"><?php echo $dsp["TenSP"]; ?></div></td>
    <td width="15%"><div align="center"><?php echo $dsp["NgayCapNhat"]; ?></div></td>
    <td width="15%"><div align="center"><img src="../images/hinhchinh/<?php echo $dsp["UrlHinh"]; ?>" width="100" height="100"></div></td>
    <td width="10%"><div align="center"><?php echo $dsp["Gia"]; ?></div></td>
    <td width="30%"><div align="center"><?php echo $dsp["MoTa"]; ?></div></td>
	<td width="5%"><div align="center"><a href="index.php?act=suasanpham&id=<?php echo $dsp["idSP"]; ?>">Sửa</a></div></td>
	<td width="5%"><div align="center"><a href="xoa_sanpham.php?id=<?php echo $dsp["idSP"]; ?>">Xóa</a></div></td>
  </tr>
  <?php
  }
  ?>
</table>
<p class="pagenavi" align="center" style="clear:both">

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
            <a href="index.php?act=sanpham&p=1">Trang đầu</a>
<!-- hien trang sau -->
<?php if ($p>1) {
	$p1=$p-1;
?>
<a href="index.php?act=sanpham&p=<?php echo $p1; ?>"><<</a>&nbsp;
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
 <a href="index.php?act=sanpham&p=<?php echo $i; ?>"><?php echo $i; ?></a>
<?php
   }
}
}
?>   


<!-- hien trang sau -->
<?php if ($p<$tongsotrang) {
	$p2=$p+1;
?>
<a href="index.php?act=sanpham&p=<?php echo $p2; ?>">>></a>&nbsp;
<?php } ?>
<?php
               if($p=$tongsotrang)
               { 
                   $trangcuoi=$p;
           ?>
                   <a href="index.php?act=sanpham&p=<?php echo $trangcuoi; ?>">Trang cuối</a>
               <?php } ?>
</p>
</body>
</html>