<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<style>
.timkiem 
	{ width:100%; margin: 10px auto; clear:both;}
/*-------------FORM TIM KIEM------------*/
#timkiem
	{ font: italic bold 14px Arial;background: #fff;border-bottom: 1px solid #DDDDDD; border-bottom:1px solid #d5d5d5; padding:10px 0;}
#timkiem .left 
	{color: #444444;float: left;padding: 8px;text-transform: uppercase;}
#timkiem select,input
	{font: italic 14px Arial;; -webkit-border-radius:5px;-moz-border-radius:5px;border-radius:5px; border:1px solid #d5d5d5; padding:5px; margin:0 3px;}
</style>
</head>

<body>
<div id="timkiem">

<?php 
include ("dbcon.php");
?>
<form action="index.php?act=sanphamtim" method="post">

<!-- Khi chon chung loai san pham -->
<select name="sptim" id="sptim">
<?php 
	$cl="select * from chungloai";
	$kqcl=mysql_query($cl,$link);
	while($dcl=mysql_fetch_array($kqcl))
  		{ 
?>
    	<option <?php if(isset($_POST['cl']) && ($_POST['cl']=="cl_".$dcl["idCL"])) echo "selected" ;?> value="cl_<?php echo $dcl["idCL"];?>"> <?php echo $dcl["TenCL"];?> </option>

	<!-- Khi chon loai san pham -->     
<?php 
	 $idcl=$dcl["idCL"];
	 $l="select * from loaisp where idCL=$idcl";
	 $kql=mysql_query($l,$link);
	 while($dl=mysql_fetch_array($kql))
  			{ 
?>
    	<option <?php if(isset($_POST['cl']) && ($_POST['cl']==$dl["idLoai"])) echo "selected" ;?> value="<?php echo $dl["idLoai"]; ?>"> &nbsp; &nbsp; &nbsp; <?php echo $dl["TenLoai"]; ?></option>
     		<?php } ?> 
     	<?php } ?>
</select>

	<!--Phan TenSP-->
	<span >Tên</span> 
<input type="text" name="mota" id="mota" value="<?php if(isset($_POST['mota'])) echo $_POST['mota'];?>" placeholder="Hãy mô tả sản phẩm" />
			
    
	<!-- Gia tu ...den ....-->  
	<span > Giá từ </span>
<select name="Giadau" id="Giadau">
<?php 
	for($i=0;$i<=10;$i++)
		{
?>
	<option <?php if(isset($_POST["Giadau"]) && ($_POST["Giadau"]==$i*1000000)) echo "selected" ; ?> value="<?php echo $i*1000000;?>"><?php echo $i*1000000;?> </option>
     	<?php } ?>
</select>
     
	<span > Đến </span>
<select name="Giacuoi" id="Giacuoi">
<?php 
	for($i=10;$i<=100;$i++)
		{
?>
	 <option <?php if(isset($_POST["Giacuoi"]) && ($_POST["Giacuoi"]==$i*1000000)) echo "selected"; ?> value="<?php echo $i*1000000;?>"><?php echo $i*1000000;?> </option>
     	<?php } ?>
</select>
 
	<!-- Bam nut xem --> 
  <input type="submit" name="button" id="button" value="Xem" />
</form>
</div>
</body>
</html>