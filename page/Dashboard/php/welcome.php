<!DOCTYPE html>
<?php
include "../../../php/connection.php";

      /*$syntax = sprintf("SELECT id_usaha, nama_usaha FROM usaha WHERE email='%s'",$_SESSION["EPemilik"]);
      $id_usaha  = mysqli_query($link,$syntax);

      $syntax = sprintf("SELECT id_pegawai, nama FROM pegawai WHERE id_usaha='%s'",$id_usaha);
      $query = mysqli_query($link,$syntax);*/

      //$syntax= sprintf("SELECT id_pegawai, nama FROM pegawai WHERE id_usaha = (SELECT id_usaha FROM usaha WHERE email='%s')",$_SESSION["EPemilik"]);
      //$syntax= sprintf("select * from jadwal where id_shift  in (select id_shift from shift where id_usaha = (select id_usaha from usaha where email='%s')) and id_pegawai='%s'",$_SESSION["EPemilik"],$_SESSION["EPegawai"]);
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
        <h1><?php echo $_SESSION['EPegawai'];$data=1; ?></h1>

        <button id=logout class="btn btn-danger btn-lg">Log Out</button>
        <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Jadwal</button>
        <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#pesan">Pesan</button>

      </div>
      <!-- Trigger the modal with a button -->


      <!-- Modal -->
      <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h2 class="modal-title">Jadwal</h2>

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
                   <td><?php $syntax=sprintf(" select * from shift where id_shift in(select id_shift from jadwal where id_pegawai='%s') and hari='%s' and id_usaha=(select id_usaha from usaha where email='%s')",$_SESSION["EPegawai"],"monday",$_SESSION["EPemilik"]);
                              $query=mysqli_query($link,$syntax);
                              if(mysqli_num_rows($query)>0){
                                   while ($data=mysqli_fetch_array($query)) {
                                        $namas=$data["nama_shift"];
                                        echo $data["jam_mulai"]." - ".$data["jam_akhir"];
                                   }
                              }else {
                                   echo " - ";
                                   $namas=" - ";
                              }
                         ?>
                   </td>
                   <td><?php echo $namas; ?></td>
                 </tr>
                 <tr>
                   <td>Selasa</td>
                   <td><?php $syntax=sprintf(" select * from shift where id_shift in(select id_shift from jadwal where id_pegawai='%s') and hari='%s' and id_usaha=(select id_usaha from usaha where email='%s')",$_SESSION["EPegawai"],"tuesday",$_SESSION["EPemilik"]);
                              $query=mysqli_query($link,$syntax);
                              if(mysqli_num_rows($query)>0){
                                   while ($data=mysqli_fetch_array($query)) {
                                        $namase=$data["nama_shift"];
                                        echo $data["jam_mulai"]." - ".$data["jam_akhir"];
                                   }
                              }else {
                                   echo " - ";
                                   $namase =" - ";
                              }
                         ?>
                   </td>
                   <td><?php echo $namase; ?></td>
                 </tr>
                 <tr>
                   <td>Rabu</td>
                   <td><?php $syntax=sprintf(" select * from shift where id_shift in(select id_shift from jadwal where id_pegawai='%s') and hari='%s' and id_usaha=(select id_usaha from usaha where email='%s')",$_SESSION["EPegawai"],"Wednesday",$_SESSION["EPemilik"]);
                              $query=mysqli_query($link,$syntax);
                              if(mysqli_num_rows($query)>0){
                                   while ($data=mysqli_fetch_array($query)) {
                                        $namar=$data["nama_shift"];
                                        echo $data["jam_mulai"]." - ".$data["jam_akhir"];
                                   }
                              }else {
                                   echo " - ";
                                   $namar =" - ";
                              }
                         ?>
                   </td>
                   <td><?php echo $namar; ?></td>
                 </tr>
                 <tr>
                   <td>Kamis</td>
                   <td><?php $syntax=sprintf(" select * from shift where id_shift in(select id_shift from jadwal where id_pegawai='%s') and hari='%s' and id_usaha=(select id_usaha from usaha where email='%s')",$_SESSION["EPegawai"],"Thursday",$_SESSION["EPemilik"]);
                              $query=mysqli_query($link,$syntax);
                              if(mysqli_num_rows($query)>0){
                                   while ($data=mysqli_fetch_array($query)) {
                                        $namar=$data["nama_shift"];
                                        echo $data["jam_mulai"]." - ".$data["jam_akhir"];
                                   }
                              }else {
                                   echo " - ";
                                   $namar =" - ";
                              }
                         ?>
                   </td>
                   <td><?php echo $namar; ?></td>
                 </tr>
                 <tr>
                   <td>Jum'at</td>
                   <td><?php $syntax=sprintf(" select * from shift where id_shift in(select id_shift from jadwal where id_pegawai='%s') and hari='%s' and id_usaha=(select id_usaha from usaha where email='%s')",$_SESSION["EPegawai"],"Friday",$_SESSION["EPemilik"]);
                              $query=mysqli_query($link,$syntax);
                              if(mysqli_num_rows($query)>0){
                                   while ($data=mysqli_fetch_array($query)) {
                                        $namar=$data["nama_shift"];
                                        echo $data["jam_mulai"]." - ".$data["jam_akhir"];
                                   }
                              }else {
                                   echo " - ";
                                   $namar =" - ";
                              }
                         ?>
                   </td>
                   <td><?php echo $namar; ?></td>
                 </tr>
                 <tr>
                   <td>Saptu</td>
                   <td><?php $syntax=sprintf(" select * from shift where id_shift in(select id_shift from jadwal where id_pegawai='%s') and hari='%s' and id_usaha=(select id_usaha from usaha where email='%s')",$_SESSION["EPegawai"],"Saturday",$_SESSION["EPemilik"]);
                              $query=mysqli_query($link,$syntax);
                              if(mysqli_num_rows($query)>0){
                                   while ($data=mysqli_fetch_array($query)) {
                                        $namar=$data["nama_shift"];
                                        echo $data["jam_mulai"]." - ".$data["jam_akhir"];
                                   }
                              }else {
                                   echo " - ";
                                   $namar =" - ";
                              }
                         ?>
                   </td>
                   <td><?php echo $namar; ?></td>
                 </tr>
                 <tr>
                   <td>Minggu</td>
                   <td><?php $syntax=sprintf(" select * from shift where id_shift in(select id_shift from jadwal where id_pegawai='%s') and hari='%s' and id_usaha=(select id_usaha from usaha where email='%s')",$_SESSION["EPegawai"],"Sunday",$_SESSION["EPemilik"]);
                              $query=mysqli_query($link,$syntax);
                              if(mysqli_num_rows($query)>0){
                                   while ($data=mysqli_fetch_array($query)) {
                                        $namar=$data["nama_shift"];
                                        echo $data["jam_mulai"]." - ".$data["jam_akhir"];
                                   }
                              }else {
                                   echo " - ";
                                   $namar =" - ";
                              }
                         ?>
                   </td>
                   <td><?php echo $namar; ?></td>
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

      <div class="modal fade" id="pesan" role="dialog">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h4 class="modal-title"><?php echo $_SESSION["EPemilik"]; ?></h4>
            </div>
            <div class="modal-body" style="height: auto;overflow-y:auto;">
                 <?php
                    $syntax=sprintf("select * from pesan where id_pegawai='%s' and id_usaha=(select id_usaha from usaha where email='%s') order by tgl_kirim DESC",$_SESSION["EPegawai"],$_SESSION["EPemilik"]);
                    $query=mysqli_query($link,$syntax);
                    if(mysqli_num_rows($query)>0){
                    while ($data=mysqli_fetch_array($query)) {
                 ?>
                 <div class="header-pesan" style="width: 100%;border-bottom: 1px solid #e5e5e5;">

                      <h5 style="display:inline-flex;margin-right:2%;">Tanggal/Jam : </h5>
                      <h5 style="display:inline-flex;margin-right:20%;"><?php echo $data["tgl_kirim"] ?></h5>
                      <div class="">
                         <textarea name="name" rows="8" cols="80" style="margin:2% 2% 2% 0;padding: 15px;background-color:#f0f0f0;border: none;"><?php echo $data["pesan"]; ?></textarea>
                      </div>
                 </div>
            <?php }} ?>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
          </div>
        </div>
      </div>

    </div>

    <script type="text/javascript">
         $(function () {
              $("#logout").click(function() {

                   window.open("../../LoginUser/index.html","_top");
              });

              $("#pesan")
         });
    </script>
  </body>
</html>
