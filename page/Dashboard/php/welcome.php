<!DOCTYPE html>
<?php
include "../../../php/connection.php";

      /*$syntax = sprintf("SELECT id_usaha, nama_usaha FROM usaha WHERE email='%s'",$_SESSION["EPemilik"]);
      $id_usaha  = mysqli_query($link,$syntax);

      $syntax = sprintf("SELECT id_pegawai, nama FROM pegawai WHERE id_usaha='%s'",$id_usaha);
      $query = mysqli_query($link,$syntax);*/

    //$syntax= sprintf("SELECT id_pegawai, nama FROM pegawai WHERE id_usaha = (SELECT id_usaha FROM usaha WHERE email='%s')",$_SESSION["EPemilik"]);
      //$syntax= sprintf("SELECT id_pegawai, nama FROM pegawai WHERE id_pegawai ='%s'",$_SESSION["id_Pegawai"]);
      //$query = mysqli_query($link,$syntax);
?>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Welcome - Employees!</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="../assets/css/welcome.css">

  </head>
  <body>

    <div class="hero-image">
      <div class="hero-text">
        <!--<h1><?php //echo $_SESSION['id_Pegawai']; ?></h1>-->

        <button class="btn btn-danger btn-lg"> <a href="index.php">Log Out</a></button>
        <!--destroy session disini-->
        <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Jadwal</button>

      </div>
      <!-- Trigger the modal with a button -->


      <!-- Modal -->
      <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h2 class="modal-title">Jadwal</h2>
              <h5>Tanggal : 1 Juni 2018</h5>
              <!--<h5>Waktu : </h5>-->
            </div>
            <div class="modal-body">
              <table class="table table-hover">
               <thead>
                 <tr>
                   <th>Hari</th>
                   <th>Waktu</th>
                   <th>Shift</th>
                 </tr>
               </thead>
               <tbody>
                 <tr>
                   <td>Senin</td>
                   <td>08:00:00 s/d 12:00:00</td>
                   <td>Shift 1</td>
                 </tr>
                 <tr>
                   <td>Selasa</td>
                   <td>08:00:00 s/d 12:00:00</td>
                   <td>Shift 2</td>
                 </tr>
                 <tr>
                   <td>Rabu</td>
                   <td>08:00:00 s/d 12:00:00</td>
                   <td>Shift 4</td>
                 </tr>
                 <tr>
                   <td>Kamis</td>
                   <td>08:00:00 s/d 12:00:00</td>
                   <td>Shift 8</td>
                 </tr>
                 <tr>
                   <td>Jumat</td>
                   <td>08:00:00 s/d 12:00:00</td>
                   <td>Shift 10</td>
                 </tr>
                 <tr>
                   <td>Sabtu</td>
                   <td>-</td>
                   <td>-</td>
                 </tr>
                 <tr>
                   <td>Minggu</td>
                   <td>-</td>
                   <td>-</td>
                 </tr>
               </tbody>
             </table>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
          </div>
        </div>
      </div>

    </div>

  </body>
</html>
