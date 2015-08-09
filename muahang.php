<?php session_start();
include("dbcon.php");
$kt=0; // 78-85 kiem tra mat hang do co trong gio hang chua ,neu co roi thi chi tang so luong thoi
	for($i=1;$i<=$_SESSION["somathang"];$i++)
	{
		if ($_GET["idSP"]==$_SESSION["idSP".$i])
			{
			$kt=1;
			$_SESSION["SoLuong".$i]+=1;
			break;
			}
	}
	if ($kt==0)
	{ // to bao nay chua co trong gio hang thi moi dua them vao 
		$idspmua=$_GET["idSP"];
		$sql="select * from sanpham where idSP='$idspmua'";
		$result=mysql_query($sql,$link);
		if (mysql_num_rows($result)>0)
			{
				$row=mysql_fetch_array($result);
				$_SESSION["somathang"]++;
				$i=$_SESSION["somathang"];
				$_SESSION["UrlHinh".$i]=$row["UrlHinh"];
				$_SESSION["idSP".$i]=$row["idSP"];
				$_SESSION["Ten".$i]=$row["tenbao"];
				$_SESSION["Gia".$i]=$row["Gia"];
				$_SESSION["SoLuong".$i]=1;
			}
	}
	
		header("location:".$_SERVER['HTTP_REFERER']);
	?>
