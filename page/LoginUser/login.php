<?php
session_destroy();
include('../../php/connection.php');

	$day=date("l");
	if (isset($_POST["attend"])){
		$idpegawai= htmlentities(strip_tags($_POST["id_pegawai"]));
		$password= htmlentities (strip_tags($_POST["Password"]));

		$syntax = sprintf("SELECT id_pegawai,password  FROM pegawai WHERE id_pegawai='%s' AND password='%s'",$idpegawai,$password);
		$query= mysqli_query($link,$syntax);

	    if(mysqli_num_rows($query)>0){
		//output data of each row
		//header('location	:session.php');
			$_SESSION["id_pegawai"] = "$idpegawai";
			$syntaxP = sprintf("SELECT * FROM jadwal WHERE id_pegawai='%s'",$idpegawai);
			$queryPegawai=mysqli_query($link,$syntaxP);
			while($pegawai = mysqli_fetch_array($queryPegawai)){
			//$syntax = sprintf("INSERT INTO pegawai VALUES('%s','%s')",$idpegawai,$password);
				$syntaxS=sprintf("SELECT * FROM shift WHERE id_shift='%s'",$pegawai["id_shift"]);
					$queryS=mysqli_query($link,$syntaxS);
						while ($queryShiftPro = mysqli_fetch_array($queryS)) {
							echo $queryShiftPro["id_shift"];
							echo $queryShiftPro["nama_shift"];
							echo $queryShiftPro["jam_mulai"];
							echo "<br>";
							$date = date('H:i:s', time());
							echo $date;
							echo "<br>";


						}
				//echo $pegawai["id_shift"];
			}

		}else{
			echo "<script>
						 alert ('Password Salah');
						 history.go(-1);
						 </script>";
		}
	}
?>
