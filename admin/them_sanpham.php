<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Thêm sản phẩm</title>
<!-- calendar stylesheet -->
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
<form action="luuthem_sanpham.php" method="post" enctype="multipart/form-data" name="f">
<!-- enctype="multipart/form-data" -->
<table width="100%" border="1" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td colspan="2"><div align="center">Thêm Sản Phẩm</div></td>
  </tr>
  
  <tr>
    <td width="100">ID Sản Phẩm</td>
    <td width="250"><input name="idsp" type="text" id="idsp"></td>
  </tr>
 
  <tr>
    <td width="100">Tên Sản Phẩm</td>
    <td width="250"><input name="tensp" type="text" id="tensp"></td>
  </tr>
  
  <tr>
    <td width="100">Loại Sản Phẩm</td>
    <td width="600">
    <select name="idloai" id="iloai" onchange="loadXMLDoc(this.value)">
    
    <!-- Loai san pham -->
<?php 
	include ("../dbcon.php");
	 $l="select * from loaisp";
	 $kql=mysql_query($l,$link);
	 while($dongl=mysql_fetch_array($kql))
  			{ 
?>
    	<option value="<?php echo $dongl["idLoai"]; ?>"> &nbsp; &nbsp; &nbsp; <?php echo $dongl["TenLoai"]; ?></option>
     		<?php } ?> 
</select>
<div id="sp" style="width:150px;"></div>
<script language="javascript">
loadXMLDoc('<?php echo $k; ?>')
</script>
			</td>
  </tr>
  
  <tr>
    <td width="100">Ngày Cập Nhật</td>
    <td width="250">
    <input type="text" name="f_date_b" id="f_date_b" />
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
    <td width="250"><input name="hinh" type="file" id="hinh"></td>
  </tr>
  
  <tr>
    <td width="100">Giá</td>
    <td width="250"><input name="gia" type="text" id="gia"></td>
  </tr>
  
  
   <tr>
    <td width="100">Mô Tả</td>
    <td width="250">

  <textarea cols="8" id="mota" name="mota" rows="5"></textarea>
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
    </div>
    </td>
  </tr>
</table>
</form>
</body>
</html>