<?php
	require_once'conn.php';
	if(ISSET($_POST['insert'])){
		$firstname=$_POST['firstname'];
		$lastname=$_POST['lastname'];
		$username=$_POST['username'];
		
		
		mysqli_query($conn, "INSERT INTO `user` VALUES('', '$firstname', '$lastname', '$username', '')") or die(mysqli_error());
		
		header("location:index.php");
	}
?>