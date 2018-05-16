<?php
     include "../../../php/connection.php";
     echo "ssss";
     if (isset($_POST["Save"])){
          /*$nama=$_POST["nama"];
          $id_pegawai= $_POST["id_pegawai"];
          $password= $_POST["password"];

          //$syntax = sprintf("INSERT INTO pegawai VALUES('%s','%s','%s','%s')","4",$id_pegawai,$nama,$password);
          //$query= mysqli_query($link,$syntax);
          echo $_POST["id_pegawai"];
          echo $_POST["nama"];
          echo $_POST["password"];
          *///echo $_POST["value"];
          $nama= htmlentities(strip_tags($_POST["nama"]));
          echo "string is";
     }else {
          echo "string";
     }
?>
