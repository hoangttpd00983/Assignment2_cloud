<?php
require_once("../dbcon.php");
// hoac $user=$_GET["q"];  sua Where Username=$user
$s="select * from loaisp where idLoai='".$_GET["q"]."'";
$kq=mysql_query($s,$link);
while($d=mysql_fetch_array($kq))
				{
?>
 <div style="width:70px; float:left">
 <?php
 $idcl=$d["idCL"];
 $s1="select * from chungloai where idCL=$idcl";
 $kq1=mysql_query($s1,$link);
 while($d1=mysql_fetch_array($kq1))
 {
?>
	<div style="width:150px; float:left">Chung Loai:<?php echo $d1["TenCL"];?></div>
<?php }  ?>
 </div>
<?php } ?>