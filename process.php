<?php
require_once("dbcon.php");
$user=$_GET["q"];
$s="select * from users where UserName='$user'";
$kq=mysql_query($s,$link);
if (mysql_num_rows($kq)>0)
{
	$d=mysql_fetch_array($kq);
	echo "1";
}
else
{
	echo "0";
}
?>
