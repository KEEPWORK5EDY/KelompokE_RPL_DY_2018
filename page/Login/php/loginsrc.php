<?php
session_start();
include('../../../php/connection.php');

	if (isset($_POST["Signin"])){
		$email= htmlentities(strip_tags($_POST["Email"]));
		$password= htmlentities(strip_tags(hash('sha256',$_POST["Password"])));

		$syntax = sprintf("SELECT * FROM pemilik WHERE email='%s' AND password='%s'",$email,$password);
		$query= mysqli_query($link,$syntax);

	    if(mysqli_num_rows($query)>0){
			    $data=0;
			    while ($data=mysqli_fetch_array($query)) {
			    if($data["aktivasi"]==1){
						header('location: ../../Dashboard');
						$_SESSION["EPemilik"] = $email;
				}
				else{
					echo "<script>
							alert ('Anda Belum Melakukan konfirmasi');
							history.go(-1);
						</script>";
				}
			}
		}else{
			echo "<script>
						 alert ('Password Salah');
						 history.go(-1);
						 </script>";
		}
	}
?>
