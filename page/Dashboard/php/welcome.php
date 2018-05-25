<!DOCTYPE html>
<?php
include "../../../php/connection.php";

      /*$syntax = sprintf("SELECT id_usaha, nama_usaha FROM usaha WHERE email='%s'",$_SESSION["EPemilik"]);
      $id_usaha  = mysqli_query($link,$syntax);

      $syntax = sprintf("SELECT id_pegawai, nama FROM pegawai WHERE id_usaha='%s'",$id_usaha);
      $query = mysqli_query($link,$syntax);*/

      //$syntax= sprintf("SELECT id_pegawai, nama FROM pegawai WHERE id_usaha = (SELECT id_usaha FROM usaha WHERE email='%s')",$_SESSION["EPemilik"]);
      $syntax= sprintf("SELECT id_pegawai, nama FROM pegawai WHERE id_pegawai ='%s'",$_SESSION["EPegawai"]);
      $query = mysqli_query($link,$syntax);
?>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Welcome - Employees!</title>
    <link rel="stylesheet" href="../assets/css/bootstrap.css">
    <link rel="stylesheet" href="../assets/css/welcome.css">

  </head>
  <body>

    <div class="hero-image">
      <div class="hero-text">
        <h1><?php echo $_SESSION['EPegawai']; ?></h1>

        <button class="btn-primary">Log Out</button>
        <button class="btn-primary">Schedule</button>

      </div>
    </div>

  </body>
</html>
