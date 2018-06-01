<?php
     include "../../../php/connection.php";
?>
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
						// $email= htmlentities(strip_tags($_POST["email"]));
				    	// $password= htmlentities (strip_tags(hash('sha256', $_POST["Password"])));
				    	//$password= htmlentities (strip_tags( $_POST["Password"]));
						$nama= htmlentities(strip_tags($_POST["nama"]));
						// $namaUsaha= htmlentities(strip_tags($_POST["Nama_Usaha"]));
						$ttl= htmlentities(strip_tags($_POST["tglLahir"]));

						// $syntax = sprintf("SELECT * from pemilik WHERE Email='$email', Password='$password', Nama='$nama', Nama_Usaha='$namausaha', Tanggal_Lahir='$ttl'");
						$sql = "UPDATE `pemilik` SET `Nama` = '$nama', Tanggal_Lahir = '$ttl' WHERE `pemilik`.`Email` = '$_SESSION[EPemilik]';";
						$status= mysqli_query($link,$sql);

						if ($status) {
							echo "<script>alert('Data berhasil diupdate.')</script>";
						}else{
							echo "<script>alert('Data gagal diupdate.')</script>";
						}
					}

					if (isset($_POST["ganti_password"])) {
						$passlama= htmlentities(strip_tags(hash('sha256',$_POST["passlama"])));
						$passbaru1= htmlentities(strip_tags($_POST["passbaru1"]));
						$passbaru2= htmlentities(strip_tags($_POST["passbaru2"]));

						$sql = "SELECT count(*) as total from pemilik where Email='$_SESSION[EPemilik]' and Password = '$passlama'";
						$total = mysqli_query($link, $sql);
						$total = mysqli_fetch_assoc($total);

						$status_validasi = true;
						if ($total['total'] == 0) {
							echo "<script>alert('Password lama salah.')</script>";
							$status_validasi = false;
						}

						if ($passbaru1 != $passbaru2) {
							echo "<script>alert('Password baru dan konfirmasi password baru harus sama.')</script>";
							$status_validasi = false;
						}

						if ($status_validasi) {
							$passbaru1 = hash('sha256',$passbaru1);
							$sql = "UPDATE `pemilik` SET `Password` = '$passbaru1'WHERE `pemilik`.`Email` = '$_SESSION[EPemilik]';";
							$status= mysqli_query($link,$sql);

							if ($status) {
								echo "<script>alert('Data berhasil diupdate.')</script>";
							}else{
								echo "<script>alert('Data gagal diupdate.')</script>";
							}
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
		                      <?php
		                      		$sql="SELECT * from pemilik where Email = '$_SESSION[EPemilik]'";
		                      		$data = mysqli_query($link, $sql);
		                      		$data = mysqli_fetch_assoc($data);
		                      	?>
		                      <input name="email" type="text" class="form-control" value="<?php echo $data['Email']; ?>" data-inputmask="'alias': 'email" data-mask placeholder="Email" disabled>
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
		                      <input name="nama" type="text" value="<?php echo $data['Nama']; ?>" class="form-control" data-inputmask="'alias': 'nama'" data-mask value="<?php echo $login['nama']; ?>" placeholder="Nama" required>
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
		                      <?php
		                      	// $tanggal_lahir = date("m-d-Y", strtotime($data['Tanggal_Lahir']));
		                      ?>
		                      <input name="tglLahir" type="date" class="form-control" data-inputmask="'alias': 'tanggal lahir'" data-mask value="<?php echo $data['Tanggal_Lahir']; ?>">
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
		                    <button type="submit" class="btn btn-info pull-right" name="EPemilik">Simpan</button>
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
		                    <input name="passlama" type="password" class="form-control" data-inputmask="'alias': 'password'" data-mask required>
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
		                    <input name="passbaru1" type="password" class="form-control" data-inputmask="'alias': 'password'" data-mask required>
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
		                    <input name="passbaru2" type="password" class="form-control" data-inputmask="'alias': 'password'" data-mask required>
		                  </div>
		                  <!-- /.input group -->
		                </div>
		                <!-- /.form group -->
		              </div>
		              <!-- /.box-body -->
		              <div class="box-footer">
		                  <button type="submit" class="btn btn-info pull-right" name="ganti_password">Simpan</button>
		              </div>
		              <!-- /.box-footer -->
		            </form>
		          <!-- </div> -->
		          <!-- /.box -->

		          <!-- <form action="profil.php" method="post">
		            <button name="hapusAkun" type="submit" class="btn btn-block btn-danger btn-lg">HAPUS AKUN</button>
		          </form>
		        </div> -->

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
