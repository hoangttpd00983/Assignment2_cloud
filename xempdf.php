<?php
session_start();
require('library/mpdf.php');
$mpdf=new mPDF(); 
$mpdf->WriteHTML($_SESSION["str"]);
$mpdf->Output();
$_SESSION['somathang']=0;
?>

