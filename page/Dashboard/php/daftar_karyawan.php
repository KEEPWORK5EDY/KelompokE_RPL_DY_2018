<?php
include "../../../php/connection.php";

      /*$syntax = sprintf("SELECT id_usaha, nama_usaha FROM usaha WHERE email='%s'",$_SESSION["EPemilik"]);
      $id_usaha  = mysqli_query($link,$syntax);

      $syntax = sprintf("SELECT id_pegawai, nama FROM pegawai WHERE id_usaha='%s'",$id_usaha);
      $query = mysqli_query($link,$syntax);*/

      $syntax= sprintf("SELECT id_pegawai, nama FROM pegawai WHERE id_usaha = (SELECT id_usaha FROM usaha WHERE email='%s')",$_SESSION["EPemilik"]);
      $query = mysqli_query($link,$syntax);
?>
<head>

  <!--Bootstrap core CSS-->
  <link href="../assets/css/bootstrap.css" rel="stylesheet">
  <!--external css-->
  <link href="../assets/font-awesome/css/font-awesome.css" rel="stylesheet" />


  <!-- Custom styles for this template -->
  <link href="../assets/css/style.css" rel="stylesheet">
  <link href="../assets/css/style-responsive.css" rel="stylesheet">
  <script type="text/javascript" src="../assets/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="../assets/js/jquery-1.8.3.min.js"></script>
  <link rel="stylesheet" type="text/css" href="../assets/css/daftar_karyawan.css">

  <script src="../../../js/loadPage.js" type="text/javascript"></script>
</head>

          <div class="col-lg-12  main-chart">
              <!-- /row mt -->
              <div id=page>
                <section id="main-content">
                    <section class="wrapper site-min-height">
                      <h3><i class="fa fa-angle-right"></i> List of Employees</h3><br>
                       <div class="container">
                        <?php if(mysqli_num_rows($query)>0){ ?>
                            <?php
                                $no = 1;
                                while($data = mysqli_fetch_array($query)){
                                ?>
                                <div class="col-sm-4">
                                      <div class="panel panel-primary">
                                        <div class=" panel-heading">

                                           <div name"tes" class="text-row"><div class="text-name"><?php echo $data["id_pegawai"]; ?></div></div>
                                             <div class="icon-row">
                                               <button type="button" class="btn btn-info btn-edit fa fa-pencil" data-toggle="modal" data-target="#myModal"></button>

                                               <!-- Modal -->
                                                <div id="myModal" class="modal fade" role="dialog">
                                                  <div class="modal-dialog">
                                                    <!-- Modal content-->
                                                    <div class="modal-content">
                                                      <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                        <h4 class="modal-title"><?php echo $data["nama"];?></h4>
                                                      </div>
                                                      <div class="modal-body">
                                                        <p>Biodata</p>
                                                      </div>
                                                      <div class="modal-footer">
                                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                      </div>
                                                    </div>
                                                  </div>
                                                </div>
                                                <!-- Modal end -->

                                             </div>
                                          </div>
                                        <div class="panel-body"><img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image"></div>
                                        <div class="centered panel-footer"><?php echo $data["nama"];?></div>
                                     </div>
                                 </div>
                          <?php $no++; } ?>
                      <?php } ?>
                    </div>


                    <button type="button" class="float pull-right btn btn-info btn-edit fa fa-plus" data-toggle="modal" data-target="#myModal"></button>
                    <!-- Modal -->
                     <div id="myModal" class="modal fade" role="dialog">
                       <div class="modal-dialog" >
                         <!-- Modal content-->
                         <div class="modal-content">
                           <div class="modal-header">
                             <button type="button" class="close" data-dismiss="modal">&times;</button>
                             <h4 class="modal-title"><?php echo $data["nama"];?></h4>
                           </div>
                           <div class="modal-body">
                             <p>Biodata</p>
                           </div>
                           <div class="modal-footer">
                             <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                           </div>
                         </div>
                       </div>
                     </div>

                     <!-- Modal end -->
        </section><!--/wrapper -->
      </section><!-- /MAIN CONTENT -->
    </div>
</div>
<!-- js placed at the end of the document so the pages load faster -->
<script src="../assets/js/jquery.js"></script>
<script src="../assets/js/jquery-1.8.3.min.js"></script>
<script src="../assets/js/bootstrap.min.js"></script>
<script class="include" type="text/javascript" src="../assets/js/jquery.dcjqaccordion.2.7.js"></script>
<script src="../assets/js/jquery.scrollTo.min.js"></script>
<script src="../assets/js/jquery.nicescroll.js" type="text/javascript"></script>
<script src="../assets/js/jquery.sparkline.js"></script>


<!--common script for all pages-->
<script src="../assets/js/common-scripts.js"></script>
<script type="text/javascript" src="../assets/js/gritter/js/jquery.gritter.js"></script>
<script type="text/javascript" src="../assets/js/gritter-conf.js"></script>
