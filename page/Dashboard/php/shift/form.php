<?php
     include "../../../../php/connection.php";

	$nama= htmlentities(strip_tags($_POST["nama_shift"]));
	$jamawal= htmlentities (strip_tags($_POST["jam_mulai"]));
	$jamakhir= htmlentities(strip_tags($_POST["jam_akhir"]));
	$hari= htmlentities(strip_tags($_POST["hari"]));

	$syntax=sprintf("SELECT id_usaha FROM usaha WHERE email='%s'",$_SESSION["EPemilik"]);
    	$query= mysqli_query($link,$syntax);
	$id_usaha;
	while($dataU = mysqli_fetch_array($query)){
		$id_usaha=$dataU["id_usaha"];
	};

		$syntaxS=sprintf("insert into shift (id_shift,nama_shift, id_usaha, jam_mulai, jam_akhir, hari) values(id_shift,'%s','%s','%s','%s','%s')",$nama,$id_usaha,$jamawal,$jamakhir,$hari);

		$daftarShift = mysqli_query($link,$syntaxS);

		if($daftarShift){
			echo "berhasil tambah";
		}else{
			echo "GAGAL";
		}

?>
