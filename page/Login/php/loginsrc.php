<?php
session_start();
include('../../../php/connection.php');

	if (isset($_POST["Signin"])){
		$email= htmlentities(strip_tags($_POST["Email"]));
		$password= htmlentities (strip_tags(hash('sha256', $_POST["Password"])));
		//$password= htmlentities (strip_tags($_POST["Password"]));

		$styntax="select email,password from pemilik where email=$email and password=$password";

		$login = mysqli_query($link,$syntax);

    if(mysqli_num_rows($login)>=0){
			//output data of each row

			header('location: ../../Dashboard');
				//$_SESSION["Email"] = $email;
			}else{
				echo "<script>
							 alert ('Password Salah');
							 history.go(-1);
							 </script>";
			}
		}
?>
