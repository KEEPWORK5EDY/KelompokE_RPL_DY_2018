<?php
//session_destroy();
session_start();
include('../../../php/connection.php');

	if (isset($_POST["Signin"])){
		$email= htmlentities(strip_tags($_POST["Email"]));
		$password= htmlentities(strip_tags(hash('sha256',$_POST["Password"])));

		$syntax = sprintf("SELECT email FROM pemilik WHERE email='%s' AND password='%s'",$email,$password);
		$query= mysqli_query($link,$syntax);

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
