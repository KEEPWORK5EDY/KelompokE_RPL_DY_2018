<?php
include "../../../../../php/connection.php";
	if (isset($_POST["shift"])){
		$nama= htmlentities(strip_tags($_POST["nama_shift"]));
    $jamawal= htmlentities (strip_tags($_POST["jam_mulai"]));
		$jamakhir= htmlentities(strip_tags($_POST["jam_akhir"]));
		$hari= htmlentities(strip_tags($_POST["hari"]));
    $regis=spraintf("SELECT id_usaha FROM usaha WHERE email='%s'",$_SESSION["EPemilik"]);

    $daftarVar = mysqli_query($link,$regis);
      if(mysqli_num_rows($daftarVar)>0){
           while($dataJadwal = mysqli_fetch_array($daftarVar)){}}
		$syntax="insert into shift (nama_shift, id_usaha, jam_mulai, jam_akhir, hari) values('$nama','$dataJadwal','$jamawal','$jamakhir','$hari')";

		$daftar = mysqli_query($link,$syntax);

		if($daftar){
			echo "berhasil tambah";
		}else{
			echo "<script>
						 alert ('Gagal menambahkan');
						 history.go(-1);
						 </script>";
	 }
	}
?>
