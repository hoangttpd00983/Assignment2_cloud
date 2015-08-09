<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
<meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
<title>AK</title>
<style type="text/css">

#map_canvas {
    width:204px;
    height:150px;
    margin: auto;
}
</style>
<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false&language=vi"></script>
<script type="text/javascript">
  function initialize() {
    var myLatlng = new google.maps.LatLng(10.797647, 106.619756);
    var Options = {
      zoom: 17,
      center: myLatlng,
      mapTypeId: google.maps.MapTypeId.ROADMAP
    }
    
    
    var map = new google.maps.Map(document.getElementById("map_canvas"), Options);
    var contentString = '<div id = "content">' 
    + '<h2 class="firstHeading" id="firstHeading"><a href="http://akdigital.com">AK Digital</a></h2>'
    + '<div id="bodyContent">'
    + '<p><b>CÔNG TY TRẮCH NHIỆM HỮU HẠN TIN HỌC MINH ĐỨC</b></p<br />'
    + '<p><img src="images/google/md2.jpg" alt="AK Digitla" align="left" width="50px" height="40px" />Địa chỉ :55 TÂN QUÝ</p>'
    + '</div>'
    + '</div>';
    
    var infowindow = new google.maps.InfoWindow({
        content: contentString
    });

    var image = 'images/google/md3.JPG';
    var marker = new google.maps.Marker({
    position: myLatlng, 
    map: map,
    icon: image,
    title:"Nhat Nghe!"
    }); 
    
    google.maps.event.addListener(marker, 'click', function() {
    infowindow.open(map,marker);
    });
    
  }
</script>
</head>
<body onLoad="initialize()">
  <div id="map_canvas"></div>
</body>
</html>  