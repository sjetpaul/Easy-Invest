<?php 
//connect to database
	$con = mysqli_connect("localhost","root","","admin");

	// chech connection
		if(mysqli_connect_errno()){
			echo "Failed to connect Mysql:" . mysqli_connect_errno();
		}
	// Table Names
		$tb_login = "login";
?>
