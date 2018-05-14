<?php
session_destroy();
include('../../php/connection.php');

	if (isset($_POST["attend"])){
		$idpegawai= htmlentities(strip_tags($_POST["id_pegawai"]));
		$password= htmlentities (strip_tags($_POST["Password"]));

		$syntax = sprintf("SELECT id_pegawai,password  FROM pegawai WHERE id_pegawai='%s' AND password='%s'",$idpegawai,$password);
		$query= mysqli_query($link,$syntax);
    if(mysqli_num_rows($query)>0){
			//output data of each row
			//header('location	:session.php');
				$_SESSION["id_pegawai"] = "$idpegawai";
				echo $idpegawai;
			}else{
				echo "<script>
							 alert ('Password Salah');
							 history.go(-1);
							 </script>";
			}
	}
?>
