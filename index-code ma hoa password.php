
 <html>
    <head>
        <meta charset="UTF-8">
        <title>Tạo mật mã</title>
    </head>
    <body>
        <?php 
            $c="12345678";
            $mat_khau=md5($c);
            $mat_khau=md5($mat_khau);
            echo $mat_khau."<hr>";
        ?>
    </body>
</html>    
      