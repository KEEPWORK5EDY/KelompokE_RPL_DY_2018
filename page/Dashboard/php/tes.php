<!--Bootstrap core CSS-->
<link href="../assets/css/home.css" rel="stylesheet">
<!--external css-->
<link href="../assets/font-awesome/css/font-awesome.css" rel="stylesheet"/>


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
 <section id="main-content">
     <section class="wrapper">

         <div class="col-lg-12 row">
            <div class="main-chart">
               <div class="well">
                     <div class="centere">
<?php
include "../../../php/connection.php";

      /*$syntax = sprintf("SELECT id_usaha, nama_usaha FROM usaha WHERE email='%s'",$_SESSION["EPemilik"]);
      $id_usaha  = mysqli_query($link,$syntax);

      $syntax = sprintf("SELECT id_pegawai, nama FROM pegawai WHERE id_usaha='%s'",$id_usaha);
      $query = mysqli_query($link,$syntax);*/


           $timezone = date_default_timezone_get();
           //echo "The current server timezone is: " . $timezone;
           $date = date('m/d/Y h:i:s a', time());
           //echo "date : $date";

           $day=date('d-m-Y');
           //$d=spintf("%s",date("D",strtotime($t)));
           $day=date("D",strtotime($t));

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
           $day="Mon";
           $syntax= sprintf("SELECT * FROM pegawai WHERE %s=(SELECT id_shift FROM shift WHERE hari='%s' AND id_usaha=(SELECT id_usaha FROM usaha WHERE email='%s'))",$dayC,$day,$_SESSION["EPemilik"]);
           //$syntax= sprintf("SELECT * FROM pegawai WHERE %s=1",$tes);
           $query = mysqli_query($link,$syntax);

           ?>
                <?php
                 if(mysqli_num_rows($query)>0){?>
                      <?php
                        $no = 1;
                        while($data = mysqli_fetch_array($query)){?>
                             <div class="centere-profile">
                                    <a  href="profile.html"><img src="../src/download.png" class="img-logo" width="60"></a>
                                         <div class="centere-name">
                                             <a href="profile.html"><?php echo $data["nama"];?></a>
                                         </div>
                             </div>
                            <?php  $no++; }
                      }?>

                         </div>
                    </div>
               </div>
          </div>
     </section>
</section>
