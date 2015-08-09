<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Slashdot's Menu</title>
	<link rel="stylesheet" type="text/css" href="sdmennu/sdmenu.css" />
	<!-- js cua java scrip -->
	<script type="text/javascript" src="sdmennu/sdmenu.js">
	</script>
	<script type="text/javascript">
	var myMenu;
	window.onload = function() {
		myMenu = new SDMenu("my_menu");
		myMenu.init();
	};
	// ]]>
	</script>
</head>

<body>
<div style="float: left" id="my_menu" class="sdmenu"> 
<?php
	include("dbcon.php");
	$cl="select * from chungloai";
	$kqcl=mysql_query($cl,$link);
	while($dcl=mysql_fetch_array($kqcl))
		{ 
?>
    <div>
    	<span><?php echo $dcl["TenCL"];?></span>
<?php
    	$idcl=$dcl["idCL"];
		$loai="select * from loaisp where idCL=$idcl";
		$kqloai=mysql_query($loai,$link);
		while($dloai=mysql_fetch_array($kqloai))
			{
?>
      	<a href="index.php?idLoai=<?php echo $dloai["idLoai"]?>&act=sanphamnhom"><?php echo $dloai["TenLoai"];?></a>
      		<?php }?>
     </div>
		<?php }?>
</div>
</body>
</html>