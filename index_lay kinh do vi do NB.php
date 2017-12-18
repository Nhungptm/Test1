<iframe style="border: 0;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d207444.51405339845!2d139.6012979914638!3d35.6691087794075!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60188b857628235d%3A0xcdd8aef709a2b520!2z5p2x5Lqs6YO9IOadseS6rA!5e0!3m2!1sja!2sjp!4v1496987977272" width="600" height="450" frameborder="0" allowfullscreen="allowfullscreen"></iframe>
</br>
 
<button onclick="get_infor_from_address()">get data</button>
 
 

 

<!--  hien thong tin ra man hinh-cach 1, dung alert
<script>
function myFunction() {
alert("Hướng dẫn học lập trình web");
}
</script>
-->

<!--  hien thong tin ra man hinh-cach 1, dung innerHTML
<p id="demo"></p>
<script>
function myFunction() {
document.getElementById("demo").innerHTML = "Hướng dẫn học lập trình web";
}
</script> -->

<!--viet theo kieu javarscript, chua xong...
<script>
function get_infor_from_address($address = null) {
    var prepAddr = str_replace(' ', '+', $address);
    $geocode = file_get_contents('http://maps.google.com/maps/api/geocode/json?address='.$prepAddr.'&sensor=false');
    $output = json_decode($geocode);
    return $output;
  }
</script> -->



<?php
 function get_infor_from_address($address = null) {
    $prepAddr = str_replace(' ', '+', $address);
    $geocode = file_get_contents('http://maps.google.com/maps/api/geocode/json?address='.$prepAddr.'&sensor=false');
    $output = json_decode($geocode);
    return $output;
  }
 
$demo = get_infor_from_address("日本 Tōkyō");
  //print_r($demo);


$address = get_infor_from_address("日本 Tōkyō");
echo 'Vĩ độ (latitude): ' . $address->results[0]->geometry->location->lat;
echo 'Kinh độ (longitude): ' . $address->results[0]->geometry->location->lng;

?>