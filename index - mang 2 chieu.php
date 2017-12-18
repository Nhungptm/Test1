<?php

//1. Xuat thu cong 1 table co 3 cot, 3 dong, dien vao thu tu tu 1 den 9
/* echo "<table>";
	echo "<tr>";
		echo "<td>";
			echo "1";
		echo "</td>";
		echo "<td>";
			echo "2";
		echo "</td>";
		echo "<td>";
			echo "3";
		echo "</td>";
	echo "</tr>";
	echo "<tr>";
		echo "<td>";
			echo "4";
		echo "</td>";
		echo "<td>";
			echo "5";
		echo "</td>";
		echo "<td>";
			echo "6";
		echo "</td>";
	echo "</tr>";	
	echo "<tr>";
		echo "<td>";
			echo "7";
		echo "</td>";
		echo "<td>";
			echo "8";
		echo "</td>";
		echo "<td>";
			echo "9";
		echo "</td>";
	echo "</tr>";
echo "</table>"; */


//2. Xuat ra ket qua giong nhu tren, but lan nay se chuyen nghiep hon: do la khai bao 1 array co cac gia tri tu 1 den 9
// use for chay 3 lan de tai 3 hang <tr>, trong moi <tr>, use for chay 3 lan de tao 3 cot <td> 
// sau do viet code xuat gia tri tu mang array
//y tuong o day la: use $tmp de save gia tri $j moi khi no duyet qua 1 dong,
//dua vao gia tri nay de xuat ra cac phan tu trong array, neu ko luu thi luc na no cung chi lay a[0], a[2], a[2]
//luu y o day la ta biet troc so phan tu array nen ta set cho for <tr> chay 3 lan, truong hop ko biet so phan tu thi se giai quet ben duoi
/* $a=array(1,2,3,4,5,6,7,8,9);
//echo $a[0];
echo "<table>";
	$j=0;
	$tmp=0;
	for ($i=0;$i<3;$i++)
	{
		
		echo "<tr>";
			for($j=0; $j<3;$j++)
			{
				echo "<td>";
					echo $a[$j+$tmp];
				echo "</td>";
				//echo $tmp;
			}
			$tmp=$tmp+$j;
			//echo $tmp;
		echo "</tr>";
		
	}
echo "</table>"; */


//3. luu y o phan 2 la ta biet troc so phan tu array nen ta set cho for <tr> chay 3 lan, truong hop ko biet so phan tu thi se giai quet nhu sau:
$a=array(1,2,3,4,5,6,7,8,9,10,11);
//echo $a[0];
$cnt= count($a);
echo "<table>";
	$j=0;
	$tmp=0;
	$i=0;
	//while ($i<$cnt)  // while array con data
	foreach ($a as $key =>$value)	
	{
		
		echo "<tr>";
			for($j=0; $j<3;$j++)
			{
				
				echo "<td>";
					echo $a[$j+$tmp];      // ra kq but ko hieu phan ben gioi
					
					//echo $value;
				echo "</td>";
				//echo $tmp;
			}
			$tmp=$tmp+$j;
			//echo $tmp;
		echo "</tr>";
		//$i++;
	}
echo "</table>";
?>