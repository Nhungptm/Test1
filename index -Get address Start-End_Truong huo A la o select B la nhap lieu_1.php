<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
    <meta charset="utf-8">
    <title>Directions service</title>
    <style>
      /* Always set the map height explicitly to define the size of the div
       * element that contains the map. */
      #map {
        height: 700px;
        width: 700px;

      }
      /* Optional: Makes the sample page fill the window. */
      html, body {
        height: 100%;
        margin: 0;
        padding: 0;
      }
      #floating-panel {
        position: absolute;
        top: 10px;
        left: 25%;
        z-index: 5;
        background-color: #fff;
        padding: 5px;
        border: 1px solid #999;
        text-align: center;
        font-family: 'Roboto','sans-serif';
        line-height: 30px;
        padding-left: 10px;
      }
    </style>
  </head>
  <body>
    <!-- <div id="floating-panel"> -->
    <div>
    <b>Start: </b>
    <select id="start">
      <option value="成田空港">成田空港</option>
      <option value="東京駅">東京駅</option>
      <option value="joplin, mo">Joplin, MO</option>
      <option value="oklahoma city, ok">Oklahoma City</option>
      <option value="amarillo, tx">Amarillo</option>
      <option value="gallup, nm">Gallup, NM</option>
      <option value="flagstaff, az">Flagstaff, AZ</option>
      <option value="winona, az">Winona</option>
      <option value="kingman, az">Kingman</option>
      <option value="barstow, ca">Barstow</option>
      <option value="san bernardino, ca">San Bernardino</option>
      <option value="los angeles, ca">Los Angeles</option>
    </select>
    <b>End: </b>
    <input type="text" id="end" name="">
      
    </div>
    <br>
    <div id="map"></div>
    <script>
  /////////////
    
  //////////////
      function initMap() {
        var directionsService = new google.maps.DirectionsService;
        //var directionsDisplay = new google.maps.DirectionsRenderer;
        var directionsDisplay = new google.maps.DirectionsRenderer({ 'draggable': true });   // khai bao muon dung Google Map kieu nao
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 7,
          center: {lat: 41.85, lng: -87.65}
        });
        directionsDisplay.setMap(map);

        var onChangeHandler = function() {
          calculateAndDisplayRoute(directionsService, directionsDisplay);
        };
        document.getElementById('start').addEventListener('change', onChangeHandler);
        document.getElementById('end').addEventListener('change', onChangeHandler);
      }

      function calculateAndDisplayRoute(directionsService, directionsDisplay) {
        directionsService.route({
          origin: document.getElementById('start').value,
          destination: document.getElementById('end').value,
          travelMode: 'WALKING'
          //travelMode: 'DRIVING'
        }, function(response, status) {
          if (status === 'OK') {
            directionsDisplay.setDirections(response);
            /////////////
            google.maps.event.addListener(directionsDisplay, 'directions_changed', function() {
              var directions = directionsDisplay.getDirections();  // cai nay quan trong: khai bao mang de hung cac thong tin chi duong cua google map
        //console.log(directions); //lenh debug nay show ra giá trị của tất cả các loại dữ liệu như number, integer, array, object
         document.getElementById('address').value = directions.routes[0].legs[0].start_address;
         var a5=document.getElementById('address').value;  
         document.getElementById('address').value = directions.routes[0].legs[directions.routes[0].legs.length-1].end_address;
         var a6=document.getElementById('address').value; 

         document.getElementById("address").innerHTML= "Start address: "+a5+ "</br>";
         document.getElementById("address").innerHTML+="End address: "+a6+ "</br>";
        })   
          } else {
            window.alert('Directions request failed due to ' + status);
          }
        });
      }


    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAGPTl_3MXajsmCVTJd2Ynw1bkODnqKXPc&callback=initMap">
    </script>

     <div id ="address"> ket qua</div>
  </body>
</html>