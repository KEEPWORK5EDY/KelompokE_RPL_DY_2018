<?php
     include "../../../../php/connection.php";

     $id_shift = $_POST["id_shift"];

     $syntax=sprintf("DELETE from shift where id_usaha=(select id_usaha from usaha where email='%s') and id_shift='%s'",$_SESSION["EPemilik"],$id_shift);
     $query=mysqli_query($link,$syntax);
     if($query){
          echo "success";
     }else {
          echo "failed";
     }
?>
