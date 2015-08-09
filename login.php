
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>login</title>
</head>

<body>
</body>
<?php 
	include("dbcon.php");
?>
    <div style="margin:0px; padding:0px; float:left; clear:both;">
    	<?php 
			include("kiem_tra_login.php");
			if(!isset($_SESSION["UserName"]))
				include("formlogin.php");
			else
				include("user.php");
		?>
        <?php
			
		?>
   </div>
</body>
</html>