<?php 

	$koneksi = mysqli_connect("localhost","root","","lovely");
 
	// Check connection
	if (mysqli_connect_error()){
		echo "Koneksi database gagal : " . mysqli_connect_error();
	}

 ?>