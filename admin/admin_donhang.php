<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml2/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" media="all" href="../lich/calendar-win2k-cold-2.css" title="win2k-cold-1" />
<head>

<script type="text/javascript" src="../mrk_glossy/jquery-1.2.2.pack.js"></script>
<script type="text/javascript" src="../mrk_glossy/ddaccordion.js"></script>
<link href="mrk_glossy/khoa.css" rel="../stylesheet" type="text/css" />
<script type="text/javascript" src="../lich/calendar.js"></script>

<!-- language for the calendar -->
<script type="text/javascript" src="../lich/lang/calendar-en.js"></script>

<!-- the following script defines the Calendar.setup helper function, which makes
   adding a calendar a matter of 1 or 2 lines of code. -->
<script type="text/javascript" src="../lich/calendar-setup.js"></script>
<style>
	#donhangadmin
	{
		border:#000 solid 1px;
	}
</style>
</head>

<body>
<div id="donhangadmin">

  <form id="form1" method="post" action="">
    <p>
      <label>
       Từ Ngày<input type="text" name="tungay" id="f_date_a" />
      </label>
      <label>
      Đến Ngày<input type="text" name="denngay" id="f_date_b" />
      </label>
      <label>
        <input type="submit" name="button" id="button" value="Xem" />
      </label>
    </p>
</form>
</div>
<div class="glossymenu">
<?php 
include("../dbcon.php");
$ngay1=$_POST["tungay"];
$ngay2=$_POST["denngay"];

$s="select * from donhang where  DATEDIFF(ThoiDiemDatHang,'$ngay1')>=0 and DATEDIFF(ThoiDiemDatHang,'$ngay2')<=0";
$kq=mysql_query($s,$link);
while($d=mysql_fetch_array($kq))
	{
?>
<!--level 1-->
<a class="menuitem submenuheader" href="#" ><?php echo $d["idDH"];?>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;<?php echo $d["username"];?>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;<?php echo $d["ThoiDiemDatHang"];?></a>
<div class="submenu">
	<ul>
	    <!--level 2-->
        <li><a href="#">
        <table width="480" border="0" cellspacing="0" cellpadding="0">
            <tr>
             <td width="20%" align="center">IDDH</td>
            <td width="20%" align="center">IDSP</td>
            <td width="20%" align="center">So Luong</td>
            <td width="20%" align="center">DonGia</td>
            <td width="20%" align="center">Thanh Tien</td>
            </tr>
		</table>
        </a></li>
        <!--// level 2-->
        <?php
		$iddh=$d["idDH"];
        $s1="select * from donhangchitiet where idDH='$iddh'";
		$kq1=mysql_query($s1,$link);
		while($d1=mysql_fetch_array($kq1))
			{
?> 
		<li><a href="#">
        <table width="480" border="0" cellspacing="0" cellpadding="0" align="center">
            <tr>
            <td width="120" align="center"><?php echo $d1["idDH"];?></td>
            <td width="120" align="center"><?php echo $d1["idSP"];?></td>
            <td width="120" align="center"><?php echo $d1["SoLanMua"];?></td>
            <td width="120" align="center"><?php echo $d1["DonGia"];?></td>
            <td width="120" align="center"><?php echo $d1["DonGia"]*$d1["SoLanMua"];?></td>
            </tr>
		</table>
		</a></li>
        <?php }?>
	</ul>
</div>
<?php }?>

</div>
<script type="text/javascript">
    function catcalc(cal) {
        var date = cal.date;
        var time = date.getTime()
        // use the _other_ field
        var field = document.getElementById("f_calcdate");
        if (field == cal.params.inputField) {
            field = document.getElementById("f_date_a");
            time -= Date.DAY; // substract one week
        } else {
            time += 3*Date.DAY; // add one week
        }
        var date2 = new Date(time);
        field.value = date2.print("%Y-%m-%d");
    }
    Calendar.setup({
        inputField     :    "f_date_a",   // id of the input field
        ifFormat       :    "%Y-%m-%d",       // format of the input field
        showsTime      :    true,
        timeFormat     :    "24",
        onUpdate       :    catcalc
    });
	Calendar.setup({
        inputField     :    "f_date_b",   // id of the input field
        ifFormat       :    "%Y-%m-%d",       // format of the input field
        showsTime      :    true,
        timeFormat     :    "24",
        onUpdate       :    catcalc
    });
    
</script>
</body>
</html>