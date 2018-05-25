<?php
     include "../../../php/connection.php";

     $id=$_POST["id"];
     $nama=$_POST["name"];
     $pass=$_POST["pass"];
     $id_temp=$_POST["id_temp"];


     $syntaxS=sprintf("SELECT COUNT(id_pegawai) AS data FROM pegawai WHERE id_pegawai='%s' and id_usaha=(SELECT id_usaha from usaha WHERE email='%s')",$id,$_SESSION["EPemilik"]);
     $queryS= mysqli_query($link,$syntaxS);

     $data;
     while($qs = mysqli_fetch_array($queryS)){
          $data=$qs['data'];
     }
     if($data==0){
          $syntax = sprintf("UPDATE pegawai set id_usaha=(SELECT id_usaha FROM usaha WHERE email='%s'), id_pegawai='%s', nama='%s' ,password='%s' WHERE id_pegawai='%s'",$_SESSION["EPemilik"],$id,$nama,$pass,$id_temp);
          //$syntax = sprintf("UPDATE pegawai set id_usaha=(SELECT id_usaha FROM usaha WHERE email='zikri'), id_pegawai='%s', nama='%s' ,password='%s' WHERE id_pegawai='%s'",$id,$nama,$pass,$id_temp);
          $query=mysqli_query($link,$syntax);
          $advert = array(
             'status' => 'success',
             'advert' => $row['adverts'],
          );
     }else{
          $advert = array(
             'status' => 'Id '.$id. ' Telah terdaftar',
             'advert' => $row['adverts'],
          );
     }echo json_encode($advert);
?>
