<html>
<head>
	<title>Đăng ký thành viên</title>
    <script language="javascript" src="scripts.js"></script>
	<script>
	function kiemtra()
	{		
		if(document.formdk.ten.value=="")
		{
			alert('Tài khoản không được bỏ trống!');
			return;
		}
		if (document.formdk.ten.value.length < 6 || document.formdk.ten.value.length > 20)
		{
			alert('Tài khoản phải có từ 6 đến 20 ký tự!');
			return;
		}
			
		if (document.formdk.matkhau.value == "")
		{
			alert('Mật khẩu không được bỏ trống!');
			return;
		}
		if (document.formdk.matkhau.value.length < 6 || document.formdk.matkhau.value.length > 15)
		{
			alert('Mật khẩu phải có từ 6 đến 15 ký tự');
			return;
		}
		
		if (document.formdk.matkhau.value != document.formdk.rematkhau.value)
		{
			alert('Nhập lại mật khẩu không đúng!');
			return;
		}
		
		if ( document.formdk.email.value =="")
		{
			alert('Vui lòng nhập vào email!');
			return;
		}
	
		if (document.formdk.email.value != document.formdk.checkemail.value)
		{
			alert('Nhập lại email không đúng!');
			return;
		}
		
		if(document.formdk.hoten.value=="")
		{
			alert('Vui lòng cho biết tên của bạn!');
			return;
		}
		if(document.formdk.phone.value=="")
		{
			alert('Vui lòng cho biết sô điện thoại của bạn !');
			return;
		}
		if(document.formdk.address.value=="")
		{
			alert('Vui lòng cho biết địa chỉ của bạn !');
			return;
		}
		
		document.formdk.submit();
		
	}	
	</script>
 <style>
 .id{
	 width:598px;
	 float:left;
	 border:solid 1px #666;
	 }
#dangki
{
	border:solid 1px #666;
	width: 598px;
	margin-top: 0px;
	margin-right: auto;
	margin-bottom: 0px;
	margin-left: auto;
	overflow: auto;
	float:left;
	color:#436451;
}
  </style>
</head>

<body>
<div id="dangki">
	<form id="formdk" name="formdk" method="post" action="luudangki.php">
	<table border = "0" cellspacing = "0" cellpadding = "5" width = "598px">
		<tr>
			<td colspan = "2" align = "left" style = "background-color:#FF9; color:#000;">
			Hãy đăng ký làm thành viên để mua hàng nhé
			</td>
		</tr>
		<tr>
			<td colspan = "2" style = "background-color:#CCC;">
			Điền đầy đủ thông tin bên dưới
			</td>
	  </tr>
		<tr>
			<td valign = "top" width = "150">
				<label for = "user">Tài khoản:</label>
			</td>
			<td>
				<input type = "text" name = "ten" id = "ten" size = "40" onBlur="loadXMLDoc(this.value)"/> <!-- onBlur="loadXMLDoc(document.formdk.ten.value)" -->
                <div id="UserName"></div>
				<h5 style = "color:#A9A9A9;">
				Tài khoản của bạn cũng sẽ chính là tên được hiển thị trên website.<br>
				Chú ý: Tài khoản phải có từ 6~20 ký tự và không có ký tự đặc biệt, khoảng trắng.
				</h5>
			</td>
		</tr>
		<tr>
			<td valign = "top" >
				<label for = "pass">Mật khẩu:</label><br>
				<label for = "repass">Nhập lại mật khẩu:</label>
			</td>
			<td>
				<input type = "password" name = "matkhau" id = "matkhau" size = "40"/><br>
				<input type = "password" name = "rematkhau" id = "rematkhau" size = "40"/>
				<h5 style = "color:#A9A9A9;">Chú ý: mật khẩu của bạn chỉ được tối đa 6~15 ký tự.</h5>
			</td>
		</tr>
		<tr>
			<td valign = "top" >
				<label for = "email">Địa chỉ email:</label><br>
				<label for = "checkemail">Nhập lại email:</label>
			</td>
			<td>
				<input type = "text" name = "email" id = "email" size = "40" /><br>
				<input type = "text" name = "checkemail" id = "checkemail" size = "40" />
				<h5 style = "color:#A9A9A9;">Hãy điền đúng địa chỉ email của bạn. Email của bạn sẽ dùng cho việc liên
				lạc giữa admin và bạn khi cần thiết hoặc khi bạn quên mật khẩu.
			</td>
		</tr>
		<tr>
			<td colspan = "2" style = "background-color:#CCC;">
			Thông tin cá nhân
			</td>
		</tr>
		<tr>
			<td valign = "top">
				<label for = "name"> Họ và tên:</label>
			</td>
			<td>
				<input type = "text" id = "hoten" name = "hoten" size = "40" /><br>
				<h5 style = "color:#A9A9A9;">Xin cho biết họ tên đầy đủ của bạn</h5>
			</td>
		</tr>
		<tr>
			<td valign = "top" >
				<label for = "sex">Giới tính:</label>
			</td>
		
			<td><select name = "sex">
				<option>Nam</option>
				<option>Nữ</option>
				<option>Không tiết lộ giới tính</option>
				</select>
				<h5 style = "color:#A9A9A9;">Xin cho biết giới tính</h5>
			</td>
		</tr>
		<tr>
			<td valign = "top">
				<label for = "dob">Ngày, tháng, năm sinh:</label>
			</td>
			<td>
				<select name = "day" id = "day">
					<script>
						for ( i = 1; i <= 31; i++)
						{
							document.writeln('<option>'+i+'</option>')
						}
					</script>
				</select>
				<select name = "month" id = "month">
					<script>
						for ( i = 1; i <=12; i++)
						{
							document.writeln('<option>'+i+'</option>')
						}
					</script>
				</select>
				<select name = "year" id = "year">
					<option>1900</option>
					<script>
						for ( i = 1901; i <= 2012; i++)
						{
							document.writeln('<option>'+i+'</option>')
						}
					</script>
				</select>
				<h5 style = "color:#A9A9A9;">Xin cho biết ngày, tháng, năm sinh chính xác</h5>
			</td>
		</tr>
		<tr>
			<td valign = "top">
				<label for = "phone">Điện thoại:</label><br>
				<label for = "address">Địa chỉ:</label>
			</td>
			<td>
				<input type = "text" name = "phone" id = "phone" size = "10" maxlength = "11"/><br>
				<input type = "text" name = "address" id = "address" size = "10" />
			</td>
		</tr>
		<tr>
			<td colspan = "2">
				<input type = "checkbox" name = "ok" value = "ok"/>
				Hiển thị thông tin cá nhân trên diễn đàn
				<br>
				<input type = "checkbox" name = "ok2" value = "ok2"/>
				Nhận thông tin từ ban điều hành diễn đàn thông qua email
			</td>
		</tr>
		<tr>
			<td colspan = "2" align = "left" style = "background-color:#FF9;color:#000;">
			Nội quy
			</td>
		</tr>
		<tr>
			<td colspan = "2" width="600">
			Bạn cần đọc và chấp nhận đồng ý theo điều khoản của diễn đàn để đăng ký.
			<br><br>
			<textarea name = "noiquy" cols = "70" rows = "5">
Quy định Diễn Đàn

Xin hãy dành vài phút để đọc các nội quy và các quy định của diễn đàn.

1) Đọc kỹ "Điều khoản và Quy Định của Diễn Đàn".
2) Dùng Tiếng Việt có dấu khi sử dụng diễn đàn.
3) Tài khoản của bạn sẽ bị xóa nếu bạn không viết bài nào và không đăng nhập trong vòng 365 ngày kể từ ngày đăng ký. 

Xin nhớ là chúng tôi không chịu trách nhiệm về bất kỳ bài viết nào đăng trong diễn đàn. Chúng tôi không đảm bảo sự chính xác, hoàn hảo hoặc hữu ích của bất kỳ bài viết nào, và không chịu trách nhiệm về nội dung của bất kỳ bài viết nào.

Các bài viết bộc lộ quan điểm của người viết bài, không nhất thiết là quan điểm của diễn đàn. Bất kỳ thành viên nào cảm thấy một bài viết có nội dung không lành mạnh thì xin hãy thông báo cho chúng tôi biết bằng email. Chúng tôi có khả năng xóa bài viết có nội dung không lành mạnh và chúng tôi sẽ cố gắng để làm như thế trong thời gian sớm nhất nếu chúng tôi xét thấy việc xóa bài viết là cần thiết. 
			</textarea>
			<br>
			<input type = "checkbox" name = "agree" value = "agree"/>
			Tôi đã đọc và đồng ý với các quy định trên
			</td>
		</tr>
        <tr>
        <td>
                <label>
          <img src="captcha.php" id="captcha" /><br />
          <br/>
        
        
        <!-- CHANGE TEXT LINK -->
        <a href="#" onClick="
            document.getElementById('captcha').src='captcha.php?'+Math.random();
            document.getElementById('captcha-form').focus();"
            id="change-image">Nhan vao day de thay doi, neu nhu ban khong nhin thay duoc chuoi ky tu nay</a><br/>
          <input type="text" name="captcha" id="captcha" />
        
          		</label>
        </td>
        </tr>
	</table>
	<center>
	  <input type = "button" id = "dangky" name = "dangky" value = "Đăng ký" onClick="kiemtra()" disabled="disabled"/>
		<input type = "reset" value = "Hủy bỏ tất cả" />
	</center>
	</form>
   </div>
   
</body>
</html>