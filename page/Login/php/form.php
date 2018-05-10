<?php
include('../../../php/connection.php');

	if (isset($_POST["Signup"])){
		$email= htmlentities(strip_tags($_POST["Email"]));
    $password= htmlentities (strip_tags(hash('sha256', $_POST["Password"])));
    //$password= htmlentities (strip_tags( $_POST["Password"]));
		$nama= htmlentities(strip_tags($_POST["Nama"]));
		$namaUsaha= htmlentities(strip_tags($_POST["Nama_Usaha"]));
		$ttl= htmlentities(strip_tags($_POST["Tanggal_Lahir"]));

		$syntax="insert into pemilik values('$email','$password','$nama','$ttl')";

		$syntax = sprintf("INSERT INTO pemilik VALUES('%s','%s','%s','%s')",$email,$password,$nama,$ttl);
		$login= mysqli_query($link,$syntax);

		if($login){
			header('location: ../register/regis.html');
			$syntax = sprintf("INSERT INTO usaha VALUES('%s','%s','DEFAULT')",$email,$namaUsaha);
			$query= mysqli_query($link,$syntax);
		}else{
			echo "<script>
						 alert ('Email is already registered');
						 history.go(-1);
						 </script>";
	 }
	}
?>
