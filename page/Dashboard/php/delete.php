<?php
     include "../../../php/connection.php";

     $id=$_POST["id"];

     $syntax = sprintf("DELETE FROM pegawai WHERE id_pegawai='%s' AND id_usaha=(SELECT id_usaha FROM usaha WHERE email='%s')",$id,$_SESSION["EPemilik"]);
     //$syntax = sprintf("UPDATE pegawai set id_usaha=(SELECT id_usaha FROM usaha WHERE email='zikri'), id_pegawai='%s', nama='%s' ,password='%s' WHERE id_pegawai='%s'",$id,$nama,$pass,$id_temp);
     $query=mysqli_query($link,$syntax);
?>
