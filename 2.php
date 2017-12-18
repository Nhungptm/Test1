<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Check session</title>
</head>
<body>
	<?php  
		if(isset($_SESSION['abc']))
		{
			echo "Ton tai bien session 'abc'";
			echo "<br>";
			echo "Gia tri cua bien session abc la<b>".$_SESSION['abc']."</br>";
		}
		else
		{
			echo "Khong ton tai bien session 'abc', ban chua kgai bao bien session 'abc'";
		}
	?>
</body>
</html>