<?php 
// thu tu uu tien: + - * /; Not > And > Or
// Or chi true khi co it nhat 1 gia tri true

// check so Chan hay Le (lay so do chia 2, neu so du bang 0 thi la so Chan)
/* $socancheck = 13;
$sodu = $socancheck%2;
if($sodu==0)
{
	echo 'so '.$socancheck.' la so chan';
}
else echo  'So '.$socancheck.' la so le'; */

// Check co phan nam nhuan ko? (Năm nhuận là năm chia hết cho 4 va không chia hết cho 100 or chia het cho 400)

/* $nam = 1800;
$kiem_tra = ($nam % 4 == 0 && $nam % 100 != 0 || $nam % 400 == 0);
if ($kiem_tra == true){
    echo 'Năm ' . $nam . ' Là Năm Nhuận';
} */

// nhieu if
/* $mau='mau vang';
if($mau=='mau xanh'){
	echo 'day la mau xanh';		
	}
else if($mau=='mau do'){  // elseif to onaji
	echo 'day la mau do';	
}
else if($mau=='mau vang'){
	echo 'day la mau vang';
	
}
else echo 'cac mau khac'; */

// lenh if long nhau
/* $so=81;
if($so%2==0)
{
	if($so>100){
		echo 'so chan va lon hon 100.';
	}
	
		else {
			echo 'so chan va ko lon hon 100.';
		}	
}
else echo 'so le'; */

// lenh switch cho nhieu lua chon
/* $so=21;
switch($so)
{
	case 0:
		echo 'so khong';
		break;
	case 1:
		echo 'so mot';
		break;
	case 2:
		echo 'so hai';
		break;
	default:
		echo 'khong tim thay';
		break;
	
} */

//lenh switch long nhau
/* $number=12;
$midle=null;
switch($number)
{
	case 12:
		$midle=$number%2;
		switch($midle)
		{
			case 0:
				echo 'so chan';
				break;
			default:
				echo 'so le';
				break;
		}
		break;
	default:
		break;
} */

// vong lap for long nhau
/* for ($i=1;$i<10;$i++)
{
	for($j=9;$j>=$i;$j--)
	{
		echo $j;
	}
	echo '<br/>';
} */

// vong lap for: truy xuat phan tu mang
$sinhvien = array('nguyen a','nguyen b','Nguyen c','nguyen d');
$cnt= count($sinhvien);
//echo $cnt;
for($i=0;$i<$cnt;$i++)
{
	echo $sinhvien[$i].'<br/>';
}

?>