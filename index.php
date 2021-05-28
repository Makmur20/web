<?php
	$route = $_GET['r'];

	if ($route == "login"){
		include "login.php";
	}
	elseif ($route == "tampil-data"){
		include "tampil-data.php";
	}
	elseif ($route == "tambah-data"){
		include "tambah.php";
	}else{
		echo "tidak ada halaman";
	}
?>