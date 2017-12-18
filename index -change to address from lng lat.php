
<form>
  <label for="latitude">緯度</label>
  <input type="text" id="latitude" size="20" />
  <label for="longitude">経度</label>
  <input type="text" id="longitude" size="20" />
  <br>
  <label for="longitude">住所：</label>
   <input type="text" id="" size="50" />
</form>
<div id="map" style="width: 1350px; height: 500px"></div>   

<script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?key=AIzaSyBp8Mf4PJMAn8tTvU_am67VHp6mk3_RvZA&sensor=false"></script>
<script type="text/javascript">

// ページ読み込み完了時に実行する関数
function init() {

  // 初期位置
  var okayamaTheLegend = new google.maps.LatLng(35.68117901645159, 139.7672239520798);

  // マップ表示
  var okayamap = new google.maps.Map(document.getElementById("map"), {
    center: okayamaTheLegend,
    zoom:20,
    mapTypeId: google.maps.MapTypeId.ROADMAP
  });

  // ドラッグできるマーカーを表示
  var marker = new google.maps.Marker({
    position: okayamaTheLegend,
    title: "Okayama the Legend!",
    draggable: true // ドラッグ可能にする
  });
  marker.setMap(okayamap) ;

  // マーカーのドロップ（ドラッグ終了）時のイベント
  google.maps.event.addListener( marker, 'dragend', function(ev){
    // イベントの引数evの、プロパティ.latLngが緯度経度。
    document.getElementById('latitude').value = ev.latLng.lat();
    document.getElementById('longitude').value = ev.latLng.lng();
  });
}

// ONLOADイベントにセット
window.onload = init();
</script>
 