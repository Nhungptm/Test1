<?php 
    mysql_connect('localhost','root','');
    mysql_select_db('ban_hang');
    mysql_query('SET NAMES "UTF8"');
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<!-- <form method="post"> -->
<form>
    <input type="hidden" name="thamso" value="search">
    <input type="text" id="kw" name="keyword" value="" style="margin-top: 10px;margin-bottom: 10px;">
    <input type="submit" value="Search" onclick="wite()">
</form>
<!-- <input type = "text" value ="<?php// echo $_POST['keyword']; ?>"> -->
<input type = "text" value ="<?php echo $_GET['keyword']; ?>"> 

<script type="text/javascript">
	function wite() {
		//var x =document.getElementById("kw").value;
		document.getElementById("kw").innerHTML="lllllllllllllllllllllllllllllllllllllll";
		//alert(x);
	}
</script>
<?php

//echo '<script type="text/javascript">alert("co bien keyword");</script>';  // alert OK
//echo '<script type="text/javascript"> document.getElementById("kw").innerHTML = "web"; </script>';  // no ko hieu id
//$get_keyword=$_GET['keyword'];
//echo '<script type="text/javascript"> document.getElementById("kw").innerHTML = "web"; </script>';
//echo '<script type="text/javascript"> document.getElementById("kw").innerHTML = "web"; </script>';
//echo "";

?>
</body>
</html>




    