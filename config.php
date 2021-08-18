<?php

	$servername = "localhost";
	$username = "id17422226_root";
	$password = "Manalidhokale@123";
	$dbname = "id17422226_d_b";

	$conn = mysqli_connect($servername, $username, $password, $dbname);

	if(!$conn){
		die("Could not connect to the database due to the following error --> ".mysqli_connect_error());
	} 

?>
