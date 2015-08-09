	/*
	Tao object XmlHttpRequest. Vi trinh duyet IE va Mozilla ap dung ky thuat nay theo 2 cach khac nhau,
	de dam bao tinh tuong thich, chung ta se can phai kiem tra xem nguoi dung dang su dung trinh duyet nao
	va tao doi tuong XmlHttpRequest theo phuong thuc ho tro boi trinh duyet do.
	*/
	var req;
	function check_username(str) 
	{	
		// branch for native XMLHttpRequest object
		var url="account/kiemtra_tontai.php";
			url=url+"?user="+str;
		if (window.XMLHttpRequest) {
			req = new XMLHttpRequest();
			req.onreadystatechange = processReqChange_user;/* Ch? k?t qu? tr? v? */
			req.open("GET", url, true);/* k?t qu? tr? v? */
			req.send(null);
		// branch for IE/Windows ActiveX version
		} else if (window.ActiveXObject) {
			req = new ActiveXObject("Microsoft.XMLHTTP");
			if (req) {
				req.onreadystatechange = processReqChange_user;
				req.open("GET", url, true);
				req.send();
			}
		}
	}
	function check_email(str) 
	{	
		// branch for native XMLHttpRequest object
		var url="account/kiemtra_tontai.php";
			url=url+"?email="+str;
		if (window.XMLHttpRequest) {
			req = new XMLHttpRequest();
			req.onreadystatechange = processReqChange_email;/* Ch? k?t qu? tr? v? */
			req.open("GET", url, true);/* k?t qu? tr? v? */
			req.send(null);
		// branch for IE/Windows ActiveX version
		} else if (window.ActiveXObject) {
			req = new ActiveXObject("Microsoft.XMLHTTP");
			if (req) {
				req.onreadystatechange = processReqChange_email;
				req.open("GET", url, true);
				req.send();
			}
		}
	}
	
	/*
	Ham (function) processReqChange la ham chiu trach nhiem chinh xu ly viec goi du lieu va nhan du lieu.
	Cac buoc ma ham nay thuc hien:
	1. Doi cho den khi may chu gui phan hoi thong bao la no da xu ly xong
	2. Doc thong bao tu may chu (may chu se gui status=200 nen xu ly thanh cong, 404 neu file khong tim thay,...). 
	Neu may chu noi la xu ly thanh cong, tiep tuc buoc tiep theo
	3. Nhan du lieu ve duoi dang XML. Su dung DOM de phan tich du lieu XML. 
	File XML nhan ve se cung cap cac thong tin: 
		a) Ten ham goi ban dau (giua 2 the <method> va </method>)
		b) Gia tri thong bao ket qua thuc hien ham do (giua 2 the <result> va </result>)
	Biet duoc 2 thong tin tren, goi lai ham do (eval) voi gia tri tra ve de cap nhap giao dien
	Vi du, ham checkName() goi thong tin len may chu hoi, may chu tra ve ten ham la checkName va ket qua la 1. Ta se goi:
		checkName('',1);
	*/
	function processReqChange_user() 
	{
		if (req.readyState == 4) // only if req shows "complete"
		{
			if (req.status == 200) // only if "OK"
			{
				document.getElementById("tontaiuser").innerHTML=req.responseText;
			} 
			else
			{
				alert ("error");
			}
		}
	}
	function processReqChange_email() 
	{
		if (req.readyState == 4) // only if req shows "complete"
		{
			if (req.status == 200) // only if "OK"
			{
				document.getElementById("tontaiemail").innerHTML=req.responseText;
				if(req.responseText=="Email đã sử dụng!"){
					document.getElementById("email2").value = "";
				}
				
			} 
			else
			{
				alert ("error");
			}
		}
	}
	
	