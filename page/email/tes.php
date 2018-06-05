<?php
     include '../../php/connection.php';

     $email=$_SESSION["email"];

     $kode=htmlentities(strip_tags(hash('sha256', mt_rand())));
     $syntax = sprintf("INSERT INTO aktivasi(id_aktivasi,kode) VALUES ('%s','%s');",$mail,$kode);
     $query= mysqli_query($link,$syntax);
     echo $email."\n";
     echo $syntax."\n";
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
     <head>
          <meta charset="utf-8">
          <title></title>
     </head>
     <body>
          
     </body>
</html>
