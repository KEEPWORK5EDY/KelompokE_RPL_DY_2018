<?php
include "../../../php/connection.php";
include "tampil.php";
$query = mysqli_query($link,"SELECT id_pegawai, nama, password FROM pegawai ORDER BY id_pegawai ASC");
?>
<head>
  <link rel="stylesheet" type="text/css" href="../assets/css/daftar_karyawan.css">
</head>

      <div class="row">
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
                                           <div name"tes" class="text-row"><div class="text-name"><?php echo $data["nama"];?></div></div>
                                           <div class="icon-row">
                                                   <button type="button" class="btn btn-info btn-lg btn-edit" data-toggle="modal" data-target="#myModal">E</button>
                                           </div>
                                        </div>
                                        <div class="panel-body"><img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image"></div>
                                        <div class="centered panel-footer">Buy 50 mobiles and get a gift card</div>

                                     </div>
                                 </div>
                          <?php $no++; } ?>
                      <?php } ?>
    </div>
    </section><!--/wrapper -->
      </section><!-- /MAIN CONTENT -->
    </div>
</div>
</div>
