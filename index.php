<!DOCTYPE html>
<html>
    <head>
        <title>Hoc jQuery</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <script language="javascript" src="http://code.jquery.com/jquery-2.0.0.min.js"></script>
        <script language="javascript" src="js/jquery.numeric.js"></script>
        
    </head>
    <body>
       <input type="text" class="numeric right-click-paste">：数値のみ入力できます。</br>

      <input type="text" class="integer right-click-paste">：整数のみ入力できます。<br>

      <input type="text" class="positive right-click-paste">：正の数値のみ入力できます。<br>

      <input type="text" class="positive-integer right-click-paste">：正の整数のみ入力できます。

       <script type="text/javascript">

      $(".numeric").numeric();//数値

      $(".integer").numeric({ decimal: false });//整数

      $(".positive").numeric({ negative: false });//正の数値

      $(".positive-integer").numeric({ decimal: false, negative: false });//正の整数   //nhap dien thoai la type nay

      $(".right-click-paste").change(function() {$(this).keyup();});//右クリック貼り付け制御

      </script>


    </body>
</html>