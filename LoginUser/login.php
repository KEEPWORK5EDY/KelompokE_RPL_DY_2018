<?php
session_start();
include('connection.php');

	if (isset($_POST["attend"])){
		$idpegawai= htmlentities(strip_tags($_POST["id_pegawai"]));
		$password= htmlentities (strip_tags(hash('sha256', $_POST["Password"])));

		$syntax="select id_pegawai,password from pegawai where id_pegawai='$idpegawai' and password='$password'";

		$login = mysqli_query($link,$syntax);

    if(mysqli_num_rows($login)>0){
			//output data of each row

			header('location:session.php');
				$_SESSION["Email"] = $email;
			}else{
				echo "<script>
							 alert ('Password Salah');
							 history.go(-1);
							 </script>";
			}
	}
?>
