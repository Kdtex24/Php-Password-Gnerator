<?php
	$conn=mysqli_connect("localhost", "root", "", "db_user_password");
	
	if(!$conn){
		die("Error: Failed to connect to database!");
	}
?>