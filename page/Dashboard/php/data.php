<?php
     include "../../../php/connection.php";

     $id=$_POST["id"];
     $nama=$_POST["name"];
     $pass=$_POST["pass"];
     $id_temp=$_POST["id_temp"];
     //$nama=$_POST["nama"];
     //$id_pegawai= $_POST["id"];
     //$password= $_POST["pass"];
     //echo "string";
     $syntax = sprintf("UPDATE pegawai set id_usaha=(SELECT id_usaha FROM usaha WHERE email='%s'), id_pegawai='%s', nama='%s' ,password='%s' WHERE id_pegawai='%s'",$_SESSION["EPemilik"],$id,$nama,$pass,$id_temp);
     //$syntax = sprintf("UPDATE pegawai set id_usaha=(SELECT id_usaha FROM usaha WHERE email='zikri'), id_pegawai='%s', nama='%s' ,password='%s' WHERE id_pegawai='%s'",$id,$nama,$pass,$id_temp);
     $query=mysqli_query($link,$syntax);
?>
