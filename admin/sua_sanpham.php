<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Sửa Sản Phẩm</title>
 <link rel="stylesheet" type="text/css" media="all" href="../lich/calendar-win2k-1.css" title="win2k-cold-1" />

  <!-- main calendar program -->
  <script type="text/javascript" src="../lich/calendar.js"></script>

  <!-- language for the calendar -->
  <script type="text/javascript" src="../lich/lang/calendar-en.js"></script>

  <!-- the following script defines the Calendar.setup helper function, which makes
       adding a calendar a matter of 1 or 2 lines of code. -->
  <script type="text/javascript" src="../lich/calendar-setup.js"></script>
  
 
 
  			<!-- CKEditor Sample -->
  <script type="text/javascript" src="../ckeditor/ckeditor.js"></script>
	<script src="../ckeditor/_samples/sample.js" type="text/javascript"></script>
	<link href="../ckeditor/_samples/sample.css" rel="stylesheet" type="text/css" />
    <script language="javascript" src="scripts1.js"></script>
</head>

<body>
<?php
  require_once("../dbcon.php");
  $idsp=$_GET["id"];
 $sql="select * from sanpham where idSP='$idsp'";
  $kq=mysql_query($sql,$link);
  if (mysql_num_rows($kq)>0)
  {
  	$dong=mysql_fetch_array($kq);
	$idsp=$dong["idSP"];
	$idloai=$dong["idLoai"];
	$tensp=$dong["TenSP"];
	$ngay=$dong["NgayCapNhat"];
	$hinh=$dong["UrlHinh"];
	$gia=$dong["Gia"];
  	$mota=$dong["MoTa"];

  }
  else
  {
	$idsp="";
	$idloai="";
	$tenloai="";
	$d="";
	$hinh="";
	$gia="";
  	$mota="";
  }
  ?>
<form action="luusua_sanpham.php" method="post" enctype="multipart/form-data" name="f">
<table width="100%" border="1" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td colspan="2"><div align="center">Thay Đổi Thông tin San Pham</div></td>
  </tr>
  <tr>
    <td width="100">ID San Pham</td>
    <td width="250">
	<input name="idsp" type="text" id="idsp" value="<?php echo $idsp; ?>" disabled > 
    <!-- disable thi ko submit qua dc -->
	<input name="idsp1" type="hidden" value="<?php echo $idsp; ?>">
	</td>
  </tr>
  <tr>
    <td width="100">Tên SAn pham</td>
    <td width="250"><input name="tensp" type="text" id="tensp" value="<?php echo $tensp; ?>"></td>
  </tr>
   <tr>
   <td width="100">Loai San Pham</td>
    <td width="100">
    
     <!-- Loai san pham -->
  <select name="idloai" id="iloai" onchange="loadXMLDoc(this.value)">
    
    <!-- Loai san pham -->
<?php 
	include ("../dbcon.php");
	 $l="select * from loaisp";
	 $kql=mysql_query($l,$link);
	 while($dongl=mysql_fetch_array($kql))
  			{ 
?>
    	<option value="<?php echo $dongl['idLoai']?>" <?php if($dongl["idLoai"]==$idloai) echo "selected='selected'"; ?>> &nbsp; &nbsp; &nbsp; <?php echo $dongl["TenLoai"]; ?></option>
     		<?php } ?> 
</select>
<div id="sp" style="width:150px;"></div>
<script language="javascript">
loadXMLDoc('<?php echo $k; ?>')
</script></td>
  </tr>
 
   <tr>
    <td width="100">Ngay Cap Nhat</td>
    <td width="250">
    <input type="text" name="f_date_b" id="f_date_b" value="<?php echo $ngay;?>"/>
    <button type="reset" id="f_trigger_b">...</button>

<script type="text/javascript">
    Calendar.setup({
        inputField     :    "f_date_b",      // id of the input field
        ifFormat       :    "%d/%m/%Y",       // format of the input field
        showsTime      :    true,            // will display a time selector
        button         :    "f_trigger_b",   // trigger for the calendar (button ID)
        singleClick    :    false,           // double-click mode
        step           :    1                // show all years in drop-down boxes (instead of every other year as default)
    });
</script>
</td>
  </tr>
   <tr>
    <td width="100">Hình</td>
    <td width="250"><input name="hinh" type="file" id="hinh"><br>
	<img src="../images/hinhchinh/<?php echo $hinh; ?>" width="100" height="100"></td>
  </tr>
  
  <tr>
    <td width="100">Gia</td>
    <td width="250"><input name="gia" type="text" value="<?php echo $gia; ?>"></td>
  </tr>
  
  
   <tr>
    <td width="100">Mota</td>
    <td width="250">

  <textarea cols="8" id="mota" name="mota" rows="5"><?php echo $mota;?></textarea>
			<script type="text/javascript">
			//<![CDATA[

				CKEDITOR.replace( 'mota',
					{
						fullPage : true,
						extraPlugins : 'docprops'
					});

			//]]>
			</script>
            </td>
              </tr>
               <tr>
    <td colspan="2"><div align="center">
        <input type="submit" name="Submit" value="Lưu">
        <input type="button" name="Submit2" value="Quay Về" onClick="history.back()">
    </div></td>
  </tr>
</table>
</form>
</body>
</html>