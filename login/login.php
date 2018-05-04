<?php
session_start();
include('connection.php');

	if (isset($_POST["Signin"])){
		$email= htmlentities(strip_tags($_POST["Email"]));
		$password= htmlentities (strip_tags(hash('sha256', $_POST["Password"])));

		$syntax="select email,password from pemilik where  email='$email' and password='$password'";

		$login = mysqli_query($link,$syntax);

    if(mysqli_num_rows($login)>0){
			//output data of each row

			header('location:session.php');
				$_SESSION["Email"] = $email;
			}else{
				echo "password salah\n";
			}
	}
?>
