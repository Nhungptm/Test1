<!DOCTYPE html>
<html>
    <head>
       <title>Search Area</title>
        <meta charset="UTF-8">
        <meta name='viewport' content="width=device-width, initial-scale=1.0">
    </head>
    <body>
   
    
   
        <?php 
        
function CallAPI($method, $url, $data = false)
{
    $curl = curl_init();

    switch ($method)
    {
        case "POST":
            curl_setopt($curl, CURLOPT_POST, 1);

            if ($data)
                curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
            break;
        case "PUT":
            curl_setopt($curl, CURLOPT_PUT, 1);
            break;
        default:
            if ($data)
                $url = sprintf("%s?%s", $url, http_build_query($data));
    }

    // Optional Authentication:
    curl_setopt($curl, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
    curl_setopt($curl, CURLOPT_USERPWD, "username:password");

    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);

    $result = curl_exec($curl);

    curl_close($curl);

    return $result;
}


/////
        
        
        $result = '';
		if (isset($_GET['search']))
		{
		   // Bước 1: Lấy tham số
		   $diachi = isset($_GET['address']) ? $_GET['address'] : '';
			
		 
			// Bước 2: xu ly
			
		 
			if ($diachi =="")
			{
				$result = '住所を入れてください。';
				echo $result;
			}
			else 
			{
			// validate dia chi
				//$diachi= preg_replace('/\s+/', '', $diachi)."<br>";  xoa khoang trang thuc ra cung la tim kiem va thay the (tim khoang trang va thay bang '' )
				//$diachi = str_replace( ',', '', $diachi );
				//$diachi = str_replace( '、', '', $diachi );  
				//$diachi = str_replace( ' ', '', $diachi );
				//$diachi = str_replace( '　', '', $diachi );
				//DB connect
				//echo 'http://maps.googleapis.com/maps/api/geocode/json?address='.$diachi.'&sensor=true_or_false';
				 $rs= CallAPI("GET",'http://maps.googleapis.com/maps/api/geocode/json?address='.$diachi.'&sensor=true_or_false',$data=false);
			//var_dump(json_decode($rs));
				$rs=json_decode($rs);
					//var_dump($rs);
				$stt=$rs->status;
				//var_dump($stt);
   				 if ($stt=='OK')
				{ 
					

					$cnt=count($rs->results[0]->address_components);
					
					//var_dump($rs->results[0]->address_components[$cnt-1]->long_name);
					$zipcode= ($rs->results[0]->address_components[$cnt-1]->long_name);
					//echo $zipcode;
					$result = $zipcode;
					echo "郵便番号：　".$result; echo "<br>";echo "<br>";
					//include('show_google_map.php');
					}
				else {
					//$result = 'もう一度住所を入れてください。';
					$result='「サービスの対象地域ではありません」';
					echo $result;
					}
     

    }
} 

        ?>

        
        <form>
			<input type="text" style="width: 200px" name="address" value=""/>
			<input type="submit" name="search" value="検索">
		</form>
       <!-- <?php //echo $result; 
			//echo "郵便番号：　".$result; echo "<br>";echo "<br>";echo "<br>";
		
	   ?> -->
	  
	   
    </body>
</html>