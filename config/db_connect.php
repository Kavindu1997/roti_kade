<?php

	// connect to the database
	$conn = mysqli_connect('localhost', 'root', '', 'roti_kade_db');

	// check connection
	if(!$conn){
		echo 'Connection error: '. mysqli_connect_error();
	}


?>