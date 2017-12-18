 <?php
     $ninzu=8;
     if($ninzu <= 3)
     {
      echo "aaaaaaaaaaaaaaaaaaaaaaaaaa";
     }
     else if($ninzu >3 && $ninzu <=5) 
     {
       echo "bbbbbbbbbbbbbbbbbbbbbbbbbbbb";
     }
     //elseif (5 < $ninzu <= 9) 
     else if($ninzu >5 && $ninzu <=9) 
     {
       echo "cccccccccccccccccccccccccccccc";
     }
     else
     {
      echo "入力された人数が多いため、問合せフォームからお問合わせください。";
     }
      
     ?>