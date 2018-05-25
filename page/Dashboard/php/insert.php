<?php
     //header('Content-type: application/json');
     //echo json_encode($response_array);
     //$syntax = sprintf("INSERT INTO pegawai VALUES('%s','%s','%s','%s')",$_SESSION["EPemilik"],$id_pegawai,$nama,$password);
     //$syntax = sprintf("INSERT INTO pegawai( id_usaha,id_pegawai,nama,password) SELECT id_usaha,'%s','%s','%s' from usaha where email='%s' and %s=(%s)",$id_pegawai,$nama,$password,$_SESSION["EPemilik"],$row,$syntaxS);

     include "../../../php/connection.php";
          $nama=$_POST["id"];
          $id_pegawai= $_POST["name"];
          $password= $_POST["pass"];

          $syntaxS=sprintf("SELECT COUNT(id_pegawai) AS data FROM pegawai WHERE id_pegawai='%s' and id_usaha=(SELECT id_usaha from usaha WHERE email='%s')",$id_pegawai,$_SESSION["EPemilik"]);
          $queryS= mysqli_query($link,$syntaxS);

          $data;
          while($qs = mysqli_fetch_array($queryS)){
               $data=$qs['data'];
          }
          if($data==0){
               $syntax = sprintf("INSERT INTO pegawai( id_usaha,id_pegawai,nama,password) SELECT id_usaha,'%s','%s','%s' from usaha where email='%s'",$id_pegawai,$nama,$password,$_SESSION["EPemilik"]);
               $query= mysqli_query($link,$syntax);
               $advert = array(
                  'status' => 'success',
                  'advert' => $row['adverts'],
               );
          }else{
               $advert = array(
                  'status' => 'Id Telah terdaftar',
                  'advert' => $row['adverts'],
               );
          }echo json_encode($advert);
?>
