<?php
	require_once 'conn.php';
	function randPass($len, $set = "")
		{
			$gen = "";
			for($i = 0; $i < $len; $i++)
				{
					$set = str_shuffle($set);
					$gen.= $set[0]; 
				}
			return $gen;
		}
		
	$query=mysqli_query($conn, "SELECT * FROM `user`") or die(mysqli_error());
	while($fetch = mysqli_fetch_array($query)){
		$id = $fetch['user_id'];		
		$pass =  randPass(12, 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890');	
		mysqli_query($conn, "UPDATE `user` SET `password` = '$pass' WHERE `user_id` = '$id'") or die(mysql_error());
	}
	header("location:index.php");
?>