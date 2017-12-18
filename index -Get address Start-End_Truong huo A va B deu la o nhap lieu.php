<html xmlns="http://www.w3.org/1999/xhtml">
<head id="Head1" runat="server">
    <title> Directions</title>
    <script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?key=AIzaSyAGPTl_3MXajsmCVTJd2Ynw1bkODnqKXPc&sensor=false&libraries=places"></script>
<script type="text/javascript">
    var source, destination;
    var directionsDisplay;
    var directionsService = new google.maps.DirectionsService();
    google.maps.event.addDomListener(window, 'load', function () {
        debugger;
        new google.maps.places.SearchBox(document.getElementById('txtSource'));
        new google.maps.places.SearchBox(document.getElementById('txtDestination'));
        directionsDisplay = new google.maps.DirectionsRenderer({ 'draggable': true });   // khai bao muon dung Google Map kieu nao
    });

    function GetRoute() {     // route la lo trinh
        var mumbai = new google.maps.LatLng(18.9750, 72.8258);
        var mapOptions = {
            zoom: 7,
            center: mumbai,
            durationInTraffic: true
        };
        map = new google.maps.Map(document.getElementById('dvMap'), mapOptions);
        directionsDisplay.setMap(map);
        directionsDisplay.setPanel(document.getElementById('dvPanel'));

        //*********DIRECTIONS AND ROUTE**********************//
        source = document.getElementById("txtSource").value;
        destination = document.getElementById("txtDestination").value;

        var request = {
            origin: source,
            destination: destination,
            //travelMode: google.maps.TravelMode.DRIVING
            travelMode: google.maps.TravelMode.WALKING
        };
        directionsService.route(request, function (response, status) {
            if (status == google.maps.DirectionsStatus.OK) {
                directionsDisplay.setDirections(response);
          google.maps.event.addListener(directionsDisplay, 'directions_changed', function() {
        var directions = directionsDisplay.getDirections();  // cai nay quan trong: khai bao mang de hung cac thong tin chi duong cua google map
        //console.log(directions); lenh debug nay show ra giá trị của tất cả các loại dữ liệu như number, integer, array, object
      
      
        // Display the distance:
     //    document.getElementById('distance').value =
//           directions.routes[0].legs[0].distance.value + " meters";
//         // Display the duration:
//         document.getElementById('duration').value =
//           directions.routes[0].legs[0].duration.value + " seconds";
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
           // lay kinh do vi do diem xuat phat: lay legs tai vi tri thu 0   
         document.getElementById('address').value = directions.routes[0].legs[0].start_location.lng();      // kinh do start
         var a1=document.getElementById('address').value;
         document.getElementById('address').value = directions.routes[0].legs[0].start_location.lat();       // vi do start
         var a2=document.getElementById('address').value;  
          // lay kinh do vi do diem ket thuc: lay legs tai vi tri thu length-1
         document.getElementById('address').value = directions.routes[0].legs[directions.routes[0].legs.length-1].end_location.lng();      // kinh do end
         var a3=document.getElementById('address').value;
         document.getElementById('address').value = directions.routes[0].legs[directions.routes[0].legs.length-1].end_location.lat();      // vi do end
         var a4=document.getElementById('address').value;
          // lay dia chi satrt va end
         document.getElementById('address').value = directions.routes[0].legs[0].start_address;
         var a5=document.getElementById('address').value;  
         document.getElementById('address').value = directions.routes[0].legs[directions.routes[0].legs.length-1].end_address;
         var a6=document.getElementById('address').value;         
          
        /* document.getElementById("address").innerHTML= "Start Longitude (Kinh do diem xuat phat): "+a1+ "</br>";
         document.getElementById("address").innerHTML+="Start Latitude (Vi do diem xuat phat): "+a2+"</br>";
         document.getElementById("address").innerHTML+= "End Longitude (Kinh do diem ket thuc): "+a3+ "</br>";
         document.getElementById("address").innerHTML+="End Latitude (Vi do diem ket thuc): "+a4+"</br>";*/
         //document.getElementById("address").innerHTML+= "Start address: "+a5+ "</br>";
         document.getElementById("address").innerHTML= "Start address: "+a5+ "</br>";
         document.getElementById("address").innerHTML+="End address: "+a6+ "</br>";
        
      })           
            }
        });

        //*********DISTANCE AND DURATION**********************//
        var service = new google.maps.DistanceMatrixService();
        service.getDistanceMatrix({
            origins: [source],
            destinations: [destination],
            //travelMode: google.maps.TravelMode.DRIVING,
             travelMode: google.maps.TravelMode.WALKING,
            unitSystem: google.maps.UnitSystem.METRIC,
            avoidHighways: true,
            avoidTolls: true
        }, function (response, status) {
            debugger;
            if (status == google.maps.DistanceMatrixStatus.OK && response.rows[0].elements[0].status != "ZERO_RESULTS") {
               // var distance = response.rows[0].elements[0].distance.text;
               // var duration = response.rows[0].elements[0].duration.text;
              //var dvDistance = document.getElementById("dvDistance");   // khoang cach di bang 車
            //dvDistance.innerHTML = "";
               // dvDistance.innerHTML += "Distance: " + source + "<br />";     // khoang cach
                //dvDistance.innerHTML += "Duration:" + destination;          // thoi luong

            } else {
                alert("Unable to find the distance via road.");
            }
        });
         /////////////get start address and end address///////////
      /* var directionsDisplay=new google.maps.DirectionsRenderer(rendererOptions);
        var result = directionsDisplay.getDirections();
         var start=result.routes[0].legs[0].start_address;
        var end=result.routes[0].legs[result.routes[0].legs.length-1].end_ad‌​dress;*/

        //document.getElementById("address").innerHTML= "Start address: "+ ""+ "</br>";
        //document.getElementById("address").innerHTML+="End address: "+ "";
        
        /*var dvDistance = document.getElementById("address");   // khoang cach di bang 車
            dvDistance.innerHTML = "";
            dvDistance.innerHTML += "Distance: " + "" + "<br />";     // khoang cach
            dvDistance.innerHTML += "Duration:" + "";  */
    }
</script>
</head>
<body>
    <form id="form1" runat="server">
    <div>
    <table border="0" cellpadding="0" cellspacing="3">
<tr>
    <td colspan="2">
        From:
        <input type="text" id="txtSource" value="日本東京都" style="width: 200px" />
        &nbsp; To:
        <input type="text" id="txtDestination" value="日本埼玉県" style="width: 200px" />
        <br />
        <input type="button" value="検索" onclick="GetRoute()" />
        <hr />
    </td>
</tr>
<tr>
    <td colspan="2">
       <!--  <div id="dvDistance"> -->
        <div id ="address">
        

        </div>
    </td>
</tr>
<tr>
    <td>
        <div id="dvMap" style="width: 700px; height: 500px">
        </div>
    </td>
    <td>
<!--         <div id="dvPanel" style="width: 500px; height: 500px">
 -->        </div>
    </td>
</tr>
</table>
    </div>
    </form>
</body>
</html>