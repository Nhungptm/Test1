<?php 
//Configure::write('debug', 2);
//echo'Chao ban Phan Thi My nhung ';
//note 1　dong
/*
note
nhieu
dong
*/
$sinhvien;
$sinhvien='Nguyen VAn A';

$Sinhvien='Nguyen VAn B';
// echo $sinhvien + 'and' + $Sinhvien   chua lam duoc
define('sdt','0123456789');
//echo 'sdt cua toi la: ';
//echo sdt
//echo 'sdt cua toi la: '+ sdt; //chuoi cong chuoi thi php tu dong chuyen ve 0+0    ???
$tuoi_int=12;
$tuoi_String='12';
//echo $kq=$tuoi_int+$tuoi_String;
//$check=var_dump(is_int(kq));
//echo$check
$a = 12; // Biến $a kiểu INT có giá trị = 12
$t = ($a == 12);
//$x=$a+$t;
//echo $x;
/*if($t==1)
{
	echo 'Bien T bang True';
	
}
else
{
echo 'Bien T bang False';
}*/
//$t= !$t; chu chuyen doi dc true, false
//echo $t;
class meeting {
 
    public $name = 'Thach';
 
    function hello()
    {
        return $this->name . ' saying hello';
    }
 
    function goodbye()
    {
        return $this->name . ' saying goodbye';
    }
}
$say = new meeting;
/*kiem tra 
echo '<pre>';
var_dump($say);

echo $say->name;
echo '</br>';             //ok
echo $say->name.'</br>';  //ok
echo $say->hello().'</br>';
echo $say->goodbye();
echo '</br>';
*/
$folderlist = scandir('Nettodezaiko/',1);
//print_r($folderlist);

$cnt=count($folderlist);


for($i=0;$i<$cnt-2;$i++)
{
	print_r($folderlist[$i]);
	echo '</br>';

}

?>