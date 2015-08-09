<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link href="truycap/class.css" rel="stylesheet" type="text/css" />
<style>
#truycap1
{
	margin-bottom:10px;
	border-bottom:1px solid #999;
	border-left:1px solid #999;
	border-top:1px solid #999;
	
}
	.tableBorder
	{
		
		margin-right:5px;
	}
</style>
</head>

<body>
<div id="truycap1">
<table bgcolor="#FFFFFF" width="100%" class="tableBorder" align="center">
    <tr>
        <td colspan="2" width="150" height="28" background="images/icon/toptitle.jpg"><font color="#FFFFFF"><b>Lượt truy cập</b></font></td>
    </tr>
    <tr>
        <td colspan="2" class="label">&nbsp;</td>
    </tr>
	<tr>
            <?php
                include("truycap/a.php");
                 ?>
        </h1></td>
	</tr>
    <tr >
    	<td>
        <?php 
         displayHits();
		 ?>
        </td>
    </tr>  
    <tr>
    	<td><?php include("onlinesql.php");?></td>
    </tr>          
</table> 
</div>   
</body>
</html>