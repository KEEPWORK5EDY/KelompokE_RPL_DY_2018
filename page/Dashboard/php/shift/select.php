<?php
     include "../../../../php/connection.php";

     $id_shift = $_POST["id_shift"];
     $array = array('id_pegawai' =>array(), 'nama' => array());

     $syntax=sprintf("SELECT *FROM pegawai WHERE id_usaha=(SELECT id_usaha FROM usaha WHERE email='%s') AND id_pegawai NOT IN (SELECT id_pegawai FROM jadwal WHERE id_shift IN (SELECT id_shift FROM shift WHERE hari=(SELECT hari FROM shift WHERE id_shift='%s')))",$_SESSION["EPemilik"],$id_shift);
     $query=mysqli_query($link,$syntax);
     //array_push($array['id_pegawai'],0);
     //array_push($array['nama'],0);
     while($data=mysqli_fetch_array($query)){
          array_push($array['id_pegawai'],$data["id_pegawai"]);
          array_push($array['nama'],$data["nama"]);

     }
     print (json_encode($array));

     //echo $id_shift;
?>
