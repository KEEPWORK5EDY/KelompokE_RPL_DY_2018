<?php
session_destroy();
include('../../php/connection.php');

	$day=date("l");
	if (isset($_POST["attend"])){
		$idpegawai= htmlentities(strip_tags($_POST["id_pegawai"]));
		$password= htmlentities (strip_tags($_POST["Password"]));
		$jam = date('H:i:s', time());
		$syntax = sprintf("SELECT id_pegawai,password  FROM pegawai WHERE id_pegawai='%s' AND password='%s'",$idpegawai,$password);
		$query= mysqli_query($link,$syntax);

	    	if(mysqli_num_rows($query)>0){

			$syntaxP = sprintf("SELECT * FROM jadwal j ,shift s WHERE id_pegawai='%s' AND j.id_shift=s.id_shift AND '%s' BETWEEN jam_mulai AND jam_akhir",$idpegawai,$jam);
			$queryPegawai=mysqli_query($link,$syntaxP);
				if(mysqli_num_rows($queryPegawai)>0){
					while($pegawai = mysqli_fetch_array($queryPegawai)){
						 header('Location: ../Dashboard/php/welcome.php');
					}
				}else {
					echo "Maaf id anda tidak terdaftar dalam shift saat ini";
				}

		}else{
			echo "<script>
						 alert ('Password Salah');
						 history.go(-1);
						 </script>";
		}
	}
?>
