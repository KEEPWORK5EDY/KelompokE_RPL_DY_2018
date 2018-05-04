<?php
include('connection.php');

	if (isset($_POST["Signup"])){
		$email= htmlentities(strip_tags($_POST["Email"]));
    $password= htmlentities (strip_tags(hash('sha256', $_POST["Password"])));
		$nama= htmlentities(strip_tags($_POST["Nama"]));
		$ttl= htmlentities(strip_tags($_POST["Tanggal_Lahir"]));

		$syntax="insert into pemilik values('$email','$password','$nama','$ttl')";

		$login = mysqli_query($link,$syntax);

		if($login){
			header('location:register/regis.html');
		}else{
			echo '<script language="javascript">
						 alert ("Email is already registered");
						 window.location="index.html";
						 </script>';
						 exit();
		}
	}
?>
