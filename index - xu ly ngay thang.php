	<?php

 // thi?t l?p timezone m?c ??nh
date_default_timezone_set('Asia/Tokyo');
//lay thoi gian hien tai theo dinh dang ngay thang
//$today = date('Y-m-d');
 $today = date('Y/m/d');
 // $today = date('Ymd');
//$today= strtotime($today);
//echo  $today ;
echo "<br>";
//lay thoi gian hien tai theo dinh dang kieu int// ? sao kq khac ham tren???
//$date_int= time();
//echo $date_int;
$date_='2017/08/04';
$date1 = new DateTime($date_);
$date2 = new DateTime($today);
$interval = $date1->diff($date2);
//echo "difference " . $interval->y . " years, " . $interval->m." months, ".$interval->d." days "; 

// shows the total amount of days (not divided into years, months and days like above)
echo "difference " . $interval->days . " days ";
echo '</br>';
echo $interval->days;
//echo date('c', time());
echo '<br>';
$date3='2014年05月09日';
 $date3 = DateTime::createFromFormat('Y年m月d日',$date3 );
echo $date3->format('Y/m/d');
echo '<br>';
echo 'ttttttttttttttttttttttttt';
echo '<br>';
$date_aaa = '2014年04月04日 (金)';
              //$date_aaa = preg_replace('/^([^()]+)\((“ú|ŒŽ|‰Î|…|–Ø|‹à|“y)\)$/i','\\1\\3',$date_aaa);
//$date_aaa= preg_replace('/( \(‹à\))|( \(“y\))|( \(“ú\))|( \(ŒŽ\))|( \(‰Î\))|( \(…\))|( \(–Ø\))/','', $date_aaa);
$date_aaa= preg_replace('/( \((日|月|火|水|木|金|土)\))/','', $date_aaa);
 //$date_aaa = preg_replace('/^([^()]+)\((“ú|ŒŽ|‰Î|…|–Ø|‹à|“y)\)$/i','\\1\\3',$date_aaa);
              //$date_aaa= trim($date_aaa);
$date_aaa = DateTime::createFromFormat('Y年m月d日',$date_aaa);
echo $date_aaa->format('Y/m/d');
              
echo '<br>';

if (strtotime($row["ngay"]) == strtotime($ngays)) //Hàm strtotime() sẽ phân tích bất kỳ chuỗi thời gian bằng tiếng anh thành một số nguyên chính là timestamp của thời gian đó.ko phan biet / va -
//   // In ng?y trong tu?n, d?ng: Monday
//   echo date("l");
//   echo "<br />";
//   
//   // in ng?y th?ng d??i ??nh d?ng: Monday 15th of August 2005 03:12:46 PM
//   echo date('l dS \of F Y h:i:s A');
//   echo "<br />";
//   
//   // in d??i ??nh d?ng: July 1, 2000 l? v?o Saturday
//   echo "July 1, 2000 l? v?o " . date("l", mktime(0, 0, 0, 7, 1, 2000));
//   echo "<br />";
//   
//   /* s? d?ng h?ng s? trong tham s? format */
//   // in ng?y th?ng d??i ??nh d?ng: Mon, 15 Aug 2005 15:12:46 UTC
//   echo date(DATE_RFC822);
//   echo "<br />";
//   
//   // in ng?y th?ng d??i ??nh d?ng: 2000-07-01T00:00:00+00:00
//   echo date(DATE_ATOM, mktime(0, 0, 0, 7, 1, 2000));
  ////////////////////////////
  $date='2017年07月31日 (月)';
        //$datee='2017A07B31C (月)';
        $date=substr($date,0,17);
        $date = DateTime::createFromFormat('Y年m月d日',$date );
        $date = $date->format('Y/m/d');
        echo $date; 



date_default_timezone_set('Asia/Tokyo');
$td = date('Y-m-d H:i:s');
$date_choose = DateTime::createFromFormat('Y-m-d H:i:s',$td );
$date_choose = $date_choose->format('Y/m/d');
echo $date_choose;
   
 ?>