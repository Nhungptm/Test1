<?php
$str = 'freetuts.net is a website free for you';
  
// Mỗi khoảng trắng sẽ là một phần tử trong mảng<br />
$arr = array();
$arr = explode(' ', $str);
//var_dump(explode(' ', $str));
foreach ($arr as $a=>$b)
{    
    echo  $b."<br>";
}
// neu muon lay phan tu cu the
echo "<br><br>";
echo $arr[3];
?>
