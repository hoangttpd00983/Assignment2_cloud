<?php 
	  	require_once("dbcon.php");
		$idbc=$_GET["idBC"];
		if(isset($_GET["idPA"])&&$_GET["idPA"]!="")
		{
			$idpa=$_GET["idPA"];
			mysql_query($qr="update phuongan set SoLanChon = SoLanChon+1 where idBC=$idbc and idPA=$idpa");
			echo "<script language='javascript'> alert('binh chon thanh cong'); location.href='".$_SERVER['HTTP_REFERER']."'; </script> ";
		}
		else
		{
			echo "<script language='javascript'>";
			echo "alert('Ban chua chon phuong an nao');";
			echo "location.href='".$_SERVER['HTTP_REFERER']."';";
			echo "</script>";
		}
		?>