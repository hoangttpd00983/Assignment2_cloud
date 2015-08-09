<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Đơn hàng</title>
<link rel="stylesheet" type="text/css" media="all" href="lich/calendar-win2k-cold-2.css" title="win2k-cold-1" />
<script type="text/javascript" src="lich/calendar.js"></script>

  <!-- language for the calendar -->
  <script type="text/javascript" src="lich/lang/calendar-en.js"></script>

  <!-- the following script defines the Calendar.setup helper function, which makes
       adding a calendar a matter of 1 or 2 lines of code. -->
  <script type="text/javascript" src="lich/calendar-setup.js"></script>
</head>

<body>

<form action="luuthongtindonhang.php" method="post" name="donhang">
<table width="598" cellspacing="0" cellpadding="0" style="border:thin" border="1">
  <tr>
    <td>Thời điểm đặt hàng :</td>
    <td><input type="text" name="f_date_a" id="f_date_a" /></td>
  </tr>
  <tr>
    <td>Thời điểm giao hàng :</td>
    <td><input type="text" name="f_calcdate" id="f_calcdate" /></td>
  </tr>
  <tr>
    <td>Tên người nhận :</td>
    <td><input type="text" name="tennguoinhan" id="tennguoinhan" /></td>
  </tr>
  <tr>
    <td>Địa điểm giao hàng :</td>
    <td><input type="text" name="diadiem" id="diadiem" /></td>
  </tr>
  <tr>
    <td><input name="btnmua" id="btnmua" type="submit"  value="Đặt hàng"/></td>
    <td><input name="btnhuy" id="btnhuy" type="reset" value="Làm lại" /></td>
  </tr>
</table>

</form>
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
        inputField     :    "f_calcdate",
        ifFormat       :    "%Y-%m-%d",
        showsTime      :    true,
        timeFormat     :    "24",
        onUpdate       :    catcalc
    });
</script>
</body>
</html>