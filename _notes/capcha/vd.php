<?php
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<style type="text/css">
body { font-family: sans-serif; font-size: 0.8em; padding: 20px; }
#result { border: 1px solid green; width: 300px; margin: 0 0 35px 0; padding: 10px 20px; font-weight: bold; }
#change-image { font-size: 0.8em; }
</style>
</head>

<body>
<form id="form1" name="form1" method="post" action="vd_submit.php">
  <label>
  <img src="captcha.php" id="captcha" /><br />
  <br/>


<!-- CHANGE TEXT LINK -->
<a href="#" onclick="
    document.getElementById('captcha').src='captcha.php?'+Math.random();
    document.getElementById('captcha-form').focus();"
    id="change-image">Not readable? Change text.</a><br/><br/>
  <input type="text" name="captcha" id="captcha" />

  </label>
  <input type="submit" name="button" id="button" value="Submit" />
</form>
</body>
</html>
