<?php
include('code_holiday.php');
// Set your timezone!!
date_default_timezone_set('Asia/Tokyo');
  
 //Select Data From a MySQL Database 
  $servername = "localhost";
$username = "root";
$password = "";
$dbname = "abc";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT * FROM xe";
$result = $conn->query($sql);
// query chi tra kq ve 1 lan, neu minh muon dung nhieu lan (trong vong lap for chang han) thi phai luu kq vao bien tam
$resultTemp = array();

$soluongHtml = '';
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {

    array_push($resultTemp,$row);
       // echo "id: " . $row["ngay"]. " - Name: " . $row["soluong"]. "<br>";

    }
} 
$conn->close(); //use thu vien MySQLi Object-oriented
  
////////////////////////////////////////////////////////////
  
// Get prev & next month
if (isset($_GET['ym'])) {
    $ym = $_GET['ym'];
} else {
    // This month
    $ym = date('Y-m');
}
  
// Check format
$timestamp = strtotime($ym,"-01");
if ($timestamp === false) {
    $timestamp = time();
}
  
// Today
$today = date('Y-m-j', time());
  
// For H3 title
$html_title = date('Y / m', $timestamp);
  
// Create prev & next month link     mktime(hour,minute,second,month,day,year)
$prev = date('Y-m', mktime(0, 0, 0, date('m', $timestamp)-1, 1, date('Y', $timestamp)));
$next = date('Y-m', mktime(0, 0, 0, date('m', $timestamp)+1, 1, date('Y', $timestamp)));
 $month = date('m', mktime(0, 0, 0, date('m', $timestamp)+1, 1, date('Y', $timestamp)));
// Number of days in the month
$day_count = date('t', $timestamp);
  
// 0:Mon 1:Tue 2:Wed ...
$str = date('w', mktime(0, 0, 0, date('m', $timestamp), 0, date('Y', $timestamp)));
  
  
// Create Calendar!!
$weeks = array();
$week = '';
  
// Add empty cell
$week .= str_repeat('<td></td>', $str);
  
for ( $day = 1; $day <= $day_count; $day++, $str++) {
//echo $ym.'-'.$day;
/////////////////////////// do du lieu vao o lich
$soluongHtml ='';
for($x=0;$x<count($resultTemp);$x++)
  {
   $row = $resultTemp[$x];
  if($row["ngay"]==$ym.'-'.$day)
	//$soluongHtml= '<br /> <br/> <span>'.$row["soluong"].' xe</span>';
 //add 19/06, show 〇、X、△、
 if ($row["soluong"]>2)
 {
	//$soluongHtml= '<br /> <br/> <span>'.$row["soluong"].' 台</span>';
	 $soluongHtml= '<br /> <br/> <span>'.'<font size="7">&#x25CB;</font></span>';
 }
 else if($row["soluong"]==0)
 {
	 //$soluongHtml= '<br /> <br/> <span>'.$row["soluong"].' 台</span>';
	 $soluongHtml= '<br /> <br/> <span>'.'<font size="7">&#x00D7;</font></span>';
 }
 else
 {
	 //$soluongHtml= '<br /> <br/> <span>'.$row["soluong"].' 台</span>';
	 $soluongHtml= '<br /> <br/> <br/> <span>'.'<font size="5.5">&#x25B3;</font></span>';
	 // cung size thi hinh nay to qua, cho nho size thi no ko nam thang tren 1 row
 }
  }
$holiday_datetime = new HolidayDateTime($ym.'-'.$day);
    //$holiday_datetime->holiday();
    $date = $ym.'-'.$day;
    //strlen($datetime);
    //echo  $ym.'-'.$day;
    //var_dump($holiday_datetime->holiday());
    
    //var_dump($month -1 );
    //die();
    if ($today == $date) {
        $week .= '<td class="today">'.$day;
    } 
	// if today la ngay le thi co red ko?  chua check dc, cho den ngay 17/7?
   else if ($holiday_datetime->holiday()!=false)
    {
      
      $week .= '<td class="ngayle">'.$day;
    }
    else {
        $week .= '<td>'.$day;
    }
    $week .= $soluongHtml.'</td>';
     
    // End of the week OR End of the month
    if ($str % 7 == 6 || $day == $day_count) {
         
        if($day == $day_count) {
            // Add empty cell
            $week .= str_repeat('<td></td>', 6 - ($str % 7));
        }
         
        $weeks[] = '<tr>'.$week.'</tr>';
         
        // Prepare for new week
        $week = '';
         
    }
  
}
  
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>PHP Calendar</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <link href='https://fonts.googleapis.com/css?family=Noto+Sans:400,700' rel='stylesheet' type='text/css'>
    <style>
        .container {
            font-family: 'Noto Sans', sans-serif;
            margin-top: 80px;
        }
        th {
            height: 30px;
            text-align: center;
            font-weight: 700;
        }
        td {
            height: 100px;
        }
        .today {
            background: orange;
        }
        th:nth-of-type(6),td:nth-of-type(6) {
            color: blue;
        }
        th:nth-of-type(7),td:nth-of-type(7) {
            color: red;
        }
        .ngayle{
        	color: red !important;
        }
    </style>
     
</head>
<body>
    <div class="container">
        <h3><a href="?ym=<?php echo $prev; ?>">&lt;</a> <?php echo $html_title; ?> <a href="?ym=<?php echo $next; ?>">&gt;</a></h3>
        <br>
        <table class="table table-bordered">
            <tr>
                
                <th>月</th>
                <th>火</th>
                <th>水</th>
                <th>木</th>
                <th>金</th>
                <th>土</th>
                <th>日</th>
            </tr>
            <?php
                foreach ($weeks as $week) {
                    echo $week;
                }   
            ?>
        </table>
    </div>
</body>
</html>			
<?php 

?>