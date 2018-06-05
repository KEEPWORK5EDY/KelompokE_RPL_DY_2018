<!--Bootstrap core CSS-->
    <link href="../assets/css/bootstrap.css" rel="stylesheet">

    <!--external css-->
    <link href="../assets/font-awesome/css/font-awesome.css" rel="stylesheet" />


    <!-- Custom styles for this template -->
    <link href="../assets/css/style.css" rel="stylesheet">
    <link href="../assets/css/style-responsive.css" rel="stylesheet">

    <script src="../assets/js/chart-master/Chart.js"></script>
    <script type="text/javascript" src="../assets/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="../assets/js/jquery-1.8.3.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.0.0.js"></script>
    <script src="https://code.jquery.com/jquery-migrate-3.0.1.js"></script>
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
     <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
     <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
     <![endif]-->
      <link rel="stylesheet" type="text/css" href="../assets/css/tampilan.css">
   <link href="../assets/css/home.css" rel="stylesheet">
<!-- **********************************************************************************************************************************************************
             MAIN CONTENT
             *********************************************************************************************************************************************************** -->
             <!--main content start-->
      <section id="main-content">
          <section class="wrapper">

              <div class="col-lg-12 row">
<?php
          include "../../../php/connection.php";
          $timezone = date_default_timezone_get();
          //echo "The current server timezone is: " . $timezone;
          $date = date('m/d/Y h:i:s a', time());
          //echo "date : $date";
          $dayD=date('Y-m-d');
          //$d=spintf("%s",date("D",strtotime($t)));
          $day=date("l");
          //$dayC="day1";
          //$day="Mon";
          //$name="zikri";
          $shift=sprintf("SELECT * FROM shift WHERE hari='%s' AND id_usaha=(SELECT id_usaha FROM usaha WHERE email='%s') ORDER BY jam_mulai DESC",$day,$_SESSION["EPemilik"]);
          //echo $shift;
          $queryShift = mysqli_query($link,$shift);

          echo "<br>";
          echo "<br>";
          echo $day;
          echo "<br>";
          if(mysqli_num_rows($queryShift)>0){

               while($jumlahSift = mysqli_fetch_array($queryShift)){
                   //echo $jumlahSift["id_usaha"];

                    $syntax=sprintf("SELECT * FROM jadwal WHERE id_shift='%s'",$jumlahSift["id_shift"]);

                    //$syntax= sprintf("SELECT * FROM pegawai WHERE %s='%s' and id_usaha='%s'",$day,$jumlahSift["id_shift"],$jumlahSift["id_usaha"]);
                    //$syntax= sprintf(ddw"SELECT * FROM pegawai WHERE %s=1",$tes);
                         $queryJadwal=mysqli_query($link,$syntax);
                         echo"Shift : ".$jumlahSift["nama_shift"]."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"." mulai :".$jumlahSift["jam_mulai"]."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"."sampai : ".$jumlahSift["jam_akhir"];
                         echo "<div class='col-lg-12 main-chart'>";
                         echo "<div class='well'>";
                         echo '<div class="container">';
                         if(mysqli_num_rows($queryJadwal)>0){
                              while($dataJadwal = mysqli_fetch_array($queryJadwal)){
                                   echo '<div class="col-sm-2">';

                                   $pegawai=sprintf("SELECT * FROM pegawai WHERE id_pegawai='%s'",$dataJadwal["id_pegawai"]);
                                   $queryPegawai=mysqli_query($link,$pegawai);
                                   $dataPegawai=mysqli_fetch_array($queryPegawai);
                                   $dateToday=date("Y-m-d");
                                   $pegawaiHadir=sprintf("SELECT * FROM absensi where id_pegawai='%s' and tanggal='%s'",$dataJadwal["id_pegawai"],$dateToday);
                                   $cekhadir=mysqli_query($link,$pegawaiHadir);
                                   $gambar="../src/skip.png";
                                   if(mysqli_num_rows($cekhadir)>0){
                                        $gambar="../src/download.png";
                                   }
                                   ?>
                                        <div class="centere-profile">
                                          <a type="button" class="btn btn-lg" data-toggle="modal" data-target="#<?php echo $dataPegawai["nama"]; ?>"><img src=<?php echo $gambar; ?> class="img-logo" width="60"></a>
                                          <div class="centere-name">
                                               <h5><?php echo $dataPegawai["nama"]; ?></h5>
                                          </div>
                                        </div>
                                        <div class="container">
                                          <!-- Modal -->
                                          <div class="modal fade" id=<?php echo $dataPegawai["nama"]; ?> role="dialog">
                                            <div class="modal-dialog modal-sm">
                                              <div class="modal-content">
                                                <div class="modal-header">
                                                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                  <h4 class="modal-title">Waktu absensi</h4>
                                                </div>
                                                <div class="modal-body">
                                                  <p><?php echo $dataPegawai["nama"]; ?></p>
                                                  <?php
                                                       if(mysqli_num_rows($cekhadir)>0){
                                                            echo" <p>Login pada pukul : $kehadiran[jam]</p>";
                                                       }else {
                                                            echo" <p>Belum Melakukan absensi</p>";
                                                       }
                                                  ?>

                                                </div>
                                                <div class="modal-footer">
                                                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                              </div>
                         <?php }
                         }else{
                              echo "Belum ada anggota yang ditambahkan";
                         }

                         echo "</div>";
                         echo "</div>";
                         echo "</div>";
                    echo "<br>";
                    }

          }
?>
          </div>
     </section>
</section>
<!-- js placed at the end of the document so the pages load faster -->
<script src="../assets/js/jquery.js"></script>
<script src="../assets/js/jquery-1.8.3.min.js"></script>
<script src="../assets/js/bootstrap.min.js"></script>
<script class="include" type="text/javascript" src="../assets/js/jquery.dcjqaccordion.2.7.js"></script>
<script src="../assets/js/jquery.scrollTo.min.js"></script>
<script src="../assets/js/jquery.nicescroll.js" type="text/javascript"></script>
<script src="../assets/js/jquery.sparkline.js"></script>
