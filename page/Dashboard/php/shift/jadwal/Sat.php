<head>
     <link rel="stylesheet" href="../../../assets/css/home.css">
</head>

 <?php
      include "../../../../../php/connection.php";

      $shift=sprintf("SELECT * FROM shift WHERE id_usaha=(SELECT id_usaha FROM usaha WHERE email='%s') AND hari='Sat'",$_SESSION["EPemilik"]);
      //echo $shift;
      $queryShift = mysqli_query($link,$shift);
      $tes=1;
      if(mysqli_num_rows($queryShift)>0){
           while($jadwalShift = mysqli_fetch_array($queryShift)){
                //$tes=$jadwalShift["id_shift"];
                $syntax= sprintf("SELECT * FROM pegawai WHERE  day6='%s'",$jadwalShift["id_shift"]);
                //$syntax= sprintf(ddw"SELECT * FROM pegawai WHERE %s=1",$tes);
                $query = mysqli_query($link,$syntax);

                     if(mysqli_num_rows($query)>0){
                          echo '<div id="'.$jadwalShift["id_shift"].'">';
                          echo "<div class='main-chart'>";
                          echo "<div class='well'>";
                          echo $jadwalShift['id_shift'];
                          echo '<div class="centere">';
                          while($data = mysqli_fetch_array($query)){ ?>

                                      <div class="centere-profile">
                                        <a  href="#"><img src="../../src/download.png" class="img-logo" width="60"></a>
                                        <div class="centere-name">
                                         <a href="#">
                                              <?php    echo $data["nama"];
                                                       echo $jadwalShift['id_shift'];
                                                  ?>
                                        </a>

                                        </div>
                                      </div>
                                    <?php


                          }
                          echo "</div>";
                          echo "</div>";
                          echo "</div>";
                          echo "</div>";

                     }
                     echo "<br>";
           }
                /*echo '<div id="'.$id_shift.'">
                         <div>isi dari event abs circuit zik "'.$id_shift.'" "'.$jadwalShift["nama_shift"].'"</div>
                         <div>jadwal "'.$jadwalShift["jam_mulai"].'" "'.$jadwalShift["jam_akhir"].'"</div>
                     </div>';*/
      }
      /*echo '<div id="1">
               <div>isi dari event abs circuit zik"'.$tes.'"</div>
           </div>';*/
 ?>
