<?php

	$servername = "localhost";
	$username = "id17264099_root";
	$password = "Nq_<o_==!#@?uN9N";
	$dbname = "id17264099_swiss_bank";

	$conn = mysqli_connect($servername, $username, $password, $dbname);

	if(!$conn){
		die("Could not connect to the database due to the following error --> ".mysqli_connect_error());
	}

?>