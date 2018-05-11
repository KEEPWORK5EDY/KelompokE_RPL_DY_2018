<?php
include "../../../php/connection.php";

      /*$syntax = sprintf("SELECT id_usaha, nama_usaha FROM usaha WHERE email='%s'",$_SESSION["EPemilik"]);
      $id_usaha  = mysqli_query($link,$syntax);

      $syntax = sprintf("SELECT id_pegawai, nama FROM pegawai WHERE id_usaha='%s'",$id_usaha);
      $query = mysqli_query($link,$syntax);*/

      $syntax= sprintf("SELECT id_pegawai, nama FROM pegawai WHERE id_usaha = (SELECT id_usaha FROM usaha WHERE email='%s')",$_SESSION["EPemilik"]);
      $query = mysqli_query($link,$syntax);
?>
     <!--Bootstrap core CSS-->
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

<!-- **********************************************************************************************************************************************************
             MAIN CONTENT
             *********************************************************************************************************************************************************** -->
             <!--main content start-->
      <section id="main-content">
          <section class="wrapper">

              <div class="col-lg-12 row">
                  <div class="main-chart">
                    <div class="well">
                       <h4>Shift 1</h4>

                        <div class="centere">
                          <div class="centere-profile">
                            <a  href="profile.html"><img src="../src/download.png" class="img-logo" width="60"></a>
                            <div class="centere-name">
                              <a href="profile.html">Yuda</a>
                            </div>
                          </div>

                          <div class="centere-profile">
                            <a  href="profile.html"><img src="../src/download.png" class="img-logo" width="60"></a>
                            <div class="centere-name">
                              <a href="profile.html">Mimi</a>
                            </div>
                          </div>
                        </div>

                    </div>
                  <div class="main-chart">
                    <div class="well">
                       <h4>Shift 2</h4>

                        <div class="centere">
                          <div class="centere-profile">
                            <a  href="profile.html"><img src="../src/download.png" class="img-logo" width="60"></a>
                            <div class="centere-name">
                              <a href="profile.html">Amel</a>
                            </div>
                          </div>
                          <div class="centere-profile">
                            <a  href="profile.html"><img src="../src/download.png" class="img-logo" width="60"></a>
                            <div class="centere-name">
                              <a href="profile.html">Amel</a>
                            </div>
                          </div>
                          <div class="centere-profile">
                            <a  href="profile.html"><img src="../src/download.png" class="img-logo" width="60"></a>
                            <div class="centere-name">
                              <a href="profile.html">Amel</a>
                            </div>
                          </div>

                          <div class="centere-profile">
                            <a  href="profile.html"><img src="../src/download.png" class="img-logo" width="60"></a>
                            <div class="centere-name">
                              <a href="profile.html">Gilang</a>
                            </div>
                          </div>

                          <div class="centere-profile">
                            <a  href="profile.html"><img src="../src/download.png" class="img-logo" width="60"></a>
                            <div class="centere-name">
                              <a href="profile.html">Putri</a>
                            </div>
                          </div>
                        </div>

                    </div>
                    <div class="main-chart">
                    <div class="well">
                       <h4>Shift 3</h4>

                       <div class="centere">
                          <div class="centere-profile">
                            <a  href="profile.html"><img src="../src/download.png" class="img-logo" width="60"></a>
                            <div class="centere-name">
                              <a href="profile.html">Aditya</a>
                            </div>
                          </div>

                          <div class="centere-profile">
                            <a  href="profile.html"><img src="../src/download.png" class="img-logo" width="60"></a>
                            <div class="centere-name">
                              <a href="profile.html">Zikri</a>
                            </div>
                          </div>
                        </div>
                    </div>

                    </div><!-- /row mt -->
              </div><!--/row -->
          </section>
      </section>
