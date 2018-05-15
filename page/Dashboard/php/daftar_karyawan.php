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
                                                                           echo'<h4 class="modal-title"><?php echo $data["nama"];?></h4>';
                                                                      echo'</div>';
                                                                           echo'<div class="modal-body">';
                                                                           echo '<div class="img-rounded">';
                                                                            echo  '<img src="../src/download.png" alt="" class="img-responsive center-block">';
                                                                           echo '</div>';
                                                                                    echo '<div class="form-group">';
                                                                                      echo '<label for="id_usr">Id User:</label>';
                                                                                      echo "<input type='text' class='form-control' id='id_usr' value='".$data["id_pegawai"]."'>";

                                                                                      echo '<div class="form-group">';
                                                                                       echo '<label for="usr">Name:</label>';
                                                                                       echo "<input type='text' class='form-control' id='id_usr' value='".$data["nama"]."'>";
                                                                                      echo '</div>';

                                                                                      echo '<div class="form-group">';
                                                                                       echo '<label for="usr">Password:</label>';
                                                                                       echo "<input type='text' class='form-control' id='id_usr' value='".$data["password"]."'>";
                                                                                      echo '</div>';
                                                                                    echo '</div>';
                                                                                     //echo "<br>"    ;
                                                                                     //echo hash('sha256',$data["password"]);

                                                                           echo'</div>';
                                                                          echo'<div class="modal-footer">';
                                                                          echo'<button type="button" class="btn btn-default" data-dismiss="modal">Save</button>';
                                                                       echo'<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>';
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
                           <div class="modal-body">
                             <div class="img-rounded">
                               <img src="../src/download.png" alt="" class="img-responsive center-block">
                             </div>
                             <div class="form-group">
                              <label for="id_usr">Id User:</label>
                              <input type="text" class="form-control" id="id_usr">
                             <div class="form-group">
                              <label for="usr">Name:</label>
                              <input type="text" class="form-control" id="usr">
                            </div>
                            <div class="form-group">
                              <label for="pwd">Password:</label>
                              <input type="password" class="form-control" id="pwd">
                            </div>
                           </div>
                           <div class="modal-footer">
                             <button type="button" class="btn btn-default" data-dismiss="modal">Save</button>
                             <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>

                           </div>
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
