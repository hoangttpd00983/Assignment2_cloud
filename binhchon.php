<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>

<style type="text/css">
#bc
{
	margin-bottom:10px;
	border-bottom:1px solid #999;
	border-left:1px solid #999;
	border-top:1px solid #999;
	color:#436451;
	
}
.binhchon{

	
}
.binhchon p{
	color: #FFFFFF;
	font-weight: bold;	
}

</style>
<script language="javascript">
	function xemkq(m)
	{
		x=window.open("","","status=yes,menubar=no");
		x.location="ketquabinhchon.php?idBC="+m;
		x.resizeTo(500,300);
	}
</script>
</head>

<body>
<div id="bc">
<form id="form1" name="form1" method="GET" action="xulybinhchon.php">
<table  width="100%" align="center" class="binhchon"  bgcolor="#FFFFFF">
<tr>
        <td colspan="2" width="150" height="28" background="images/icon/toptitle.jpg"><font color="#FFFFFF"><b>&nbsp;Bình Chọn Trang Web</b></font></td>
    </tr>
  <tr>
    <td>
    <?php 
	  	require_once("dbcon.php");
		$s="select * from binhchon";
		$kq=mysql_query($s,$link);
		$i=rand(0,mysql_num_rows($kq)-1);
		$s="select * from binhchon limit $i,1";
		if($d=mysql_fetch_array($kq))
		{
			$idbc=$d["idBC"];;
		}
		$cac_binhchon=mysql_query("select * from binhchon where idBC=$idbc");
		while($mot_binhchon=mysql_fetch_array($cac_binhchon))
		{
			$idbc=$mot_binhchon["idBC"];
	?>
    <input name="idBC" type="hidden" id="BC" value=<?php echo $idbc;?>  />
    <?php
		echo $mot_binhchon["MoTa"];
		}
	?>
    </td>
  </tr>
  <tr>
    	<td>
    <table>
    <?php 
		$cac_phuongan=mysql_query("select * from phuongan where idBC=$idbc");
		while($mot_phuongan=mysql_fetch_array($cac_phuongan))
		{
		?>
        <tr>
        <td><input type="radio" name="idPA" value="<?php echo $mot_phuongan["idPA"];?>" id="idPA" /></td>
        <td><?php echo $mot_phuongan["Mota"];?></td>
        </tr>
        <?php
		}
		?>
  </table>
  		</td>
  </tr>
 <tr>
   <td align="center">
 <input type="submit" name="binhchon" id="binhchon" value="Bình Chọn" />
<input type="button" name="ketqua" onClick="location.href='index.php?act=ketquabinhchon&idBC=<?php echo $idbc;?>'" value="Kết quả" /></td>
   </tr>
 </table>
</form>
</div>
</body>
</html>