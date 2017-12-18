<?php
$trading_id = "toursjpncom00002";
$id = "20000";
$seq_merchant_id = "36973";
$hash_key = "OvZmJbx6lIDj6bPY";

// create hash hex string
$org_str = $trading_id .         
          $id .          
          $seq_merchant_id .          
          $hash_key;
$hash_str = hash("sha256", $org_str);

// create random string
$rand_str = "";
$rand_char = array('a','b','c','d','e','f','A','B','C','D','E','F','0','1','2','3','4','5','6','7','8','9');
for($i=0; ($i<20 && rand(1,10) != 10); $i++){
  $rand_str .= $rand_char[rand(0, count($rand_char)-1)];
}

// print $hash_str . $rand_str;
$hashcode = $hash_str . $rand_str;
echo $hashcode;
?>