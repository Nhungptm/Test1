<!DOCTYPE html>
<html>
    <head>
        <title>Hoc jQuery</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <script language="javascript" src="http://code.jquery.com/jquery-2.0.0.min.js"></script>
    </head>
    <body>
        <form id ="frm" action="https://www.google.co.jp">
            <input type="text" id="ip" name="">
            <input type="button" id="bt" name="" value="Btton" onclick="fct()">
        </form>
        <script language="javascript">
            function fct()
            {
               var element = $('#ip');
               alert(element.val());
                //$('#bt').prop('disabled', true);   // OK
                // $(':input[type="submit"]').prop('disabled', true);  //OK
                //$(':input[type="button"]').prop('disabled', true);  //OK
            }
           // xu ly ko can thuoc tinh onclick
        	// $('#bt').click(function(){
         //        $('#bt').prop('disabled', true);
         //    })

            //xu ly trong su kien submit form
            $('#frm').submit(function(event){
                $('#bt').prop('disabled', true);
            })

        </script>
    </body>
</html>