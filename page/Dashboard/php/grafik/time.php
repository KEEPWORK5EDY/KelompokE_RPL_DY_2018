<?php
     include "../../../../php/connection.php";

     //$array = array('pendaftaran' =>array(), 'koordinat_y' => array(),'absensi' => array());
     $timeV=$_POST["time"];
     if($timeV=="1"){
          $syntax=sprintf("SELECT tanggal_daftar FROM pemilik WHERE email='%s'",$_SESSION['EPemilik']);
          $query=mysqli_query($link,$syntax);
          $time=array();
          while ($data=mysqli_fetch_array($query)) {
               $time[0]=$data["tanggal_daftar"];
          }
          //$pendaftaran=array("tes");
          print(json_encode($time));
     }else {
          $time=array();
          $time[0]=$timeV;
          print(json_encode($time));
     }
?>
