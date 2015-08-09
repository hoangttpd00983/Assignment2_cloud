$(document).ready(function(){
////////////////////////////function an hien nút top va menu túy vào vị trí cua trang web////////////////////////////
	if( $(window).scrollTop() == 0 ) {
		$('#go_top').stop(false,true).fadeOut(600);
		$('#navigationMenu').stop(false,true).fadeOut(600);
	}
	$(window).scroll(function() {
		if( $(window).scrollTop() == 0 ) {
			$('#go_top').stop(false,true).fadeOut(600);
			$('#navigationMenu').stop(false,true).fadeOut(600);
		}else if( $(window).scrollTop() > 300 ){
			$('#go_top').stop(false,true).fadeIn(600);
			$('#navigationMenu').stop(false,true).fadeIn(600);
		}
	});
	
////////////////////////////function luu lai vi tri cu sau khi load lai trang////////////////////////////
	if($.session("position")>0) $(window).scrollTop($.session("position"));
	$(window).scroll(function() {
	   var position = $(document).scrollTop();
	   if(position < 570){$.session("position", position);}
	});
	
////////////////////////////function an hien muc quang cao////////////////////////////
	$(".quangcao").click(function() {
		$("#hien").slideToggle(1000);
	});
	
////////////////////////////function nut cuon len top////////////////////////////
	$('#go_top').click(function(){
		$('body,html').animate({scrollTop:0},400);
		return false;
	})
		
////////////////////////////function de hiển thi tooltip san pham////////////////////////////
    $('#hienthi_small>div>#view').hover(function(){
        $(this).parent().find('div.info').show()
    },function(){
        $(this).parent().find('div.info').hide()
    }).mousemove(function(e){
        var $X=e.clientX
        var $Y=e.clientY
        $(this).parent().find('div.info').css({'left':$X+20,'top':$Y})
    })
	
////////////////////////////colorbox cho login////////////////////////////
	$(".inline").colorbox({inline:true, width:"377px", height:"410px"});
	
////////////////////////////colorbox cho signup////////////////////////////
	$(".inline2").colorbox({inline:true, width:"733px", height:"525px"});
	
////////////////////////////colorbox cho dieukhoan signup////////////////////////////
	$(".inline3").colorbox({inline:true, width:"733px", height:"630px"});
	
////////////////////////////colorbox cho phong to hinh anh ////////////////////////////
	$(".group").colorbox({photo:'group'});
})

///////////////////// FUNCTION DOI MAU TABLE/////////////////////////////////
function altRows(id){
	if(document.getElementsByTagName){  
		
		var table = document.getElementById(id);  
		var rows = table.getElementsByTagName("tr"); 
		 
		for(i = 0; i < rows.length; i++){          
			if(i % 2 == 0){
				rows[i].className = "evenrowcolor";
			}else{
				rows[i].className = "oddrowcolor";
			}      
		}
	}
}

window.onload=function(){
	altRows('alternatecolor');
}

///////////////////// FUNCTION KIEM TRA NHẬP SỐ/////////////////////////////////
function CheckNumber(number)
{
	var pattern = "1234567890.";
	var len = number.value.length;
	if (len != 0)
	{
		var index = 0;
		
		while ((index < len) && (len != 0))
			if (pattern.indexOf(number.value.charAt(index)) == -1)
			{
				if (index == len-1)
					number.value = number.value.substring(0, len-1);
				else if (index == 0)
					 	number.value = number.value.substring(1, len);
					 else number.value = number.value.substring(0, index)+number.value.substring(index+1, len);
				index = 0;
				len = number.value.length;
			}
			else index++;
	}
}

///////////////////// FUNCTION ĐỔI THÔNG TIN/////////////////////////////////
function doipass()
{
	document.thaydoi.thongso.value = 1;
	document.thaydoi.submit();
	
}

function doiinfo()
{
	document.thaydoi.thongso.value = 2;
	document.thaydoi.submit();
}
function cancel()
{
	document.thaydoi.thongso.value = 0;
	document.thaydoi.submit();
}

///////////////////// FUNCTION HIỆN ĐĂNG KÝ/////////////////////////////////
function hiendangky()
{
	if(document.dangky.check.checked == true)
	{
		document.dangky.button.disabled = false;
		if(document.dangky.username.value=="")
		{
			alert("Nhập lại user!");
			document.dangky.check.checked = false;
			document.dangky.button.disabled = true;
			document.dangky.username.focus();
			return;
		}
		if(document.dangky.pass.value=="")
		{
			alert("Nhập lại password!");
			document.dangky.check.checked = false;
			document.dangky.button.disabled = true;
			document.dangky.pass.focus();
			return;
		}
		if(document.dangky.pass.value!= document.dangky.repass.value)
		{
			alert("Không trùng password!");
			document.dangky.check.checked = false;
			document.dangky.button.disabled = true;
			document.dangky.repass.focus();
			return;
		}
		var email = document.getElementById('email2');
	    var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
	    if (!filter.test(email.value))
	    {
		   alert('Sai email');
		   document.dangky.check.checked = false;
		   document.dangky.button.disabled = true;
		   document.dangky.email.focus();
	    return;
	    }
	}
	else
	{
		document.dangky.button.disabled = true;
	}
	
}
///////////////////// FUNCTION KIỂM TRA CHANGE PASS/////////////////////////////////
function kiemtra_changepass()
{
	if(document.changepass.oldpass.value == "")
	{
		alert('Chưa nhập mật khẩu cũ');
		document.changepass.oldpass.focus();
		return;
	}
	if(document.changepass.newpass.value == "")
	{
		alert('Chưa nhập mật khẩu mới');
		document.changepass.newpass.focus();
		return;
	}
	if(document.changepass.repass.value == "")
	{
		alert('Chưa xác nhận mật khẩu');
		document.changepass.repass.focus();
		return;
	}
	document.changepass.submit();
}
///////////////////// FUNCTION ĐỔI NGÔN NGŨ/////////////////////////////////
function chuyenngonngu(lang) 
{
	document.cookie="lang="+lang;
	window.location.reload();
}
