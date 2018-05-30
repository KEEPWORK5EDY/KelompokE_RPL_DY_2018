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
            		if(isset($_POST["EPemilik"])){
						$email= htmlentities(strip_tags($_POST["Email"]));
				    	$password= htmlentities (strip_tags(hash('sha256', $_POST["Password"])));
				    	//$password= htmlentities (strip_tags( $_POST["Password"]));
						$nama= htmlentities(strip_tags($_POST["Nama"]));
						$namaUsaha= htmlentities(strip_tags($_POST["Nama_Usaha"]));
						$ttl= htmlentities(strip_tags($_POST["Tanggal_Lahir"]));

						$syntax = sprintf("UPDATE pemilik SET Email='$email', Password='$password', Nama='$nama', Nama_Usaha='$namausaha', Tanggal_Lahir='$ttl' WHERE Email='$email'");
						$login= mysqli_query($link,$syntax);

						if(mysqli_num_rows($query)>0){
							header('location: ../../Dashboard');
							$_SESSION["EPemilik"] = $email;
						}else{
							echo "<script>
										 alert ('Password Salah');
										 history.go(-1);
										 </script>";

						}
					}
            	?>
            	<div class="row">
		      <!-- Your Page Content Here -->
		        <div class="col-md-4 col-md-offset-2">
		          <div class="box box-info">
		            <div class="box-header">
		              <h3 class="box-title">Edit Profil</h3>
		            </div>
		            <form action="profil.php" method="post" role="form">
		                <div class="box-body">
		                  <div class="form-group">
		                    <!-- <label>Username</label>
		                    <div class="input-group">
		                      <div class="input-group-addon">
		                        <i class="fa fa-user"></i>
		                      </div>
		                      <input name="username" type="text" class="form-control" data-inputmask="'alias': 'username'" data-mask disabled value="<?php //echo $user['username']; ?>" required>
		                    </div> -->
		                    <!-- /.input group -->
		                  </div>
		                  <!-- /.form group -->
		                  <div class="form-group">
		                    <label>Email</label>
		                    <placeholder <?php ?> >
		                    <div class="input-group">
		                      <div class="input-group-addon">
		                        <i class="fa fa-envelope"></i>
		                      </div>
		                      <input name="email" type="email" class="form-control" data-inputmask="'alias': 'email" data-mask value="<?php echo $login['email']; ?>" required>
		                    </div>
		                    <!-- /.input group -->
		                  </div>
		                  <!-- /.form group -->
		                  <div class="form-group">
		                    <label>Nama</label>
		                    <div class="input-group">
		                      <div class="input-group-addon">
		                        <i class="fa fa-font"></i>
		                      </div>
		                      <input name="nama" type="text" class="form-control" data-inputmask="'alias': 'nama'" data-mask value="<?php echo $login['nama']; ?>" required>
		                    </div>
		                    <!-- /.input group -->
		                  </div>
		                  <!-- /.form group -->
		                  <div class="form-group">
		                    <label>Tanggal Lahir</label>
		                    <div class="input-group">
		                      <div class="input-group-addon">
		                        <i class="fa fa-calendar"></i>
		                      </div>
		                      <input name="tglLahir" type="date" class="form-control" data-inputmask="'alias': 'tanggal lahir'" data-mask value="<?php echo $user['tglLahir']; ?>">
		                    </div>
		                    <!-- /.input group -->
		                  </div>
		                  <!-- /.form group -->
		                  <div class="form-group">
		                    <label>Deskripsi</label>
		                    <div class="input-group">
		                      <div class="input-group-addon">
		                        <i class="fa fa-comments"></i>
		                      </div>
		                      <textarea name="deskripsi" class="form-control" rows="3" placeholder="Deskripsi"></textarea>
		                    </div>
		                    <!-- /.input group -->
		                  </div>
		                  <!-- /.form group -->
		                </div>
		                <!-- /.box-body -->
		                <div class="box-footer">
		                    <button type="submit" class="btn btn-info pull-right" name="simpanEdit">Simpan</button>
		                </div>
		                <!-- /.box-footer -->
		            </form>
		          </div>
		          <!-- /.box -->
		        </div>

		        <div class="col-md-4">
		          <div class="box box-info">
		            <div class="box-header">
		              <h3 class="box-title">Ganti Password</h3>
		            </div>
		            <form action="profil.php" method="post" role="form">
		              <div class="box-body">
		                <div class="form-group">
		                  <label>Password Lama</label>
		                  <div class="input-group">
		                    <div class="input-group-addon">
		                      <i class="fa fa-key"></i>
		                    </div>
		                    <input name="passlama" type="text" class="form-control" data-inputmask="'alias': 'password'" data-mask required>
		                  </div>
		                  <!-- /.input group -->
		                </div>
		                <!-- /.form group -->
		                <div class="form-group">
		                  <label>Password Baru</label>
		                  <div class="input-group">
		                    <div class="input-group-addon">
		                      <i class="fa fa-key"></i>
		                    </div>
		                    <input name="passbaru1" type="text" class="form-control" data-inputmask="'alias': 'password'" data-mask required>
		                  </div>
		                  <!-- /.input group -->
		                </div>
		                <!-- /.form group -->
		                <div class="form-group">
		                  <label>Konfirmasi Password Baru</label>
		                  <div class="input-group">
		                    <div class="input-group-addon">
		                      <i class="fa fa-key"></i>
		                    </div>
		                    <input name="passbaru2" type="text" class="form-control" data-inputmask="'alias': 'password'" data-mask required>
		                  </div>
		                  <!-- /.input group -->
		                </div>
		                <!-- /.form group -->
		              </div>
		              <!-- /.box-body -->
		              <div class="box-footer">
		                  <button type="submit" class="btn btn-info pull-right" name="simpanPass">Simpan</button>
		              </div>
		              <!-- /.box-footer -->
		            </form>
		          </div>
		          <!-- /.box -->

		          <form action="profil.php" method="post">
		            <button name="hapusAkun" type="submit" class="btn btn-block btn-danger btn-lg">HAPUS AKUN</button>
		          </form>
		        </div>

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