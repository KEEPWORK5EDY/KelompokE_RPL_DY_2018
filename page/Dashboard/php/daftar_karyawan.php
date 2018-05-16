<?php
include "../../../php/connection.php";

      /*$syntax = sprintf("SELECT id_usaha, nama_usaha FROM usaha WHERE email='%s'",$_SESSION["EPemilik"]);
      $id_usaha  = mysqli_query($link,$syntax);

      $syntax = sprintf("SELECT id_pegawai, nama FROM pegawai WHERE id_usaha='%s'",$id_usaha);
      $query = mysqli_query($link,$syntax);*/

      $syntax= sprintf("SELECT * FROM pegawai WHERE id_usaha = (SELECT id_usaha FROM usaha WHERE email='%s')",$_SESSION["EPemilik"]);
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
                                $no = "tes12";
                                while($data = mysqli_fetch_array($query)){
                                ?>
                                <div class="col-sm-4">
                                      <div class="panel panel-primary">
                                        <div class=" panel-heading">

                                           <div name"tes" class="text-row"><div class="text-name"><?php echo $data["id_pegawai"]; ?></div></div>
                                             <div class="icon-row">

                                                   <?php echo '<button type="button" class="btn btn-info btn-edit fa fa-pencil" data-toggle="modal" data-target="#'.$data['id_pegawai'].'"></button>';
                                                         echo '<div id="'.$data['id_pegawai'].'" class="modal fade" role="dialog">';

                                                                 echo'<div class="modal-dialog">';

                                                                   echo'<div class="modal-content">';
                                                                          echo'<div class="modal-header">';
                                                                                echo'<button type="button" class="close" data-dismiss="modal">&times;</button>';
                                                                                echo'<h4 class="modal-title">'.$data["nama"].'</h4>';
                                                                           echo'</div>';

                                                                           echo'<div class="modal-body">';
                                                                                echo '<div class="img-rounded">';
                                                                                     echo  '<img src="../src/download.png" alt="" class="img-responsive center-block">';
                                                                                echo '</div>';
                                                                                echo'
                                                                                     <form action="updateDataPegawai.php" method=post>
                                                                                          <div>
                                                                                               <div class="form-group row">
                                                                                                    <label for="inputEmail3" class="col-sm-2 col-form-label" style="margin-top: 1.4%;">Id Pegawai </label>
                                                                                                         <div class="col-sm-10">
                                                                                                              <input type="text" name=id_pegawai class="form-control" id="'.$data["id_pegawai"].'" placeholder="Id" value='.$data["id_pegawai"].'>
                                                                                                         </div>
                                                                                               </div>
                                                                                               <div class="form-group row">
                                                                                                    <label for="inputPassword3" class="col-sm-2 col-form-label" style="margin-top: 1.4%;">Nama</label>
                                                                                                         <div class="col-sm-10">
                                                                                                              <input type="text" name=nama class="form-control" id="namaUsr" placeholder="Nama" value='.$data["nama"].'>
                                                                                                         </div>
                                                                                               </div>
                                                                                               <div class="form-group row">
                                                                                                    <label for="inputPassword3" class="col-sm-2 col-form-label" style="margin-top: 1.4%;">Password</label>
                                                                                                         <div class="col-sm-10">
                                                                                                              <input type="text" name=password class="form-control" id="passUsr" placeholder="Password" value='.$data["password"].'>
                                                                                                         </div>
                                                                                               </div>
                                                                                               <div class="button-container">
                                                                                                    <button type="button" name=save class="btn btn-default" data-dismiss="modal">Save</button>
                                                                                               </div>
                                                                                          </div>
                                                                                     </from>';
                                                                           echo'</div>';

                                                                 echo'</div>';
                                                                 echo'</div>';
                                                              echo'</div>';


                                               echo'</div>';
                                            echo'</div>';?>
                                        <div class="panel-body"><img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image"></div>
                                        <div class="centered panel-footer"><?php echo $data["nama"];?></div>
                                     </div>
                                 </div>
                          <?php  } ?>
                      <?php } ?>
                    </div>


                    <div>
                    <button type="button" class="float pull-right btn btn-info btn-edit fa fa-plus" data-toggle="modal" data-target="#tes"></button>
                    <!-- Modal -->
                     <div id="tes" class="modal fade" role="dialog">
                       <div class="modal-dialog" >
                         <!-- Modal content-->
                         <div class="modal-content">
                           <div class="modal-header">
                             <button type="button" class="close" data-dismiss="modal">&times;</button>
                             <h4 class="modal-title">Add Employees</h4>
                           </div>
                           <div class="modal-body" style="padding-top: 0;padding-bottom: 0;">
                             <div class="img-rounded">
                               <img src="../src/download.png" alt="" class="img-responsive center-block">
                             </div>
                             <form action="insertDataPegawai.php" method=post>

                                       <div class="form-group row">
                                            <label for="inputEmail3" class="col-sm-2 col-form-label" style="margin-top: 1.4%;">Id Pegawai </label>
                                                 <div class="col-sm-10">
                                                      <input type="text" name=id_pegawai class="form-control">
                                                 </div>
                                       </div>
                                       <div class="form-group row">
                                            <label for="inputPassword3" class="col-sm-2 col-form-label" style="margin-top: 1.4%;">Nama</label>
                                                 <div class="col-sm-10">
                                                      <input type="text" name=nama class="form-control">
                                                 </div>
                                       </div>
                                       <div class="form-group row">
                                            <label for="inputPassword3" class="col-sm-2 col-form-label" style="margin-top: 1.4%;">Password</label>
                                                 <div class="col-sm-10">
                                                      <input type="text" name=password class="form-control">
                                                 </div>
                                       </div>
                                            <div class="modal-footer">
                                                 <button type="button" name="Save" class="btn btn-default" data-dismiss="modal">Save</button>
                                           </div>

                             </from>

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
