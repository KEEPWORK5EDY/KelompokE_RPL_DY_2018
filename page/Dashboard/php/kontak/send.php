<?php
     include "../../../../php/connection.php";
     $id_pegawai=$_POST["id"];
     $pesan=$_POST["pesan"];
     $datetime=date("Y-m-d H:i:s");

     $syntax=sprintf("SELECT id_usaha from usaha where email='%s'",$_SESSION["EPemilik"]);
     $query=mysqli_query($link,$syntax);
     while ($data=mysqli_fetch_array($query)) {
          $id_usaha=$data["id_usaha"];
     }
     $syntaxP=sprintf("INSERT INTO pesan (id_pesan,id_usaha,id_pegawai,pesan,tgl_kirim) VAlUES (id_pesan,'%s','%s','%s','%s')",$id_usaha,$id_pegawai,$pesan,$datetime);
     $queryP=mysqli_query($link,$syntaxP);
?>
