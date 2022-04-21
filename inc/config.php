<?php 
//database Name
    $database = "register_user";
//connect to database
	$con = mysqli_connect("localhost","root","",$database); 
		if(mysqli_connect_errno()){
			echo "Failed to connect Mysql:" . mysqli_connect_errno();
		}
	// Table Names
		$tb_login = "register_user1";

	// Table Name for risk_analyze
		$tb_login2 = "risk_data";
?>
