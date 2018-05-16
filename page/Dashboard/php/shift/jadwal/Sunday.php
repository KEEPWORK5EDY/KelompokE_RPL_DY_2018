<head>
     <link rel="stylesheet" href="../../../assets/css/home.css">
</head>

 <?php
      include "../../../../../php/connection.php";

      $shift=sprintf("SELECT * FROM shift WHERE id_usaha=(SELECT id_usaha FROM usaha WHERE email='%s') AND hari='Sunday'",$_SESSION["EPemilik"]);
      //echo $shift;
      $queryShift = mysqli_query($link,$shift);
      $tes=1;
      if(mysqli_num_rows($queryShift)>0){
          while($jadwalShift = mysqli_fetch_array($queryShift)){
              $syntaxPegawai= sprintf("SELECT * FROM pegawai WHERE id_pegawai in (select id_pegawai from jadwal where id_shift='%s')",$jadwalShift["id_shift"]);
              $queryPegawai=mysqli_query($link,$syntaxPegawai);
              echo '<div id="'.$jadwalShift["id_shift"].'">';
              echo "<div class='main-chart'>";
              echo "<div class='well'>";
              //echo $jadwalShift['id_shift'];
              echo '<div class="centere">';
              if(mysqli_num_rows($queryPegawai)>0){
                    while($dataPegawai = mysqli_fetch_array($queryPegawai)){ ?>
                         <div class="centere-profile">
                          <a  href="#"><img src="../../src/download.png" class="img-logo" width="60"></a>
                          <div class="centere-name">
                          <a href="#">
                               <?php
                                      echo $dataPegawai["nama"];
                                 ?>
                          </a>

                          </div>
                         </div>
                  <?php
                    }
              }else {
                   echo "Belum ada member";
              }
              echo "</div>";
              echo "</div>";
              echo "</div>";
              echo "</div>";
         }

  }else {
         echo "string else 1";
  }
 ?>
