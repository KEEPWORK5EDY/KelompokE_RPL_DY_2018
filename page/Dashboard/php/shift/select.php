<?php
     include "../../../../php/connection.php";

     $id_shift = $_POST["id_shift"];
     $array = array('id_pegawai' =>array(), 'nama' => array());

     $syntax=sprintf("SELECT * FROM pegawai where id_pegawai not in (select id_pegawai from jadwal where id_shift in (select id_shift from shift where hari=(select hari from shift where id_shift='%s') AND id_shift='%s'))",$id_shift,$id_shift);
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
