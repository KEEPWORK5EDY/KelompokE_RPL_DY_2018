<!--Bootstrap core CSS-->
    <link href="../assets/css/bootstrap.css" rel="stylesheet">
    <link href="../assets/css/home.css" rel="stylesheet">
    <!--external css-->
    <link href="../assets/font-awesome/css/font-awesome.css" rel="stylesheet" />


    <!-- Custom styles for this template -->
    <link href="../assets/css/style.css" rel="stylesheet">
    <link href="../assets/css/style-responsive.css" rel="stylesheet">

    <script src="../assets/js/chart-master/Chart.js"></script>

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->
       <link rel="stylesheet" type="text/css" href="../assets/css/tampilan.css">
       <script type="text/javascript">
                 $('.button').click(function() {

                      $.ajax({
                           type: "POST",
                           }).done(function( msg ) {
                                     abc("Mon");
                      });

                 });
       </script>
       <?php
       function abc($name){
           $day="Mon";
          }
       ?>
      <section id="main-content">
          <section class="wrapper">

              <div class="col-lg-12 row">
                   <br><br>
                   <div class="">
                        <a href="#" class="button">Mon</a>
                        <a href="#" class="button">Tue</a>
                        <a href="#">Wed</a>
                        <a href="#">Thu</a>
                   </div>
<?php
          include "../../../php/connection.php";

          $dayC=0;

          $dayData=array("Mon","Tue","Wed","Thu","Fri","Sat","Sun");
          $dayDataCol=array("day1","day2","day3","day4","day5","day6","day7");
          $loop=0;
          foreach ($dayData as $dayCol) {
               if(strcmp($day,$dayCol)==0){
                     $dayC=$dayDataCol[$loop];
               }
               $loop++;
          }

          $dayC="day1";
          //$day="Mon";
          //$name="zikri";
          $shift=sprintf("SELECT * FROM shift WHERE hari='%s' AND id_usaha=(SELECT id_usaha FROM usaha WHERE email='%s')",$day,$_SESSION["EPemilik"]);
          //echo $shift;
          $queryShift = mysqli_query($link,$shift);

          echo "<br>";
          echo "<br>";
          if(mysqli_num_rows($queryShift)>0){

               while($jumlahSift = mysqli_fetch_array($queryShift)){
                   //echo $jumlahSift["id_usaha"];



                    $syntax= sprintf("SELECT * FROM pegawai WHERE %s='%s' and id_usaha='%s'",$dayC,$jumlahSift["id_shift"],$jumlahSift["id_usaha"]);
                    //$syntax= sprintf(ddw"SELECT * FROM pegawai WHERE %s=1",$tes);
                    $query = mysqli_query($link,$syntax);
                         echo  "Shift ".$jumlahSift["id_shift"]."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"." mulai :".$jumlahSift["jam_mulai"]."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"."sampai : ".$jumlahSift["jam_akhir"];
                         if(mysqli_num_rows($query)>0){
                              echo "<div class='main-chart'>";
                              echo "<div class='well'>";

                              while($data = mysqli_fetch_array($query)){ ?>
                                        <div class="centere">
                                          <div class="centere-profile">
                                            <a  href="profile.html"><img src="../src/download.png" class="img-logo" width="60"></a>
                                            <div class="centere-name">
                                              <a href="profile.html"><?php echo $data["nama"]; ?></a>
                                            </div>
                                          </div>
                                        <?php


                              }
                              echo "</div>";
                              echo "</div>";

                         }
                    echo "</div>";
                    echo "<br>";
                    }

          }
?>

          </div>
     </section>
</section>
