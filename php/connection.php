<?php
	$dbhost="localhost";
	$dbuser="zikri";
	$dbpass="kode-48MZA";
	$dbname="keepwork";
	$link = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);


	include 'session.php';

			if(!$link){
					die("gagal konek dengan database".mysqli_connect_errno()."-".mysqli_connect_error());
			} else{

			}
?>
