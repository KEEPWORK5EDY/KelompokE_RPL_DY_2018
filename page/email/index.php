<!DOCTYPE html>
<html lang="en" dir="ltr">
     <head>
          <meta charset="utf-8">
          <title></title>
          <script src="https://code.jquery.com/jquery-3.0.0.js"></script>
          <script src="https://code.jquery.com/jquery-migrate-3.0.1.js"></script>
     </head>
     <body>
          <button type="button" name="button" style="width:100px;height:50px">ss</button>
          <input id=id type="hidden" name="" value="111">
          <input id=kode type="hidden" name="" value="222">
     </body>
     <script type="text/javascript">
          $(document).ready(function() {

               $("button").click(function(){
                    var id=document.getElementById('id').value;
                    var kode=document.getElementById('kode').value;
                    $.ajax({    //create an ajax request to display.php
                         type: "POST",
                         url: "http://localhost/KelompokE_RPL_DY_2018/page/email/confirmasi.php",
                         data:{
                              id:id,
                              kode:kode
                         },
                        success : function (data){
                                   alert(data);
                              }

                    });
               });
          });
     </script>

</html>
